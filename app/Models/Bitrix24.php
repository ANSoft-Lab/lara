<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;
use Log;
use Session;

class Bitrix24 extends Model
{

    public static $config = [
        'CRM_HOST' => 'crm.finist.com',
        'CRM_PORT' => '443',
        'CRM_PATH' => '/crm/configs/import/lead.php',
        'CRM_LOGIN' => 'internet@finist.com',
        'CRM_PASSWORD' => '9eC0jwIItriq4gc6qp5f',
    ];

    public static function createMortgageCalculationLead($data)
    {
        $source_suffix = '[Страхование ипотеки]';

        $comment = [];
        $comment[] = 'Город: ' . $data['city'];
        $comment[] = 'Банк: ' . $data['bank'];
        $comment[] = 'Возраст: ' . $data['age'];
        $comment[] = 'Пол: ' . $data['sex'];
        $comment[] = 'Сумма долга: ' . $data['debtAmount'];

        $postData = [];
        $postData['fields'] = [
            'UF_CRM_1530097598' => "Web",
            'STATUS_ID' => "NEW",
            'OPENED' => "Y",
            'TITLE' => "finist.ru{$source_suffix} " . date("d.m.Y H:i"),
            'PHONE' => $data['phone'],
            'UF_CRM_1540975152' => implode("\n", $comment),
        ];

        $postData['LOGIN'] = self::$config['CRM_LOGIN'];
        $postData['PASSWORD'] = self::$config['CRM_PASSWORD'];

        $url = 'https://crm.finist.com/rest/22/80d0z25kem4dtxed/crm.lead.add.json';
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_exec($curl);
        curl_close($curl);
        return true;
    }

    public static function sendLead($order)
    {

        $params = self::prepareFields($order);

        $source_suffix = "";
        if (preg_match("|services/legalservices|i", getenv("HTTP_REFERER"))) {
            $source_suffix = " [Юр.услуги]";
        }

        $postData = [
            'UF_CRM_1530097598' => "Web",
            'TITLE' => "finist.ru{$source_suffix} " . date("d.m.Y H:i") . " ({$order->name})", // заголовок для лида
            'NAME' => $order->name,
            //            'LAST_NAME' => $order->lastname,
            'PHONE_MOBILE' => $order->phone,
            'EMAIL_HOME' => $params['email'],
            'STATUS_ID' => "NEW",
            'OPENED' => "Y",
            'SOURCE_ID' => $params['source'],
            'ASSIGNED_BY_ID' => $params['assigned_by'],
            'UF_CRM_1540975152' => $params['comments'],
        ];

        if (Session::has('utm_info')) {
            $utm = Session::get('utm_info');

            $postData['UTM_CAMPAIGN'] = isset($utm['utm_campaign']) ? $utm['utm_campaign'] : '';
            $postData['UTM_CONTENT'] = isset($utm['utm_content']) ? $utm['utm_content'] : '';
            $postData['UTM_MEDIUM'] = isset($utm['utm_medium']) ? $utm['utm_medium'] : '';
            $postData['UTM_SOURCE'] = isset($utm['utm_source']) ? $utm['utm_source'] : '';
            $postData['UTM_TERM'] = isset($utm['utm_term']) ? $utm['utm_term'] : '';
        }

        logger(print_r($postData, true));

        $postData['LOGIN'] = self::$config['CRM_LOGIN'];
        $postData['PASSWORD'] = self::$config['CRM_PASSWORD'];

        if (config('app.debug')) {
            return false;
        }

        try {
            $fp = fsockopen("ssl://" . self::$config['CRM_HOST'], self::$config['CRM_PORT'], $errno, $errstr, 30);
        } catch (\Exception $ex) {
            logger($ex->getMessage());
            return false;
        }

        if (isset($fp)) {
            $strPostData = '';
            foreach ($postData as $key => $value)
                $strPostData .= ($strPostData == '' ? '' : '&') . $key . '=' . urlencode($value);

            $str = "POST " . self::$config['CRM_PATH'] . " HTTP/1.0\r\n";
            $str .= "Host: " . self::$config['CRM_HOST'] . "\r\n";
            $str .= "Content-Type: application/x-www-form-urlencoded\r\n";
            $str .= "Content-Length: " . strlen($strPostData) . "\r\n";
            $str .= "Connection: close\r\n\r\n";
            $str .= $strPostData;

            fwrite($fp, $str);

            $result = '';
            while (!feof($fp)) {
                $result .= fgets($fp, 128);
            }
            fclose($fp);
            $response = explode("\r\n\r\n", $result);

            $jdata = preg_replace("/\'/", "\"", $response[1]);
            $json = json_decode($jdata);
            if (json_last_error() !== JSON_ERROR_NONE) {
                Log::debug(__FUNCTION__ . ' (' . __FILE__ . ')' . ': ' . json_last_error_msg());
            }
            //            DB::table('order_requests')->where('id', $order->id)->update(['bitrix24_res' => json_encode($json), 'bitrix24_lead_id' => @$json->ID]);

            return $json;
        } else {
            logger("Connection Failed!");
        }

        return false;
    }

    public static function getLead($lead_id)
    {
        $queryUrl = 'https://' . self::$config['CRM_HOST'] . '/rest/22/80d0z25kem4dtxed/crm.lead.get.json';

        $queryData = http_build_query(array(
            'id' => $lead_id,
        ));

        $curl = curl_init();
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_POST => 1,
                CURLOPT_HEADER => 0,
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => $queryUrl,
                CURLOPT_POSTFIELDS => $queryData,
            )
        );
        $result = curl_exec($curl);
        curl_close($curl);

        if ($result && @json_decode($result)) {
            Log::debug(print_r($result, true));
            return $result;
        } else {
            return false;
        }
    }

    public static function updateLead($params, $lead_id)
    {
        $lead = self::getLead($lead_id);
        if ($lead) {
            $lead = json_decode($lead);
            if (isset($lead->result) && isset($lead->result->UF_CRM_1540975152)) {
                $old_comment = $lead->result->UF_CRM_1540975152;

                $fields = ['firstname' => 'Имя', 'name' => 'Имя', 'lastname' => 'Фамилия', 'phone' => 'Телефон', 'email' => 'E-mail', 'source' => 'Источник', 'assigned_by' => '', 'car_mark' => 'Марка авто', 'car_model' => 'Модель авто', 'car_year' => 'Год выпуска', 'car_cost' => 'Стоимость авто', 'region' => 'Регион страхования', 'driver_exp' => 'Опыт водителя', 'driver_age' => 'Возраст водителя', 'promocode' => 'Код', 'datetime' => 'Дата'];

                foreach ($fields as $key => $title) {
                    if (array_key_exists($key, $params)) {
                        $params[$title] = $params[$key];
                        unset($params[$key]);
                    }
                }

                $comment = "Дополнительный расчёт:\n";
                foreach ($params as $t => $line) {
                    $comment .= $t . ": " . $line . "\n";
                }

                $queryUrl = 'https://' . self::$config['CRM_HOST'] . '/rest/22/80d0z25kem4dtxed/crm.lead.update.json';

                $queryData = http_build_query(array(
                    'id' => $lead_id,
                    'fields' => array(
                        'UF_CRM_1540975152' => $comment . "\r\n --------------- \r\n" . $old_comment,
                    ),
                ));

                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_SSL_VERIFYPEER => 0,
                    CURLOPT_POST => 1,
                    CURLOPT_HEADER => 0,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => $queryUrl,
                    CURLOPT_POSTFIELDS => $queryData,
                ));
                $result = curl_exec($curl);
                curl_close($curl);

                Log::debug(print_r($result, true));
            } else {
                Log::error('Update lead error. ID: ' . json_encode($lead_id) . "\n" . json_encode($lead, JSON_UNESCAPED_UNICODE));
            }
        } else {
            Log::error('Update lead error. ID: ' . $lead_id);
        }
    }

    private static function prepareFields($order)
    {

        $params = [];

        $fields = [
            'datetime' => 'Дата',
            'firstname' => 'Имя',
            'name' => 'Имя',
            'lastname' => 'Фамилия',
            'phone' => 'Телефон',
            'email' => 'E-mail',
            'source' => 'Источник',
            'assigned_by' => '',
            'rate' => 'Процентная ставка',
            'credit_sum' => 'Сумма кредита',
            'credit_duration' => 'Срок кредита',
            'issue_date' => 'Дата выдачи кредита',
            'promocode' => 'Код',
        ];

        foreach ($fields as $key => $title) {
            if (!isset($params[$key])) {
                $params[$key] = '';
            }
        }


        if ($params['source'] == '') {
            $params['source'] = "Сайт finist.ru";
        }

        if ($params['assigned_by'] == '') {
            $params['assigned_by'] = '22';
        }

        $comments = $order->comment . "\n";
        foreach ($fields as $key => $title) {
            if ($params[$key] != '' && $title != '') {
                $comments .= "{$title}: {$params[$key]}\n";
            }
        }
        //        $comments .= "Регион: " . ($order->region ? $order->region->name : '-') . "\n";
        $comments .= "IP: " . getenv("REMOTE_ADDR") . "\n";
        $comments .= "Host: " . getenv("HTTP_REFERER") . "\n";

        if (Session::has('utm_info')) {
            $utm = Session::get('utm_info');

            $comments .= isset($utm['utm_campaign']) ? "utm_campaign={$utm['utm_campaign']}\n" : '';
            $comments .= isset($utm['utm_content']) ? "utm_content={$utm['utm_content']}\n" : '';
            $comments .= isset($utm['utm_medium']) ? "utm_medium={$utm['utm_medium']}\n" : '';
            $comments .= isset($utm['utm_source']) ? "utm_source={$utm['utm_source']}\n" : '';
            $comments .= isset($utm['utm_term']) ? "utm_term={$utm['utm_term']}\n" : '';
        }

        $params['comments'] = $comments;

        $params['email'] = '';

        return $params;
    }
}

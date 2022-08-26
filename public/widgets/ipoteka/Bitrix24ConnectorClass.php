<?php

class Bitrix24ConnectorClass {

    public static $config = [
        'CRM_HOST' => 'crm.finist.com',
        'CRM_PORT' => '443',
        'CRM_PATH' => '/crm/configs/import/lead.php',
        'CRM_LOGIN' => 'internet@finist.com',
        'CRM_PASSWORD' => '9eC0jwIItriq4gc6qp5f',
    ];

    public static function sendLead($order) {

        switch($order['wid'])
        {
            case 1001:
                $order['referer'] = 'in-secrets';
            case 1002:
                $order['referer'] = 'мордвес.рф';
            case 1003:
                exit;
                $order['referer'] = 'gk-profit.ru';
            default:
                $order['referer'] = 'partner'.intval($order['wid']);
        }

        $params = self::prepareFields($order);

        $postData = [
            'UF_CRM_1530097598' => "Web",
            'TITLE' => ("Виджет Ипотеки {$order['referer']}" ?? 'Виджет Ипотеки') . " " . date("d.m.Y H:i") . " ({$params['fullName']})", // заголовок для лида
            'NAME' => $params['fullName'],
            'PHONE_MOBILE' => $params['phone'],
            'EMAIL_HOME' => $params['email'],
            'STATUS_ID' => "NEW",
            'OPENED' => "Y",
            'SOURCE_ID' => 'widget '.($order['referer'] ?? ''),
            'ASSIGNED_BY_ID' => $params['assigned_by'],
            'UF_CRM_1540975152' => $params['comments'],
        ];

/*
        if (Session::has('utm_info')) {
            $utm = Session::get('utm_info');

            $postData['UTM_CAMPAIGN'] = isset($utm['utm_campaign']) ? $utm['utm_campaign'] : '';
            $postData['UTM_CONTENT'] = isset($utm['utm_content']) ? $utm['utm_content'] : '';
            $postData['UTM_MEDIUM'] = isset($utm['utm_medium']) ? $utm['utm_medium'] : '';
            $postData['UTM_SOURCE'] = isset($utm['utm_source']) ? $utm['utm_source'] : '';
            $postData['UTM_TERM'] = isset($utm['utm_term']) ? $utm['utm_term'] : '';
        }

        logger(print_r($postData, true));
 */

        $postData['LOGIN'] = self::$config['CRM_LOGIN'];
        $postData['PASSWORD'] = self::$config['CRM_PASSWORD'];

        file_put_contents("/hosting/users/finist/widgets_logs/ipoteka.log", "\n".date("d.m.Y H:i:s")."\t".json_encode($postData, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES), FILE_APPEND);

        $new_id = self::sendToDB($order);

        try {
            $fp = fsockopen("ssl://" . self::$config['CRM_HOST'], self::$config['CRM_PORT'], $errno, $errstr, 30);
        } catch (\Exception $ex) {
//            logger($ex->getMessage());
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
            while (! feof($fp)) {
                $result .= fgets($fp, 128);
            }
            fclose($fp);
            $response = explode("\r\n\r\n", $result);

            $jdata = preg_replace("/\'/", "\"", $response[1]);
            $json = json_decode($jdata);
            if (json_last_error() !== JSON_ERROR_NONE) {
//                Log::debug(__FUNCTION__ . ' (' . __FILE__ . ')' . ': ' . json_last_error_msg());
            }
//            DB::table('order_requests')->where('id', $order->id)->update(['bitrix24_res' => json_encode($json), 'bitrix24_lead_id' => @$json->ID]);
            self::updateLeadInDB($new_id, @$json->ID, json_encode($json, JSON_UNESCAPED_UNICODE));

            return $order;
        } else {
            logger("Connection Failed!");
        }
    }

    private static function prepareFields($params) {

        $fields = [
            'datetime' => 'Дата', 
            'firstname' => 'Имя', 
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

            'fullName' => 'Имя', 
            'downPayment' => 'Первый взнос', 
            'creditAmount' => 'Сумма кредита',
            'creditTerm' => 'Срок кредита, лет',
            'issueDate' => 'Дата выдачи',
        ];

        foreach ($fields as $key => $title) {
            if (! isset($params[$key])) { $params[$key] = ''; }
        }
            

        if ($params['source'] == '') {
            $params['source'] = "Партнер с сайта (виджет) " . ($params['referer'] ?? '-');
        }
        
        if ($params['assigned_by'] == '') {
            $params['assigned_by'] = '22';
        }
        
        $comments = "";
        foreach ($fields as $key => $title) {
            if ($params[$key] != '' && $title != '') {
                $comments .= "{$title}: {$params[$key]}\n";
            }
        }
        $comments .= "IP: " . getenv("REMOTE_ADDR") . "\n";
        $comments .= "Referer: ".($params['referer'] ?? 'Виджет')."\n";
        $comments .= "Host: " . getenv("HTTP_HOST") . "\n";

/*
        if (Session::has('utm_info')) {
            $utm = Session::get('utm_info');

            $comments .= isset($utm['utm_campaign']) ? "utm_campaign={$utm['utm_campaign']}\n" : '';
            $comments .= isset($utm['utm_content']) ? "utm_content={$utm['utm_content']}\n" : '';
            $comments .= isset($utm['utm_medium']) ? "utm_medium={$utm['utm_medium']}\n" : '';
            $comments .= isset($utm['utm_source']) ? "utm_source={$utm['utm_source']}\n" : '';
            $comments .= isset($utm['utm_term']) ? "utm_term={$utm['utm_term']}\n" : '';
        }
*/

        $params['comments'] = $comments;

        $params['email'] = '';

        return $params;
    }

    private static function sendToDB($order) {
        $db = new mysqli('localhost', 'finist', 'HGdsRtds6dju', 'finist');

        $sql = [
            'firstname' => $order['fullName'],
            'phone' => $order['phone'],
            'credit_details' => json_encode(
		['rate' => $order['downPayment'] ?? '', "credit_sum" => $order['creditAmount'] ?? '', "issue_date" => $order['issueDate'] ?? '', "credit_duration" => $order['creditTerm'] ?? '', ],
		JSON_UNESCAPED_UNICODE),
            'bitrix24_lead_id' => $order['bitrix24_lead_id'] ?? 0,
            'utm_source' => 'widget',
            'utm_campaign' => $order['referer'] ?? '',
        ];

        if($order['bitrix24_res']) {
            $sql['bitrix24_res'] = $order['bitrix24_res'];
        }

        $ires = self::compile_db_insert_string($sql);
        $q = "INSERT INTO order_requests ({$ires['FIELD_NAMES']}) VALUES ({$ires['FIELD_VALUES']})";
        file_put_contents("/hosting/users/finist/widgets_logs/lastsql.log", $q);
        $db->query('SET NAMES utf8;');
        $db->query($q);
        $new_id = $db->insert_id;
        $db->close();
        return $new_id;
    }

    private static function updateLeadInDB($id, $bitrix24_lead_id, $bitrix24_res) {
        $db = new mysqli('localhost', 'finist', 'HGdsRtds6dju', 'finist');

        if(!intval($id)) return;

        $q = "UPDATE order_requests SET bitrix24_lead_id='{$bitrix24_lead_id}', bitrix24_res='{$bitrix24_res}' WHERE id='".intval($id)."';";
        file_put_contents("/hosting/users/finist/widgets_logs/lastsql.log", $q);
        $db->query('SET NAMES utf8;');
        $db->query($q);
        $db->close();
    }

    private static function compile_db_insert_string($data)
      {
        $field_names  = "";
        $field_values = "";
    
        foreach ($data as $k => $v)
          {
            $v = preg_replace( "/\\\\/", "\\\\\\\\", $v );
            $v = preg_replace( "/'/", "\\\'", $v );
            $field_names  .= "`$k`,";
            $field_values .= "'$v',";
          }
    
        $field_names  = preg_replace( "/,$/" , "" , $field_names  );
        $field_values = preg_replace( "/,$/" , "" , $field_values );
    
        return array( 'FIELD_NAMES'  => $field_names, 'FIELD_VALUES' => $field_values, );
      }
}

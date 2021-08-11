<?php

namespace App\Helpers;

class OsagoApi {
	private $login = 'ЛАНДА МОТОРС WS';
	private $pass = 'pca2pwm8';
	private $url = 'https://aisws.ingos.ru/sales-test/SalesService.svc?wsdl';
	private $api;
	private $token;
	private $token_expire;
	
	public function __construct() {
		try {
			$this->api = new \SoapClient($this->url, array('trace' => 1));
		} catch (\SoapFault $fault) {
			self::api_log(print_r($fault, true), 'Ingos SOAP error');
			exit('error');
		} catch (\Exception $e) {
			self::api_log(print_r($fault, true), 'Ingos SOAP error2');
			exit('error');
		}
		$this->token = $this->getToken();
	}
	
	public function getToken() {
		$parameters = array ('Password' => $this->pass, 'User' => $this->login);
		$request = $this->api->Login($parameters);
		$this->token_expire = strtotime("+19 minutes");
		
		if(!isset($request->ResponseData)) {
			exit($request->ResponseStatus->ErrorMessage);
		}

		return $request->ResponseData->SessionToken;
	}
	
	private function checkToken() {
		$time = time();
		
		if($time > $this->token_expire) {
			$this->token = $this->getToken();
			$this->$token_expire = strtotime("+19 minutes");
		}
	}
	
	private static function array_to_xml($array, &$xml_user_info) {
		foreach($array as $key => $value) {
			if(is_array($value)) {
				if(stripos($key, 'driveritem') !== false) {
					$subnode = $xml_user_info->addChild("Driver");
					if(isset($value['@attributes'])) {
						foreach($value['@attributes'] as $atrkey=>$atr) {
							$subnode->addAttribute("$atrkey", "$atr");
						}
						unset($value['@attributes']);
					}
					self::array_to_xml($value, $subnode);
				} elseif(stripos($key, 'subjectitem') !== false) {
					$subnode = $xml_user_info->addChild("Subject");
					if(isset($value['@attributes'])) {
						foreach($value['@attributes'] as $atrkey=>$atr) {
							$subnode->addAttribute("$atrkey", "$atr");
						}
						unset($value['@attributes']);
					}
					self::array_to_xml($value, $subnode);
				} elseif(!is_numeric($key)){
					$subnode = $xml_user_info->addChild("$key");
					if(isset($value['@attributes'])) {
						foreach($value['@attributes'] as $atrkey=>$atr) {
							$subnode->addAttribute("$atrkey", "$atr");
						}
						unset($value['@attributes']);
					}
					self::array_to_xml($value, $subnode);
				}else{
					$subnode = $xml_user_info->addChild("item$key");
					if(isset($value['@attributes'])) {
						foreach($value['@attributes'] as $atrkey=>$atr) {
							$subnode->addAttribute("$atrkey", "$atr");
						}
						unset($value['@attributes']);
					}
					self::array_to_xml($value, $subnode);
				}
			} else {
				$value = html_entity_decode($value);
				$xml_user_info->addChild("$key", $value);
			}
		}
	}
	
	public static function api_log($data, $comments, $status = 'undefined') {
		$date = date('Y-m-d');
		$datetime = date('Y-m-d H:i:s');
		$file = storage_path('logs/api/ingos/'.$date.'.log');
		if(!file_exists(storage_path('logs/api'))) {
			mkdir(storage_path('logs/api'), 0777, true);
		}
		if(!file_exists(storage_path('logs/api'))) {
			mkdir(storage_path('logs/api'), 0777, true);
		}
		if(!file_exists(storage_path('logs/api/ingos'))) {
			mkdir(storage_path('logs/api/ingos'), 0777, true);
		}
		
		if(@json_decode($data)) {
			$data = json_decode($data, true);
		}
		
		$log_data = json_encode(array('datetime' => $datetime, 'status' => $status, 'comments' => $comments, 'data' => $data), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
		if(!file_exists($file)) {
			$fp = fopen($file, "w");
		} else {
			$fp = fopen($file, "a");
		}
		fwrite($fp, $log_data.','."\n\r");
		fclose($fp);
	}
	
	public function api_check($comment = 'Страница проверки API') {
		$test_data = array(
			"car" => array(
				"vin" => "ZBEJO6HJ709J",
				"year" => "2013",
				"power" => "172",
				"diacard" => "03031429126335999",
				"old_year" => "0",
				"sts_date" => "2015-04-29",
				"brand_name" => "Nissan",
				"model_name" => "PATHFINDER",
				"sts_number" => "845384",
				"sts_serial" => "5032",
				"diacard_date" => "20.12.2023",
				"transmission" => "manual",
				"auto_register" => "T587OA77RUS",
				"ingos_brand_id" => "12536316",
				"ingos_model_id" => "12609916",
				"service_region" => "Москва",
				"reg_region_code" => "7700000000000",
				"reg_region_okato" => "4500000000000",
				"registration_region" => "Москва",
				"service_region_code" => "7700000000000",
				"service_region_okato" => "4500000000000",
			),
			"owner" => array(
				"sex" => "m",
				"flat" => "155",
				"house" => "155",
				"address" => array(
				  "flat" => "155",
				  "house" => "155",
				  "city_code" => "7700000000000",
				  "city_name" => "Москва",
				  "city_okato" => "45000000000",
				  "street_code" => "77000000000151800",
				  "street_name" => "Коммунарская",
				  "country_code" => "643",
				  "street_okato" => "45293594000",
				),
				"lastname" => "Тестов",
				"birthdate" => "01.01.1970",
				"city_code" => "7700000000000",
				"city_name" => "Москва",
				"firstname" => "Веб",
				"city_okato" => "4500000000000",
				"middlename" => "Сервисович",
				"street_code" => "77000000000151800",
				"street_name" => "Коммунарская",
				"country_code" => "643",
				"street_okato" => "45293594000",
				"passport_date" => "01.01.2010",
				"passport_issue" => "ОВД г. Москва",
				"passport_number" => "118518",
				"passport_serial" => "45 47",
			),
			"drivers" => array(
				0 => array(
				  "sex" => "m",
				  "address" => array(
					"flat" => "155",
					"house" => "155",
					"city_code" => "7700000000000",
					"city_name" => "Москва",
					"city_okato" => "4500000000000",
					"street_code" => "77000000000151800",
					"street_name" => "Коммунарская",
					"country_code" => "643",
					"street_okato" => "45293594000",
				  ),
				  "lastname" => "Тестов",
				  "birthdate" => "01.01.1970",
				  "exp_start" => "07.07.2014",
				  "firstname" => "Тест",
				  "middlename" => "Тестович",
				  "license_date" => "07.07.2014",
				  "passport_date" => "01.01.2010",
				  "license_number" => "392111",
				  "license_serial" => "77TP",
				  "passport_issue" => "ОВД г. Москва",
				  "passport_number" => "481747",
				  "passport_serial" => "45 47",
				),
			),
			"insurer" => array(
				"sex" => "m",
				"flat" => "155",
				"house" => "155",
				"address" => array(
				  "flat" => "155",
				  "house" => "155",
				  "city_code" => "7700000000000",
				  "city_name" => "Москва",
				  "city_okato" => "45000000000",
				  "street_code" => "77000000000151800",
				  "street_name" => "Коммунарская",
				  "country_code" => "643",
				  "street_okato" => "45293594000",
				),
				"lastname" => "Тестов",
				"birthdate" => "01.01.1970",
				"city_code" => "7700000000000",
				"city_name" => "Москва",
				"firstname" => "Веб",
				"city_okato" => "4500000000000",
				"middlename" => "Сервисович",
				"street_code" => "77000000000151800",
				"street_name" => "Коммунарская",
				"country_code" => "643",
				"street_okato" => "45293594000",
				"passport_date" => "01.01.2010",
				"passport_issue" => "ОВД г. Москва",
				"passport_number" => "118518",
				"passport_serial" => "45 47",
			),
			"sms_code" => "1234",
			"agreement" => "Y",
			"date_from" => date('d.m.Y', strtotime('+ 1 day')),
			"user_email" => "testovtest91474@mail.ru",
			"user_phone" => "+7 (976) 523-90-88",
			"driver_quantity" => "1",
			"transmission_ch" => "manual",
			"insurer_is_owner" => "Y",
		);
		
		$ingos_info = $this->CreateAgreement($test_data);
		

		if(isset($ingos_info->ResponseData)) {
			self::api_log($ingos_info, $comment, 'success');
			return 'ok';
		} elseif(isset($ingos_info->ResponseStatus)) {
			self::api_log($ingos_info, $comment, 'fail');
			return $ingos_info->ResponseStatus->ErrorMessage;
		} else {
			self::api_log($ingos_info, $comment, 'fail');			
			return 'error';
		}
	}
	
	public function api_test($comment = 'Страница проверки API ипотеки') {
		$test_data = array(
			/*
			"car" => array(
				"vin" => "ZBEJO6HJ709J",
				"year" => "2013",
				"power" => "172",
				"diacard" => "03031429126335999",
				"old_year" => "0",
				"sts_date" => "2015-04-29",
				"brand_name" => "Nissan",
				"model_name" => "PATHFINDER",
				"sts_number" => "845384",
				"sts_serial" => "5032",
				"diacard_date" => "20.12.2023",
				"transmission" => "manual",
				"auto_register" => "T587OA77RUS",
				"ingos_brand_id" => "12536316",
				"ingos_model_id" => "12609916",
				"service_region" => "Москва",
				"reg_region_code" => "7700000000000",
				"reg_region_okato" => "4500000000000",
				"registration_region" => "Москва",
				"service_region_code" => "7700000000000",
				"service_region_okato" => "4500000000000",
			),*/
			"owner" => array(
				"sex" => "m",
				"flat" => "155",
				"house" => "155",
				"address" => array(
				  "flat" => "155",
				  "house" => "155",
				  "city_code" => "7700000000000",
				  "city_name" => "Москва",
				  "city_okato" => "45000000000",
				  "street_code" => "77000000000151800",
				  "street_name" => "Коммунарская",
				  "country_code" => "643",
				  "street_okato" => "45293594000",
				),
				"lastname" => "Тестов",
				"birthdate" => "01.01.1970",
				"city_code" => "7700000000000",
				"city_name" => "Москва",
				"firstname" => "Веб",
				"city_okato" => "4500000000000",
				"middlename" => "Сервисович",
				"street_code" => "77000000000151800",
				"street_name" => "Коммунарская",
				"country_code" => "643",
				"street_okato" => "45293594000",
				"passport_date" => "01.01.2010",
				"passport_issue" => "ОВД г. Москва",
				"passport_number" => "118518",
				"passport_serial" => "45 47",
			),
			"insurer" => array(
				"sex" => "m",
				"flat" => "155",
				"house" => "155",
				"address" => array(
				  "flat" => "155",
				  "house" => "155",
				  "city_code" => "7700000000000",
				  "city_name" => "Москва",
				  "city_okato" => "45000000000",
				  "street_code" => "77000000000151800",
				  "street_name" => "Коммунарская",
				  "country_code" => "643",
				  "street_okato" => "45293594000",
				),
				"lastname" => "Тестов",
				"birthdate" => "01.01.1970",
				"city_code" => "7700000000000",
				"city_name" => "Москва",
				"firstname" => "Веб",
				"city_okato" => "4500000000000",
				"middlename" => "Сервисович",
				"street_code" => "77000000000151800",
				"street_name" => "Коммунарская",
				"country_code" => "643",
				"street_okato" => "45293594000",
				"passport_date" => "01.01.2010",
				"passport_issue" => "ОВД г. Москва",
				"passport_number" => "118518",
				"passport_serial" => "45 47",
			),
			/*
			"sms_code" => "1234",
			"agreement" => "Y",
			"date_from" => date('d.m.Y', strtotime('+ 1 day')),
			"user_email" => "testovtest91474@mail.ru",
			"user_phone" => "+7 (976) 523-90-88",
			"driver_quantity" => "1",
			"transmission_ch" => "manual",
			"insurer_is_owner" => "Y",
			*/
		);
		
		$ingos_info = $this->getFlatTariff($test_data);
		

		if(isset($ingos_info->ResponseData)) {
			self::api_log($ingos_info, $comment, 'success');
			echo "ok\n\r";
			return print_r($ingos_info, true);
		} elseif(isset($ingos_info->ResponseStatus)) {
			self::api_log($ingos_info, $comment, 'fail');
			echo $ingos_info->ResponseStatus->ErrorMessage."\n\r";
			return print_r($ingos_info, true);
		} else {
			self::api_log($ingos_info, $comment, 'fail');			
			echo "error\n\r";
			return print_r($ingos_info, true);
		}
	}
	
	private function prepareArrayForApi($arr, $start_tag) {
		$xml_user_info = new \SimpleXMLElement("<".$start_tag."></".$start_tag.">");

		//function call to convert array to xml
		self::array_to_xml($arr,$xml_user_info);

		//saving generated xml file
		$xmlDocument = new \DOMDocument('1.0');
		$xmlDocument->preserveWhiteSpace = false;
		$xmlDocument->formatOutput = true;
		$xmlDocument->loadXML($xml_user_info->asXML());

		$arr = $xmlDocument->saveXML();
		$arr = html_entity_decode($arr); 
		$arr = str_replace('<?xml version="1.0"?>'."\n", '', $arr);
		
		return new \SoapVar($arr, XSD_ANYXML);
	}
	
	public function getDict() {
		$this->checkToken();
		
		$parameters = array ('SessionToken' => $this->token, 'Product' => 805536400);
		$request = $this->api->GetDicti($parameters);
		
		$xmlDocument = new \DOMDocument('1.0');
		$xmlDocument->preserveWhiteSpace = false;
		$xmlDocument->formatOutput = true;
		$xmlDocument->loadXML($request->ResponseData->any);

		$arr = $xmlDocument->saveXML();
		
		if(isset($request->ResponseData)) {
			file_put_contents(public_path('eosago-assets/api/ingos-dictionary.xml'), $arr);
		}
		
		return $request->ResponseData;
	}
	
	public static function prepareDate($date, $type = 'start', $suffix = '') {
		// Дата начала действия договора Е-ОСАГО должна быть больше текущей даты +3 дня!

		//if(time() > strtotime($date) || strtotime($date) - time() < 259200 ) {
			if($type == 'end') {
				$date = date("Y-m-d", strtotime($date.'+1 year'));
				$date = date("Y-m-d", strtotime($date.'-1 day'));
			} else {
				$date = date("Y-m-d", strtotime($date));
			}
			
			$date = date("Y-m-d", strtotime($date.'+5 days'));
		//} else {
		//	if($type == 'end') {
		//		$date = date("Y-m-d", strtotime($date.'+1 year'));
		//		$date = date("Y-m-d", strtotime($date.'-1 day'));
		//	} else {
		//		$date = date("Y-m-d", strtotime($date));
		//	}
		//}
		
		return $date.$suffix;
	}
	
	public function getTariff($data) {
		$this->checkToken();
		
		//return $data;
		
		$dateBeg = self::prepareDate($data['date_from'], 'start');
		$dateBegSuff = self::prepareDate($data['date_from'], 'start', 'T00:00:00');
		$dateEnd = self::prepareDate($data['date_from'], 'end');
		
		$arr = array(
            'Agreement' => array(
				'General' => array(
					'Product' => 753518300, //eosago
					'DateBeg' => $dateBegSuff,
					'DateEnd' => $dateEnd,
					'CitySales' => 77000000000, //to do
					'Individual' => 'N', // ?
				),
				'Insurer' => array(
					'SbjRef'  => 1,
					'MobilePhone' => preg_replace('/[^0-9.]+/', '', $data['user_phone']),
					'Email' => $data['user_email'],
				),
				'Owner' => array(
					'SbjRef' => 1,
				),
				'SubjectList' => array(
					'Subject' => array (
						'SbjType' => 'Ф', // ?
						'SbjResident' => 'Y', // если не резидент, страховку не сделает
						'FullName' => $data['insurer']['lastname'].' '.$data['insurer']['firstname'].' '.$data['insurer']['middlename'],
						'Gender' => ($data['insurer']['sex'] == 'f' ? 'Ж' : 'М'),
						'BirthDate' => date('Y-m-d', strtotime($data['insurer']['birthdate'])),
						'CountryCode' => 643, //to do
						'IdentityDocument' => array(
							'DocType' => 30363316,
							'Serial' => $data['insurer']['passport_serial'],
							'Number' => $data['insurer']['passport_number'],
							'DocDate' => date('Y-m-d', strtotime($data['insurer']['passport_date'])),
							'DocIssuedBy' => $data['insurer']['passport_issue'],
						),
						'Address' =>  array(  //"ErrorMessage": "Для собственника без регистрации на территории РФ тип использования "Обычная эксплуатация" запрещен."
							'CountryCode' => 643, //to do
							'CityCode' => 77000000000, //to do
							'StreetCode' => 770000000000391, //to do
							'StreetName' => '8 Марта ул', //to do
							'House' => 155, //to do
							'Flat' => 155, //to do
						),
						'@attributes' => array(
							'SbjKey' => 1
						)
					),
				),
				'Vehicle' => array(
					'Model' => $data['car']['ingos_model_id'],
					'RegNum' => $data['car']['auto_register'],
					'Constructed' => $data['car']['year'].'-01-01',
					'VIN' => $data['car']['vin'],
					'Category' => 'B',
					'EnginePowerHP' => $data['car']['power'],
					'TransmissionType' => ($data['car']['transmission'] == 'manual' ? 'Р' : 'А'),
					'Document' => array(
						'DocType' => 34709116,
						'Serial' => $data['car']['sts_serial'],
						'Number' => $data['car']['sts_number'],
						'DocDate' => date('Y-m-d', strtotime($data['car']['sts_date'])),
					),
					'DocInspection' => array(
						'DocType' => 3507627803,
						'Number' => $data['car']['diacard'],
						'DateEnd' => date('Y-m-d', strtotime($data['car']['diacard_date'])),
					),
				),
				'Condition' => array(
					'Liability' => array(
						'RiskCtg' => 28966116,
						'UsageTarget' => array(
							'Personal' => 'Y',
						),  
						'UseWithTrailer' => 'N',
						'UsageType' => 1381850903,
						'PeriodList' => array(
							'Period' => array(
								'DateBeg' => $dateBeg,
								'DateEnd' => $dateEnd,
							),
						),
					),
				),
				'DriverList' => array(  // Несколько водителей?
					'Driver' => array(
						'SbjRef' =>1,
						'DriverLicense' => array(
							'DocType' => 765912000,
							'Serial' => $data['drivers'][0]['license_serial'],
							'Number' => $data['drivers'][0]['license_number'],
							'DocDate' => date('Y-m-d', strtotime($data['drivers'][0]['license_date'])),
						),
						'DrvDateBeg' => date('Y-m-d', strtotime($data['drivers'][0]['exp_start'])),
					),
				),
			),
        );
		
		//return $arr;
		
		$arr = $this->prepareArrayForApi($arr, 'TariffParameters');

		$parameters = array (
			'SessionToken' => $this->token,
			'TariffParameters' => new \SoapVar($arr, XSD_ANYXML),
			'NeedList' => 1,
		);
		
		//return $parameters;
		
		//return $arr;
		$request = $this->api->GetTariff($parameters);
//		$request = $this->api->__soapCall('GetTariff', [$arr]);
		//echo $this->api->__getLastRequestHeaders();
		//echo $this->api->__getLastRequest();
		//echo $this->api->__getLastResponseHeaders();
		//echo $this->api->__getLastResponse();
		
		return $request;//->ResponseData;
	}
	
	public function CreateAgreement($data) {
		$this->checkToken();

		$dateBeg = self::prepareDate($data['date_from'], 'start');
		$dateBegSuff = self::prepareDate($data['date_from'], 'start', 'T00:00:00');
		$dateEnd = self::prepareDate($data['date_from'], 'end');
		
		//return dd();
		//$dateBegSuff='2018-12-23T00:00:00';
		$arr = array(
			'General' => array(
				'Product' => 753518300, //eosago
				'DateBeg' => $dateBegSuff,
				'DateEnd' => $dateEnd,
				'CitySales' => 77000000000, //to do
				'Individual' => 'N', // ?
			),
			'Insurer' => array(
				'SbjRef'  => 1,
				'MobilePhone' => preg_replace('/[^0-9.]+/', '', $data['user_phone']),
				'Email' => $data['user_email'],
			),
			'Owner' => array(
				'SbjRef' => 1,
			),
			'SubjectList' => array(
				'subjectitem0' => array (
					'SbjType' => 'Ф', // ?
					'SbjResident' => 'Y', // если не резидент, страховку не сделает
					'FullName' => $data['insurer']['lastname'].' '.$data['insurer']['firstname'].' '.$data['insurer']['middlename'],
					'Gender' => ($data['insurer']['sex'] == 'f' ? 'Ж' : 'М'),
					'BirthDate' => date('Y-m-d', strtotime($data['insurer']['birthdate'])),
					'CountryCode' => (int) $data['insurer']['address']['country_code'], // 643
					'IdentityDocument' => array(
						'DocType' => 30363316,
						'Serial' => $data['insurer']['passport_serial'],
						'Number' => $data['insurer']['passport_number'],
						'DocDate' => date('Y-m-d', strtotime($data['insurer']['passport_date'])),
						'DocIssuedBy' => $data['insurer']['passport_issue'],
					),
					'Address' =>  array(  //"ErrorMessage": "Для собственника без регистрации на территории РФ тип использования "Обычная эксплуатация" запрещен."
						'CountryCode' => (int) $data['insurer']['address']['country_code'], // 643
						'CityCode' => (int) substr($data['insurer']['address']['city_code'], 0, -2), // 77000000000
						'StreetCode' => (int) substr($data['insurer']['address']['street_code'], 0, -2), // 770000000000391
						'StreetName' => $data['insurer']['address']['street_name'], // '8 Марта ул'
						'House' => (int) $data['insurer']['address']['house'], // 155
						'Flat' => (int) $data['insurer']['address']['flat'], // 155
					),
					'@attributes' => array(
						'SbjKey' => 1
					)
				),
			),
			'Vehicle' => array(
				'Model' => $data['car']['ingos_model_id'],//'833118001',
				'RegNum' => $data['car']['auto_register'],
				'Constructed' => $data['car']['year'].'-01-01',
				'VIN' => $data['car']['vin'],
				'Category' => 'B',
				'EnginePowerHP' => (int) $data['car']['power'],//105,
				'EngineType' => 'P',
				'TransmissionType' => ($data['car']['transmission'] == 'manual' ? 'Р' : 'А'),
				'Document' => array(
					'DocType' => 34709116,
					'Serial' => (int) $data['car']['sts_serial'],//7702,
					'Number' => (int) $data['car']['sts_number'],//147144,
					'DocDate' => date('Y-m-d', strtotime($data['car']['sts_date'])),//'2012-10-02',
				),
				'DocInspection' => array(//ТО
					'DocType' => 3507627803,
					'Number' => (int) str_replace('_', '', $data['car']['diacard']),//'03031429126335999',
					'DateEnd' => date('Y-m-d', strtotime($data['car']['diacard_date'])),//'2018-12-03',
				),
			),
			'Condition' => array(
				'Liability' => array(
					'RiskCtg' => 28966316, //неограниченный список водителей
					'UsageTarget' => array(
						'Personal' => 'Y',
					),  
					'UseWithTrailer' => 'N',
					'UsageType' => 1381850903,
					'PeriodList' => array(
						'Period' => array(
							'DateBeg' => $dateBeg,
							'DateEnd' => $dateEnd,
						),
					),
				),
			),
        );
		$drivers = array();
		if($data['driver_quantity'] != 0 && is_array($data['drivers']) && count($data['drivers']) > 0) {
			$key = 2;
			foreach($data['drivers'] as $driver) {
				$subjref = $key;
				if($driver['lastname'].' '.$driver['firstname'].' '.$driver['middlename'] == $data['insurer']['lastname'].' '.$data['insurer']['firstname'].' '.$data['insurer']['middlename']) {
					$subjref = 1;
				} else {
					$arr['SubjectList']['subjectitem'.$key] = array (
						'SbjType' => 'Ф', // ?
						'SbjResident' => 'Y', // если не резидент, страховку не сделает
						'FullName' => $driver['lastname'].' '.$driver['firstname'].' '.$driver['middlename'],
						'Gender' => ($driver == 'f' ? 'Ж' : 'М'), // to do
						'BirthDate' => date('Y-m-d', strtotime($driver['birthdate'])),
						'CountryCode' => (int) $driver['address']['country_code'], // 643
						//'IdentityDocument' => array(
						//	'DocType' => 30363316,
						//	'Serial' => $driver['passport_serial'],
						//	'Number' => $driver['passport_number'],
						//	'DocDate' => date('Y-m-d', strtotime($driver['passport_date'])),
						//	'DocIssuedBy' => $driver['passport_issue'],
						//),
						//'Address' =>  array(  //"ErrorMessage": "Для собственника без регистрации на территории РФ тип использования "Обычная эксплуатация" запрещен."
							//'CountryCode' => (int) $driver['address']['country_code'], // 643
							//'CityCode' => (int) substr($driver['address']['city_code'], 0, -2), // 77000000000
							//'StreetCode' => (int) substr($driver['address']['street_code'], 0, -2), // 770000000000391
							//'StreetName' => $driver['address']['street_name'], // '8 Марта ул'
							//'House' => (int) $driver['address']['house'], // 155
							//'Flat' => (int) $driver['address']['flat'], // 155
						//),
						'@attributes' => array(
							'SbjKey' => $key,
						)
					);
				}
				
				$new_driver = array(
					'SbjRef' => $subjref,
					'DriverLicense' => array(
						'DocType' => 765912000,
						'Serial' => $driver['license_serial'],
						'Number' => $driver['license_number'],
						'DocDate' => date('Y-m-d', strtotime($driver['license_date'])),
					),
					'DrvDateBeg' => date('Y-m-d', strtotime($driver['exp_start'])),
				);
				
				$drivers['driveritem'.$key] = $new_driver;
				
				if($driver['lastname'].' '.$driver['firstname'].' '.$driver['middlename'] != $data['insurer']['lastname'].' '.$data['insurer']['firstname'].' '.$data['insurer']['middlename']) {
					$key++;
				}
			}
			
			$arr['DriverList'] = $drivers;
			$arr['Condition']['Liability']['RiskCtg'] = 28966116;
		}
		
		//return dd($arr);
		$agreement = $this->prepareArrayForApi($arr, 'Agreement');
		//return dd($agreement);
		
		$parameters = array ('SessionToken' => $this->token, 'Agreement' => $agreement, 'NeedList' => 1,);
		//return $parameters;
		
		$request = $this->api->CreateAgreement($parameters);
				
		/*
		{#325 ▼
  +"ResponseData": {#323 ▼
    +"AgrID": "CL0010960038"
    +"PremiumSum": 9764.6
    +"CheckResult": "Разрешено к страхованию"
    +"WarningList": {#327}
  }
  +"ResponseStatus": {#328 ▼
    +"ErrorCode": 0
    +"ErrorMessage": "OK"
  }
}
		*/
		
		return $request;//->ResponseData;
	}
	
	public function getFlatTariff($data) {
		//$this->checkToken();

		$date_from = date('Y-m-d');
		if(isset($data['date_from'])) {
			$date_from = date('Y-m-d', strtotime($data['date_from']));
		}
		$dateBeg = self::prepareDate($date_from, 'start');
		$dateBegSuff = self::prepareDate($date_from, 'start', 'T00:00:00');
		$dateEnd = self::prepareDate($date_from, 'end');
		
		$user_name = 'Иванов Иван Иванович';
		if(isset($data['user_lastname'])) {
			$user_name = $data['user_lastname'];
			if(isset($data['user_firstname'])) {
				$user_name .= ' '.$data['user_firstname'];
			}
			if(isset($data['user_middlename'])) {
				$user_name .= ' '.$data['user_middlename'];
			}
		}
		
		$birthdate = date('Y-m-d', strtotime('1950-12-12'));
		if(isset($data['user_age'])) {
			$b_year = date('Y') - $data['user_age'];
			$birthdate = date('Y-m-d', strtotime($b_year.'-12-12'));
		}
		if(isset($data['user_birthdate'])) {
			$birthdate = date('Y-m-d', strtotime($data['user_birthdate']));
		}
		
		$sex = 'М';
		if(isset($data['user_gender']) && $data['user_gender'] == 'female') {
			$sex = 'Ж';
		}
		
		$arr = array(
			'Agreement' => array(
				'General' => array(
					'Product' => 37504416, //ипотека
					'DateBeg' => $dateBegSuff,
					'DateEnd' => $dateEnd,
					'AddrISN' => 162692003,
					'CitySales' => 77000002000, //to do
					'Individual' => 'N', // ?
					'ProductItemList' => array(
						'ProductItem' => 3406812303,
					),
					'CreditData' => array(
						'CreditSum' => (isset($data['credit_sum']) ? $data['credit_sum'] : '1000000.00'),
						'CreditNum' => 12345,
						'CreditDate' => $dateBeg,
					),
				),
				'SubjectList' => array(
					'subjectitem0' => array (
						'SbjType' => 'Ф', // ?
						'SbjResident' => 'Y', // если не резидент, страховку не сделает
						'FullName' => $user_name,
						'Gender' => $sex,
						'BirthDate' => $birthdate,
						'CountryCode' => 643, // 643
						'IdentityDocument' => array(
							'DocType' => 30363316,
							'Serial' => '50 00',
							'Number' => '989898',
							'DocDate' => '1987-03-23',
							'DocIssuedBy' => 'оооооооо',
							'DocIssuedCode' => '111-111',
						),
						'Address' =>  array(  //"ErrorMessage": "Для собственника без регистрации на территории РФ тип использования "Обычная эксплуатация" запрещен."
							'CountryCode' => 643, // 643
							'City' => 3783, // 77000000000
							'Street' => 40577715, // 770000000000391
							'StreetName' => '', // '8 Марта ул'
							'House' => 15, // 155
							'Flat' => 50, // 155
						),
						'@attributes' => array(
							'SbjKey' => 1
						)
					),
					'subjectitem1' => array (
						'SbjType' => 'Ю', // ?
						'SbjISN' => 591716, // если не резидент, страховку не сделает
						'@attributes' => array(
							'SbjKey' => 2
						)
					),
				),
				'Insurer' => array(
					'SbjRef'  => 1,
					'MobilePhone' => '79138845457',
				),
				//'Owner' => array(
				//	'SbjRef' => 1,
				//),
				'BeneficiaryList' => array(
					'Beneficiary' => array(
						'SbjRef' => 2
					),
				),
				'ObjectList' => array(
					'Object' => array(
						'ClassISN' => 8187,
						'AdrRef' => 1,
						'InsureTitle' => 'N',
					),
				),
				'AddressList' => array(
					'Address' => array(
						'CityCode' => 77000000000,
						'House' => 1,
						'Flat' => 1,
						'City' => 3783,
						'Street' => 90261203,
						'StreetName' => 'ПУШКИНА, ул',
						'@attributes' => array(
							'AdrKey' => 1
						)
					),
				),
			),
        );
		
		//return print_r($arr, true);
		
		$agreement = $this->prepareArrayForApi($arr, 'TariffParameters');
		//return dd($agreement);
		
		$parameters = array ('SessionToken' => $this->token, 'TariffParameters' => new \SoapVar($agreement, XSD_ANYXML), 'NeedList' => 1);
		//return $parameters;
		
		$request = $this->api->GetTariff($parameters);
				
		/*
		{#325 ▼
  +"ResponseData": {#323 ▼
    +"AgrID": "CL0010960038"
    +"PremiumSum": 9764.6
    +"CheckResult": "Разрешено к страхованию"
    +"WarningList": {#327}
  }
  +"ResponseStatus": {#328 ▼
    +"ErrorCode": 0
    +"ErrorMessage": "OK"
  }
}
		*/
		self::api_log($request, 'Tariff try');
		
		return $request;//->ResponseData;
	}
	
	public function GetAgreement($agr_id) {
		$this->checkToken();
		
		$parameters = array(
			'SessionToken' => $this->token,
			'PolicyNumber' => $agr_id,
		);
		
		$request = $this->api->GetAgreement($parameters);
		
		/*
		+"ResponseData": {#1804 ▼
    +"any": "<Agreement State="&#x417;&#x410;&#x42F;&#x412;&#x41B;&#x415;&#x41D;&#x418;&#x415;"><General><ISN>76686837601</ISN><Product>753518300</Product><ID>CL0010960024</ ▶"
  }
		*/
		
		return $request;
	}
	
	public function MakeEOsago($agr_isn) {
		$this->checkToken();
		
		$parameters = array(
			'SessionToken' => $this->token,
			'AgrISN' => $agr_isn,
		);
		
		$request = $this->api->MakeEOsago($parameters);
		
		return $request;
	}
	
	public function CreateBill($agr_id) {
		$this->checkToken();
		
		$parameters = array(
			'SessionToken' => $this->token,
			'PaymentType' => 114916, //банковская карта
			'Payer' => 'Customer',
			'IncludeAll' => 1,
			'AgreementList' => array(
				'AgrID' => $agr_id,
			),
		);
		
		$request = $this->api->CreateBill($parameters);
		
		/*
		+"ResponseData": {#1804 ▼
    +"BillISN": 2596516901.0
    +"BillNum": "35-11750-67503/18"
    +"BillSum": 9764.6
  }
  }
		*/
		
		return $request;
	}
	
	public function CreateOnlineBill($bill_id, $data) {
		$this->checkToken();
		
		$parameters = array(
			'SessionToken' => $this->token,
			'Bill' => array(
				'BillISN' => $bill_id,
				'Client' => array(
					'Email' => $data['user_email'],
					'DigitalPolicyEmail' => $data['user_email'],
					'PaymentNotification' => 'Y',
					'SendByEmail' => 'Y',
					'SendBySms' => 'N',
				),
			),
		);
		
		$request = $this->api->CreateOnlineBill($parameters);
		
		return $request;
	}
	
	public function getPaymentUrl($data, \App\Models\OsagoResponse $osago_response) {
		//return $data;
		ini_set('default_socket_timeout', 600);
		$agreement_info = json_decode($osago_response->agreement_info, true);
		
		$resp_history = json_decode($osago_response->api_response, true);
		$datetime = date('Y-m-d H:i:s');
		
		//$agr = $this->CreateAgreement($data);
		
		//if(!isset($agr->ResponseData)) {
		//	return 'CreateAgreement '.$agr->ResponseStatus->ErrorMessage;
		//}
		
		$response = array();
		$response['agreement_id'] = $osago_response->agreement_id;
		
		$agreement = $this->GetAgreement($osago_response->agreement_id);
		
		if(!isset($agreement->ResponseData)) {
			return 'GetAgreement '.$agreement->ResponseStatus->ErrorMessage;
		}
		
		$xml = new \SimpleXMLElement($agreement->ResponseData->any);
		$agr_isn = (string) $xml->General->ISN;
		
		$response['agreement_isn'] = $agr_isn;
		$agreement_info['agreement_isn'] = $agr_isn;
		$osago_response->agreement_info = json_encode($agreement_info);
		$osago_response->save();
		
		$eosago = $this->MakeEOsago($agr_isn);
		if(!isset($eosago->ResponseData)) {
			$resp_history[$datetime]['MakeEOsago'] = $eosago->ResponseStatus->ErrorMessage;
			$osago_response->api_response = json_encode($resp_history);
			$osago_response->save();
			//return 'MakeEOsago '.$eosago->ResponseStatus->ErrorMessage;
		}
		
		//return dd($data);
		$bill = $this->CreateBill($osago_response->agreement_id);
		if(!isset($bill->ResponseData)) {
			$resp_history[$datetime]['CreateBill'] = $bill->ResponseStatus->ErrorMessage;
			$osago_response->api_response = json_encode($resp_history);
			$osago_response->save();
			
			if(!isset($agreement_info['bill_isn'])) {
				return 'CreateBill '.$bill->ResponseStatus->ErrorMessage;
			}
			
			$response['bill_isn'] = $agreement_info['bill_isn'];
			$response['bill_num'] = $agreement_info['bill_num'];
			$response['bill_sum'] = $agreement_info['bill_sum'];
		} else {
			$response['bill_isn'] = (string) $bill->ResponseData->BillISN;
			$response['bill_num'] = (string) $bill->ResponseData->BillNum;
			$response['bill_sum'] = (string) $bill->ResponseData->BillSum;
			$agreement_info['bill_isn'] = (string) $bill->ResponseData->BillISN;
			$agreement_info['bill_num'] = (string) $bill->ResponseData->BillNum;
			$agreement_info['bill_sum'] = (string) $bill->ResponseData->BillSum;
			$osago_response->agreement_info = json_encode($agreement_info);
			$osago_response->save();
		}
		
		
		$online_bill = $this->CreateOnlineBill($agreement_info['bill_isn'], $data);
		if(!isset($online_bill->ResponseData)) {
			$resp_history[$datetime]['CreateOnlineBill'] = $online_bill->ResponseStatus->ErrorMessage;
			$osago_response->api_response = json_encode($resp_history);
			$osago_response->save();
			
			if(!isset($agreement_info['pay_url'])) {
				return 'CreateOnlineBill '.$online_bill->ResponseStatus->ErrorMessage;
			} else {
				$response['pay_url'] = $agreement_info['pay_url'];
			}
		} else {
			$response['pay_url'] = (string) $online_bill->ResponseData->PayURL;
			$agreement_info['pay_url'] = (string) $online_bill->ResponseData->PayURL;
			$osago_response->agreement_info = json_encode($agreement_info);
			$osago_response->save();
		}
		
		
		return $response;
	}
	
	public function GetAgreements() {
		$this->checkToken();
		ini_set('default_socket_timeout', 10000);
		
		$parameters = array(
			'SessionToken' => $this->token,
			'filter' => array(
				'ProductList' => array(
					'Product' => 753518300,
				),
				'SignTo' => date('Y-m-d'),
				'SignFrom' => date('Y-m-d', strtotime('-1 month')),
			),
		);
		
		$request = $this->api->GetAgreementJournal($parameters);
		
		return $request;
	}
}
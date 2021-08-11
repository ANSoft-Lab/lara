<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;

class Calc extends Model
{
    use HasFactory;

    protected $table = 'calc';
	
	protected $fillable = [
        'user_name', 'user_phone', 'user_email', 'user_city', 'user_bank', 'type', 'credit_sum', 'premium_sum', 'details', 'user_request', 'call_request', 'extra_info',
    ];
	
	public function makeCalculation() {
		$details = json_decode($this->details, true);
		$companies = array();
		
		if(isset($details['user_age'])) {
			$age = $details['user_age'];
			
			if($age > 56) $age = 56;
			elseif($age < 32) $age = 32;
		} else {
			return 'Укажите возраст';
		}
		
		if(isset($this->credit_sum)) {
			$sum = $this->credit_sum;
		} else {
			return 'Укажите сумму кредита';
		}
		
		$companies['max']['name'] = 'Макс';
		$companies['vsk']['name'] = 'ВСК';
		$companies['vtb']['name'] = 'ВТБ';
		$companies['ingos']['name'] = 'Ингосстрах';
		$companies['ingos']['sum'] = 0.0015*$sum;
		
		if($age < 46) {
			$companies['max']['sum'] = 0.0032*$sum;
			if($sum < 3000000) {
				$companies['vsk']['sum'] = 0.0032*$sum;
			} else {
				$companies['vsk']['sum'] = 0.0041*$sum;
			}
			$companies['vtb']['sum'] = 0.0037*$sum;
		} elseif($age < 51) {
			$companies['max']['sum'] = 0.0065*$sum;
			$companies['vsk']['sum'] = 0.0069*$sum;
			$companies['vtb']['sum'] = 0.0066*$sum;
		} elseif($age < 56) {
			$companies['max']['sum'] = 0.0067*$sum;
			$companies['vsk']['sum'] = 0.0098*$sum;
			$companies['vtb']['sum'] = 0.0093*$sum;
		} else {
			$companies['max']['sum'] = 0.007*$sum;
			$companies['vsk']['sum'] = 0.0144*$sum;
			$companies['vtb']['sum'] = 0.0146*$sum;
		}
		
		return $companies;
	}
	
		
	public function sendNotification($type) {
		if($type == 'sendRequest') {
			$msg = "**Заявка с сайта** \r\n\r\n";
			$title = 'Заявка с сайта';
		} elseif($type == 'callbackRequest') {
			$msg = "**Заказ обратного звонка** \r\n\r\n";
			$title = 'Заказ обратного звонка';
		} else {
			$msg = "**Сообщение с сайта** \r\n\r\n";
			$title = 'Сообщение с сайта';
		}
		
		if($this->user_name != null) {
			$msg .= "*Имя:* ".$this->user_name."\r\n";
		}	
		if($this->user_phone != null) {
			$msg .= "*Телефон:* ".$this->user_phone."\r\n";
		}
		if($this->user_email != null) {
			$msg .= "*E-mail:* ".$this->user_email."\r\n";
		}
		if($this->user_city != null) {
			$msg .= "*Город:* ".$this->user_city."\r\n";
		}
		if($this->user_bank != null) {
			$msg .= "*Предпочитаемый банк:* ".$this->user_bank."\r\n";
		}
		if($this->details != null) {
			$details = json_decode($this->details);
			if(isset($details->user_age)) {
				$msg .= "*Возраст:* ".$details->user_age."\r\n";
			}
			if(isset($details->user_gender)) {
				$msg .= "*Пол:* ".($details->user_gender == 'female' ? 'женский' : 'мужской')."\r\n";
			}
		}
		if($this->premium_sum != null) {
			$psum = json_decode($this->premium_sum);
			$msg .= "*Тарифы:* \n";
			
			$msg .= "\r\n";
		}
		
		Mail::raw($msg, function ($message) use ($title) {
			$message->to('n.dyagileva@finist.ru');
			$message->subject($title);
			$message->from('noreply@ipoteka-strahovka.ru', 'Страхование Ипотеки');
		});	
	}
}

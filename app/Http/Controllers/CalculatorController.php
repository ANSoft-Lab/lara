<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\OsagoApi;
use App\Models\Calc;
use Validator;

class CalculatorController extends Controller
{
    public function main(Request $request) {
		$input = $request->all();
		
		if(count($input) > 0) {
			$utm_arr = array();
			
			foreach($input as $key => $inp) {
				if(strpos($key, 'utm_') !== false) {
					$utm_arr[$key] = $inp;
				}
			}
			
			$utm_json = json_encode($utm_arr);
			session(['utm_json' => $utm_json]);
		}
		
		return view('Insurance-mortgage.main');
	}
	
	public function mortgageCalculate(Request $request)
    {
        $input = $request->all();
		
		//Ингосстрах API
		//$ingos_api = new OsagoApi;
		//$ingos = $ingos_api->getFlatTariff($input);
		
		//if(isset($ingos->ResponseData) && isset($ingos->ResponseData->Tariff) && isset($ingos->ResponseData->Tariff->PremiumAmount)) {
		//	\Log::info('Sum: '.$input['credit_sum']);
		//	\Log::info('Gender: '.$input['user_gender']);
		//	\Log::info('Age: '.$input['user_age']);
		//	\Log::info('Tariff: '.$ingos->ResponseData->Tariff->PremiumAmount);
		//} else {
		//	\Log::error(print_r($ingos, true));
		//}
		
		$calc = new Calc;
		
		$details = array(
			'user_age' => $input['user_age'],
			'user_gender' => $input['user_gender'],
		);
		
		$calc->fill($input);
		$calc->details = json_encode($details);
		
		if(session()->has('utm_json')) {
			$calc->utm_info = session('utm_json');
		}
		
		$companies = $calc->makeCalculation();
		
		if(is_array($companies)) {
			return view('blocks.mortgage_result', ['result' => $companies]);
		} else {
			return $companies;
		}
    }
	
	public function sendRequest(Request $request)
    {
		$validator = Validator::make($request->all(), [
            'user_name' => 'required',
            'user_phone' => 'required',
			'user_email' => 'required',
			'user_bank' => 'required',
        ]);
		
        if ($validator->fails()) {
            return 'error';//redirect('post/create')
        //                ->withErrors($validator)
        //                ->withInput();
        }
		

        $input = $request->all();
		
		if(!isset($input['calc_id']) || $input['calc_id'] == 0) {
			$calc = new Calc;
		} else {
			$calc = Calc::find($input['calc_id']);
			
			if(!$calc) {
				$calc = new Calc;
			}
		}
		$calc->fill($input);
		$calc->type = 'mortgage';
		$calc->user_request = 1;
		$details = array(
			'user_age' => $input['user_age'],
			'user_gender' => $input['user_gender'],
		);
		
		$calc->details = json_encode($details);
		
		if(session()->has('utm_json')) {
			$calc->utm_info = session('utm_json');
		}
		
		$calc->save();
		
		$calc->sendNotification('sendRequest');
		$params = [
			'firstname' => $calc->user_name,
			'phone' => $calc->user_phone,
			'email' => $calc->user_email,
			'city' => $calc->user_city,
			'bank' => $calc->user_bank,
			'credit_sum' => $calc->credit_sum,
			'age' => $details['user_age'],
			'gender' => $details['user_gender'],
			'utm' => print_r($calc->utm_info, true),
		];
		
		return $calc->id;
    }
	
	public function callbackRequest(Request $request)
    {
		$validator = Validator::make($request->all(), [
            'user_name' => 'required',
            'user_phone' => 'required',
        ]);
		
        if ($validator->fails()) {
            return 'error';
        }
		
        $input = $request->all();
		
		if(!isset($input['calc_id']) || $input['calc_id'] == 0) {
			$calc = new Calc;
		} else {
			$calc = Calc::find($input['calc_id']);
			
			if(!$calc) {
				$calc = new Calc;
			}
		}
		$calc->fill($input);
		$calc->type = 'mortgage';
		$calc->call_request = 1;
		if(session()->has('utm_json')) {
			$calc->utm_info = session('utm_json');
		}
		$calc->save();
		
		$calc->sendNotification('callbackRequest');
		
		$params = [
			'firstname' => $calc->user_name,
			'phone' => $calc->user_phone,
			'email' => $calc->user_email,
			'city' => $calc->user_city,
			'bank' => $calc->user_bank,
			'credit_sum' => $calc->credit_sum,
			//'age' => $result_request->price,
			//'gender' => $result_request->region,
			'utm' => print_r($calc->utm_info, true),
		];
		
		return $calc->id;
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HypothecInsuranceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'age' => 'numeric|required',
            'bank' => 'string|required',
            'city' => 'string|required',
            'debtAmount' => 'numeric|required',
            'phone' => 'string|required',
            'sex' => 'string|required'
        ];
    }
}

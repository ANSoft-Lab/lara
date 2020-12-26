<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FeedbackStore extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2',
            'phone' => [
                Rule::requiredIf(function () { // Если в поле required указано поле phone
                    return in_array('phone', request('required'));
                }),
                'min:2',
            ],
            'message' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Введите имя',
            'name.min' => 'Имя должно содержать 2 или более символов',
            'phone.required' => 'Введите телефон',
            'phone.min' => 'Телефон должен содержать 2 или более символов',
            'message' => 'Дополнительно'
        ];
    }
}

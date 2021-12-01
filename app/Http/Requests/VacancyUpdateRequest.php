<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VacancyUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:255',
            'show_order' => 'required|integer',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Введите название',
            'name.min' => 'Название должно содержать не менее 3 символов',
            'name.max' => 'Название должно содержать не более 255 символов',
            'show_order.required' => 'Укажите порядок отображения',
            'show_order.integer' => 'Порядок отображения должен быть целым числом',
        ];
    }
}

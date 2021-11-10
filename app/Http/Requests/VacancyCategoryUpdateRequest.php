<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VacancyCategoryUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        logger('print_r(request()->all(), true)');
        logger(print_r(request()->all(), true));
        return [
            'name' => 'required|min:3|max:255',
            'slug' => 'required|min:3|max:255|unique:vacancy_categories,slug,' . (request()->id ?? null),
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
            'slug.required' => 'Введите ЧПУ',
            'slug.min' => 'ЧПУ должно содержать не менее 3 символов',
            'slug.max' => 'ЧПУ должно содержать не более 255 символов',
            'slug.unique' => 'Такой ЧПУ уже существует',
        ];
    }
}

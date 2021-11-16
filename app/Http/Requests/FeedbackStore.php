<?php

namespace App\Http\Requests;

use App\Models\Vacancy;
use App\Rules\FileExtensionRule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
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
        $file_types = Vacancy::$allowed_file_types;
        $file_extension_error_text = "Поддерживаются только форматы файлов ". implode(', ', $file_types);
        
        return [
            'type' => 'sometimes|in:cooperation,vacancy',
            'entity_id' => 'sometimes|required_if:type,vacancy|exists:vacancies,id',
            'agree' => 'required',
            'name' => 'required|min:2',
            'phone' => [
                Rule::requiredIf(function () { // Если в поле required указано поле phone
                    return request('required') && in_array('phone', request('required'));
                }),
                'min:2',
            ],
            'file_url' => 'sometimes|nullable|min:2|url',
            'uploaded_file' => [
                'sometimes',
                'nullable',
                'file',
                new FileExtensionRule($file_types, $file_extension_error_text),
            ],
        ];
    }

    public function messages()
    {
        return [
            'type.in' => 'Произошла ошибка. Попробуйте позднее',
            'entity_id.required_if' => 'Произошла ошибка. Попробуйте позднее',
            'entity_id.exists' => 'Произошла ошибка. Попробуйте позднее',
            'agree.required' => 'Вы должны согласиться на обработку персональных данных',
            'name.required' => 'Введите имя',
            'name.min' => 'Имя должно содержать 2 или более символов',
            'phone.required' => 'Введите телефон',
            'phone.min' => 'Телефон должен содержать 2 или более символов',
            'file_url.min' => 'Ссылка на резюме должна содержать 2 или более символов',
            'file_url.url' => 'Ссылка на резюме некорректна',
            'uploaded_file.file' => 'Ошибка при загрузке файла',
        ];
    }

    /**
    * Get the error messages for the defined validation rules.*
    * @return array
    */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'errors' => $validator->errors(),
            'status' => true
        ], 422));
    }
}

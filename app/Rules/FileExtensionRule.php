<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileExtensionRule implements Rule
{
    protected $parameters;
    protected $message;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($parameters = [], $message = '')
    {
        $this->parameters = $parameters;
        $this->message = $message;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (! $value instanceof UploadedFile) {
            return false;
        }

        $extension = $value->getClientOriginalExtension();

        return $extension != '' && in_array('.' . $extension, $this->parameters);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        if(empty($this->message)) {
            $this->message = 'Ошибка при загрузке файла';
        }
        
        return $this->message;
    }
}

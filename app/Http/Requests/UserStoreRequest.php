<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    public function rules()
    {
        return
            [
                'email' => 'required',
                'password' => 'required',
            ];
    }

    public function messages()
    {
        return [
            'required'  => 'Это обязательное поле',
            'unique' => 'Данное поле должно быть уникальным',
        ];
    }
}

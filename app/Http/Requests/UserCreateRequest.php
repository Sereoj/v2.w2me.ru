<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class UserCreateRequest extends FormRequest
{
    public function rules()
    {
        return
            [
                'name'   =>  'required|string|min:4|max:50/',
                'email'  =>  'required|unique:users,email',
                'password'  =>  'required|min:6|max:24|confirmed',
            ];
    }
    public function messages()
    {
        return [
            'required'  => 'Это обязательное поле',
            'unique' => 'Данное поле должно быть уникальным',
            'name.min' => 'Поле должно содержать минимум 4 символов',
            'name.max' => 'Поле должно содержать максимум 50 символа',
            'password.min' => 'Поле должно содержать минимум 6 символов',
            'password.max' => 'Поле должно содержать максимум 24 символа',
            'confirmed' => 'Повторите правильно пароль'
        ];
    }
}

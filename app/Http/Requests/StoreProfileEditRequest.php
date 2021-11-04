<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class StoreProfileEditRequest extends FormRequest
{
    public function rules()
    {
            return [
            'name'   =>  'required|string|min:4|max:50',
            'photo'  =>  'nullable|image|mimes:jpeg,jpg,png,gif|max:1000',
            'old_password'  =>  'nullable|min:5|max:24',
            'new_password'  =>  'nullable|min:5|max:24',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Это обязательное поле',
            'string' => 'Должно быть строкой',
            'name.min' => 'Минимальное количество символов 4',
            'name.max' => 'Максимальное количество символов 50',
            'old_password.min' => 'Минимальное количество символов 5',
            'old_password.max' => 'Максимальное количество символов 24',
            'new_password.min' => 'Минимальное количество символов 5',
            'new_password.max' => 'Максимальное количество символов 24',
            'image.max' => 'Максимальный размер 1000',
            'mimes' => 'Принимает только jpeg,jpg,png'
        ];
    }
}

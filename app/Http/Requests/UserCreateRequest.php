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
                'name'   =>  'required',
                'email'  =>  'required|unique:users',
                'password'  =>  'required',
            ];
    }
}

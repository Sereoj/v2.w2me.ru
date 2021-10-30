<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class UserStoreRequest extends FormRequest
{
    public function rules()
    {
        return
            [
                'email' => 'required|email',
                'password' => 'required',
            ];
    }
}

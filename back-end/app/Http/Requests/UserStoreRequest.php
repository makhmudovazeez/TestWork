<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UserStoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'fullname' => ['required'],
            'password' => ['confirmed', Password::min(8)->numbers()->letters()->mixedCase()],
        ];
    }
}

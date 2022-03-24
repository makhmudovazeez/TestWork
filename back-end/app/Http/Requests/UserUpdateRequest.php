<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;


class UserUpdateRequest extends FormRequest
{
    public function rules()
    {
        $user = $this->route('user');
        return [
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($user->id)],
            'fullname' => ['required'],
            'password' => ['required', 'confirmed', Password::min(8)->numbers()->letters()->mixedCase()],
        ];
    }
}

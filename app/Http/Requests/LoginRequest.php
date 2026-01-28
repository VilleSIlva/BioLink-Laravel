<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * @property-read string $email
     * @property-read string $password
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "email"=>['required','email'],
            "password"=>['required']
        ];
    }

    public function messages()
    {
        return [
            "email.required"=>'O email é obrigatório',
            "password.required"=>'A senha é obrigatória'
        ];
    }

    /**
     * Tenta autenticar o usuário
     * @return bool
     */
    public function tryToLogin():bool{
       
        return Auth::attempt([
            "email"=>$this->email,
            "password"=>$this->password,
        ]);
    }
}

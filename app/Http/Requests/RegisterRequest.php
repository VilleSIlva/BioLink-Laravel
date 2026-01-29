<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Container\Attributes\DB;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     * @property-read string $name
     * @property-read string $email
     * @property-read string $password
     */
    public function rules(): array
    {
        return [
            "name"=>['required','min:3'],
            "email"=>["email","required","unique:users"],
            "password"=>['required','confirmed','min:8',Password::min(8)->letters()]
        ];
    }

    public function messages()
    {
        return [
            // Nome
            'name.required' => 'O nome é obrigatório.',
            'name.min' => 'O nome deve ter no mínimo :min caracteres.',
            
            
            // Email
            'email.required' => 'O email é obrigatório.',
            'email.email' => 'Informe um email válido.',
            'email.unique' => 'Este email já está cadastrado.',
            
            
            // Senha
            'password.required' => 'A senha é obrigatória.',
            'password.min' => 'A senha deve ter no mínimo :min caracteres.',
            'password.confirmed' => 'As senhas não conferem.',
        ];
    }
    /**
     * Registrar o usuário
     * @return bool
     */
    public function tryToRegister():bool{
        $password_hash = Hash::make($this->password);
        
        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = $password_hash;

        Auth::login($user);

        return true;
    }
}

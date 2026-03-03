<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class ClientRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'full_name'     => ['required', 'string', 'max:100'],
            'birthday'      => ['required', 'date'],
            'cpf'           => ['required', 'string', 'size:11'],
            'perfil_name'   => ['required', 'string', 'max:50'],
            'email'         => ['required', 'email', 'max:50', 'unique:users,email'],
            'password'      => ['required', 'confirmed', Password::defaults()], 
            'preferences'   => ['nullable'],
            'photo'         => ['nullable', 'image', 'max:2048', 'mimes:png,jpg,jpeg'],
        ];
    }

    public function messages(): array
    {
        return [
            'full_name.required' => 'O nome completo é obrigatório',
            'email.email' => 'Informe um e-mail válido',
            'password.confirmed' => 'As senhas não conferem',
            'photo.image' => 'O arquivo deve ser uma imagem',
        ];
    }
}

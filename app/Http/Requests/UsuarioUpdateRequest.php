<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioUpdateRequest extends FormRequest
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
            //Validação
            'primeiroNome' => 'required|string|max:255',
            'ultimoNome' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'senha' => 'required|string|min:6'
        ];
    }
    public function messages()
    {
        return [
            'primeiroNome.required' => 'O campo nome é obrigatório',
            'primeiroNome.string' => 'O campo nome precisa ser um texto',
            'primeiroNome.max' => 'O máximo de caracteres permitido são 255',
            'ultimoNome.required' => 'O campo sobrenome é obrigatório',
            'ultimoNome.string' => 'O campo sobrenome precisa ser um texto',
            'ultimoNome.max' => 'O máximo de caracteres permitido são 255',
            'email.required' => 'O campo e-mail é obrigatório',
            'email.email' => 'O campo e-mail precisa ser um e-mail',
            'email.unique' => 'Esse e-mail já está cadastrado'
        ];
    }
}

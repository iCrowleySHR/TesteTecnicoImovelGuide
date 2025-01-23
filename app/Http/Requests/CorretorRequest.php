<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CorretorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Altere para true se todos os usuários puderem enviar esta solicitação
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
            'nome' => 'required|min:2',
            'cpf' => 'required|digits:11|unique:corretores,cpf,' . $this->id,
            'creci' => 'required|min:2|max:5|unique:corretores,creci,' . $this->id,
        ];
    }

    /**
     * Returns custom messages for errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'nome.required' => 'O campo Nome é obrigatório.',
            'nome.min' => 'O campo Nome deve ter pelo menos 2 caracteres.',
            'cpf.required' => 'O campo CPF é obrigatório.',
            'cpf.digits' => 'O CPF deve ter exatamente 11 dígitos.',
            'cpf.unique' => 'O CPF informado já está cadastrado.',
            'creci.required' => 'O campo Creci é obrigatório.',
            'creci.min' => 'O campo Creci deve ter pelo menos 2 caracteres.',
            'creci.unique' => 'O campo Creci informado já está em uso.',
        ];
    }
}

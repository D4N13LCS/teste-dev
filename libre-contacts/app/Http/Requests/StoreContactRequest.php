<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            'Nome' => [
                'required',
                'string'
            ],
            'Telefone' => [
                'required',
                'string'
            ],
            'Idade' => [
                'required',
                'integer'
            ],
            'CEP' => [
                'required',
                'integer'
            ],
            'Rua' => [
                'required',
                'string'
            ],
            'Numero' => [
                'required',
                'integer'
            ],
            'Complemento' => [
                'required',
                'string'
            ],
            'Cidade' => [
                'required',
                'string'
            ],
            'Estado' => [
                'required',
                'string'
            ],
        ];
    }
}

<?php

namespace App\Http\Requests\Clients;

use Illuminate\Foundation\Http\FormRequest;

class ClientStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:200'],
            'email' => ['required', 'email', 'min:3', 'max:100', 'unique:clients,email'],
            'cpf' => ['required', 'string', 'min:9', 'max:16', 'unique:clients,cpf'],
            'rg' => ['required', 'string', 'min:4', 'max:16', 'unique:clients,rg'],
            'phone' => ['required', 'string', 'min:8', 'max:16'],
            'birthday' => ['required', 'date'],
        ];
    }

    public function attributes()
    {
        return [
            'birthday' => 'data de aniversário'
        ];
    }
}

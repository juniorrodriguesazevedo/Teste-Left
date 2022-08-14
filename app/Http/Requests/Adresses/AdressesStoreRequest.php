<?php

namespace App\Http\Requests\Adresses;

use Illuminate\Foundation\Http\FormRequest;

class AdressesStoreRequest extends FormRequest
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
            'client_id' => ['required', 'exists:clients,id'],
            'street' => ['required', 'string', 'min:3', 'max:255'],
            'district' => ['required', 'string', 'min:3', 'max:100'],
            'number' => ['required', 'string', 'min:1', 'max:10'],
            'city' => ['required', 'string', 'min:3', 'max:100'],
            'state' => ['required', 'string', 'min:2', 'max:100'],
            'zip_code' => ['required', 'string', 'min:3', 'max:12']
        ];
    }

    public function attributes()
    {
        return [
            'district' => 'bairro',
            'zip_code' => 'cep'
        ];
    }
}

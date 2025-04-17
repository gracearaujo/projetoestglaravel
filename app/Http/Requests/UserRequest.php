<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        
         $userId = $this->route('user');  

        return [
        'name'=> 'required',
        'setor'=> 'required|in:Tecnologia,Administrativo,Projeto',
        'cidade' => 'required|in:Rio Branco,Maceió,Macapá,Manaus,Salvador,Fortaleza,Brasília,Vitória,Goiânia,São Luís,Cuiabá,Campo Grande,Belo Horizonte,Belém,João Pessoa,Curitiba,Recife,Teresina,Rio de Janeiro,Natal,Porto Alegre,Porto Velho,Boa Vista,Florianópolis,São Paulo,Aracaju,Palmas',
        'data'=> 'required|date',
        ];
    }
    public function messages(): array
    {
        return[
        'name.required'=> 'Campo nome é obrigatório',
        'setor.required'=>'Selecione um setor',
        'cidade.required'=> 'Selecione uma cidade',
        'data.required'=> 'Escolha uma data!',
        ];

    }
}

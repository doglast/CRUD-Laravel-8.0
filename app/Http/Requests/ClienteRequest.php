<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'id_cliente'        =>'numeric',
            'nome_cliente'      =>'required',
            'email_cliente'     =>'required|email',
            'telefone_cliente'  =>'required|numeric',
            'senha_cliente'     =>'required',
            'data_nasc_cliente' =>'required|date'
        ];
    }

    public function messages()
    {
        return [
            'nome_cliente.required'=>'Coloque seu nome completo',
            'email_cliente.required'=>'Coloque seu email',
            'email_cliente.email'=>'Preencha com um email válido',
            'telefone_cliente.required'=>'Coloque seu telefone',
            'telefone_cliente.numeric'=>'Preencha com um número de telefone válido',
            'senha_cliente.required'=>'Preencha a senha',
            'data_nasc_cliente.required'=>'Coloque sua data de nascimento'
        ];
    }

}

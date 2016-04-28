<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductsRequest extends Request
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
             
                'title' => 'required|min:3',
                'body'=> 'required',
                'value'=> 'required|numeric',
                'qtd' => 'required|numeric'
            
        ];
    }

    public function messages() {
        return  [
                'required' => 'É necessário preencher o campo :attribute',
                'body.required' => 'Descrição é obrigatória',
                'min' => 'O campo tem que ter no mínimo :min caracteres',
                'numeric' => ':attribute deve ser um número'
            ];
    }
}

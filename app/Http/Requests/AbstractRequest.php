<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AbstractRequest extends Request
{
    protected $actionToValidade = ['store', 'update'];

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        if($this->isMethod('post') or $this->isMethod('put'))
            return $this->rules;

        return [];
    }

    public function messages() {
        return  [
                'required' => 'É necessário preencher o campo :attribute',
                'body.required' => 'Descrição é obrigatória',
                'min' => 'O campo tem que ter no mínimo :min caracteres',
                'numeric' => ':attribute deve ser um número'
            ];
    }

    protected function checkAction() {
        if(empty($this->route()->getAction()['as']))
            return false;

        $base = explode('.', $this->route()->getAction()['as']);

        //dd($this->route()->getAction());

        if(empty($base[1]))
            return false;

        return in_array($base[1], $this->actionToValidade);
    }
}

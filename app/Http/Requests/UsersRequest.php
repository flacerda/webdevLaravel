<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsersRequest extends AbstractRequest
{ 
   
    protected $rules = [
         
            'name' => 'required|min:3',
            'email'=> 'required|email'
        
    ];

}
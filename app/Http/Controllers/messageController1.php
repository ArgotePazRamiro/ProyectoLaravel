<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class messageController1 extends Controller
{
    public function store(){

        $message = request() -> validate([

            'ci'=> 'required',
            'name' => 'required',
            'apellidoPaterno'=>'required',
            'apellidoMaterno'=>'required',
            'telefono'=>'required',
            'direccion'=>'required',
            'sexo'=>'required'
             
         ]);
         
        Mail :: to('aqm1290@gmail.com')->queue(new MessageReceived($message));

     return 'mensaje enviado';
    }
    
}

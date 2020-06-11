<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class messagesController extends Controller
{
    public function store(){

        $message = request() -> validate([

            'name' => 'required',
            'email'=> ['required','email'],
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



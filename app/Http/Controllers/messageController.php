<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class messagesController extends Controller
{
    public function store(){

        $message = request() -> validate([

            'ci'=>'required',
            'name' => 'required',
            'apellidoPaterno'=>'required',
            'apellidoMaterno'=>'required',
            'telefono'=>['numeric','requerid','min:6','max:8'],
            'direccion'=>'required|min:5',
            'sexo'=>'required'
             
         ]);
         
        Mail :: to('aqm1290@gmail.com')->queue(new MessageReceived($message));

     return 'mensaje enviado';
    }
}



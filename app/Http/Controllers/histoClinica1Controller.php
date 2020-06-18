<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;

class histoClinica1Controller extends Controller
{
    /**
     * Handle the incoming request.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $histoCli = Paciente:: orderBy('created_at','asc')-> paginate();
        return view('historiaClinica', compact('histoCli')); 
        
    }
    public function show($id)
    {

        
        return view('listaPacientes.show',[
            'historiaClinica'=>Paciente::find($id)
        ]);
    }


}

<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;

class ListaPacienteController extends Controller
{
    /**
     * Handle the incoming request.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('listaPacientes.index',[
            'listaPaciente'=> Paciente::latest()->paginate()
        ]);
        
        //$histoCli = Paciente:: orderBy('created_at','asc')-> paginate();
        //return view('historiaClinica', compact('histoCli')); 
        
    }
    public function show(Paciente $listaPacientes)
    {

        
        return view('listaPacientes.show',[
            'listaPacientes'=>$listaPacientes
        ]);
    }
    public function create()
    {
        return view('listaPacientes.create');
    }

    public function store()
    {
        
        Paciente:: create([
            'nroDocumento'=> request('nroDocumento'),
            'nombres'=> request('nombres'),
            'apPaterno'=> request('apPaterno'),
            'apMaterno'=> request('apMaterno'),
            'direccion'=> request('direccion'),
            'sexo'=> request('sexo'),
            'telefonno'=> request('telefonno'),
            'edad'=> request('edad'),
        ]);
        return redirect()->route('listaPacientes.index');
    }

}

<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

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
        return view('listaPacientes.create',[
            'listaPacientes'=> new Paciente
        ]);
    }

    public function store()
    {

       $message = Paciente:: create([
            'nroDocumento'=> request('nroDocumento'),
            'nombres'=> request('nombres'),
            'apPaterno'=> request('apPaterno'),
            'apMaterno'=> request('apMaterno'),
            'direccion'=> request('direccion'),
            'sexo'=> request('sexo'),
            'telefonno'=> request('telefonno'),
            'edad'=> request('edad'),
        ]);
        Mail :: to('aqm1290@gmail.com')->queue(new MessageReceived($message));

        return redirect()->route('listaPacientes.index');

    }


    public function edit(Paciente $listaPacientes)
    {
        return view('listaPacientes.edit',[

            'listaPacientes'=> $listaPacientes
        ]);
    }

    public function update(Paciente $listaPacientes)
    {
            $listaPacientes->update([
            'nroDocumento'=> request('nroDocumento'),
            'nombres'=> request('nombres'),
            'apPaterno'=> request('apPaterno'),
            'apMaterno'=> request('apMaterno'),
            'direccion'=> request('direccion'),
            'sexo'=> request('sexo'),
            'telefonno'=> request('telefonno'),
            'edad'=> request('edad'),
        ]);
        return redirect()->route('listaPacientes.show', $listaPacientes);
    }

    public function destroy(Paciente $listaPacientes)
    {
        $listaPacientes->delete();
        
        return redirect()->route('listaPacientes.index');
    }
}

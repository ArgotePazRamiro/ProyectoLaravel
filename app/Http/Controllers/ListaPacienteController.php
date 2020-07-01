<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\Citas;
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
        
        return view('listaPacientes.index');
        /* return view('listaPacientes.index',[
            'listaPaciente'=> Paciente::latest()->paginate()
        ]); */
        
        //$histoCli = Paciente:: orderBy('created_at','asc')-> paginate();
        //return view('historiaClinica', compact('histoCli')); 
        
    }
    public function listall()
    {
        return view('listaPacientes.listall',[
            'listaPaciente'=> Paciente::paginate()
        ]);
    }
    public function search(Request $request){
        
        if($request->ajax()){
            $salida="";
            $nombres=$request->get('nombres');
            $apPaterno=$request->get('apPaterno');

            $listaPaciente =Paciente::nombres($nombres)->apPaterno($apPaterno)->paginate(5);

            if($listaPaciente){
                foreach($listaPaciente as $paciente){
                    $salida.='<tr>
                            <td>'.$paciente->id.'</td>
                            <td>'.$pacientes->nombres.'</td>
                            <td>'.$pacientes->apPaterno.'</td>
                            <td>'.$pacientes->apMaterno.'</td>
                            <td>'.$pacientes->edad.'</td>
                            <td>'.$pacientes->sexo.'</td>
                            <td>'.$pacientes->nroDocumento.'</td>
                            <td>'.$pacientes->direccion.'</td>
                            <td>'.$pacientes->telefono.'</td>
                            </tr>';
                }
                return response($salida);

            }
            else{
                return response()->json(['false'=>'No hay datos']);
            }
        }
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
        return redirect()->route('listaPacientes.index', $listaPacientes);
    }

    public function destroy(Paciente $listaPacientes)
    {
        $listaPacientes->delete();
        
        return redirect()->route('listaPacientes.index');
    }
}

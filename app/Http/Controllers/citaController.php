<?php

namespace App\Http\Controllers;

use App\Citas;
use App\Paciente;
use App\Medicos;
use Illuminate\Http\Request;

class citaController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index','show');
    }
    
    public function index()
    {
        $data= Citas::join('paciente','citas.paciente_id','=','paciente.id')
                    ->join('medicos','citas.medico_id','=','medicos.id')
                    ->join('empleados','medicos.empleado_id','=','empleados.id')
                    ->select('citas.*','empleados.nombres as nombresEmpleado','paciente.nombres as nombresPaciente')
                    ->get();
        //$paciente=Paciente::all();
        //$medicos=Medicos::all();

        return view('citas.index',[
            'cita'=> Citas::latest()->paginate()
        ],compact('data'));
    }
    public function show(Citas $cita)
    {

        $paciente=Paciente::all();
        $medicos=Medicos::all();

        return view('citas.show',[
            'cita'=>$cita
        ],compact('paciente','medicos'));
    }
    public function create()
    {
        $paciente=Paciente::all();
        $medicos=Medicos::all();

        return view('citas.create',[
            'cita'=> new Citas
        ],compact('paciente','medicos'));
    }
    public function store()
    {
        $paciente=Paciente::all();
        $medicos=Medicos::all();
         
        Citas:: create([
            'fechaReserva'=>request('fechaReserva'),
            'observaciones'=>request('observaciones'),
            'horaCita'=>request('horaCita'),
            'medico_id'=>request('medico_id'),
            'paciente_id'=>request('paciente_id'),

        ]);
        return redirect()->route('citas.index',compact('paciente','medicos'));

    }
    public function edit(Citas $cita)
    {

        $paciente=Paciente::all();
        $medicos=Medicos::all();

        return view('citas.edit',[
            'cita'=> $cita
        ],compact('paciente','medicos'));
    }

    public function update(Citas $cita)
    {

        $cita->update(request()->all());
        return redirect()->route('cita.show', $cita);
    }

    public function destroy(Citas $cita)
    {
        $cita->delete();
        
        return redirect()->route('citas.index');
    }
}

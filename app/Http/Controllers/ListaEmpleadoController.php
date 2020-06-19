<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\Tipoempleados;


class ListaEmpleadoController extends Controller
{
    
    public function index()
    {
        $listaEmpleado=Tipoempleados::all();

        return view('listaEmpleados.index',[
            'listaEmpleados'=> Empleado::latest()->paginate()
        ],compact('listaEmpleado'));
    }
    public function show(Empleado $listaEmpleados)
    {

        $listaEmpleado=Tipoempleados::all();

        return view('listaEmpleados.show',[
            'listaEmpleados'=>$listaEmpleados
        ],compact('listaEmpleado'));
    }
    public function create()
    {
        $listaEmpleado=Tipoempleados::all();

        return view('listaEmpleados.create',[
            'listaEmpleados'=> new Empleado
        ],compact('listaEmpleado'));
    }
    public function store()
    {
        $listaEmpleado=Tipoempleados::all();
         
        Empleado:: create([
            'nroDocumento'=> request('nroDocumento'),
            'nombres'=> request('nombres'),
            'apPaterno'=> request('apPaterno'),
            'apMaterno'=> request('apMaterno'),
            'direccion'=> request('direccion'),
            'telefonno'=> request('telefonno'),
            'tipo_empleado_id'=>request('tipo_empleado_id')
        ]);
        return redirect()->route('listaEmpleados.index',compact('listaEmpleado'));

    }
    public function edit(Empleado $listaEmpleados)
    {

        $listaEmpleado=Tipoempleados::all();

        return view('listaEmpleados.edit',[
            'listaEmpleados'=> $listaEmpleados
        ],compact('listaEmpleado'));
    }

    public function update(Empleado $listaEmpleados)
    {

        $listaEmpleados->update(request()->all());
        return redirect()->route('listaEmpleados.show', $listaEmpleados);
    }

    public function destroy(Empleado $listaEmpleados)
    {
        $listaEmpleados->delete();
        
        return redirect()->route('listaEmpleados.index');
    }

}

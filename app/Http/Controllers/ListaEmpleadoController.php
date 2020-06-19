<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\Tipoempleados;


class ListaEmpleadoController extends Controller
{
    
    public function index()
    {
        return view('listaEmpleados.index',[
            'listaEmpleados'=> Empleado::latest()->paginate()
        ]);
    }
    public function show(Empleado $listaEmpleados)
    {

        $listaEmpleados=Tipoempleados::all();

        return view('listaEmpleados.show',[
            'listaEmpleados'=>$listaEmpleados],compact('listaEmpleados'));
    }
    public function create()
    {
        return view('listaEmpleados.create',[
            'listaEmpleados'=> new Empleado
        ]);
    }
    public function store()
    {

        Empleado:: create([
            'nroDocumento'=> request('nroDocumento'),
            'nombres'=> request('nombres'),
            'apPaterno'=> request('apPaterno'),
            'apMaterno'=> request('apMaterno'),
            'direccion'=> request('direccion'),
            'telefonno'=> request('telefonno'),
        ]);
        return redirect()->route('listaEmpleados.index');

    }
    public function edit(Empleado $listaEmpleados)
    {
        return view('listaEmpleados.edit',[

            'listaEmpleados'=> $listaEmpleados
        ]);
    }

    public function update(Empleado $listaEmpleados)
    {
            $listaEmpleados->update([
            'nroDocumento'=> request('nroDocumento'),
            'nombres'=> request('nombres'),
            'apPaterno'=> request('apPaterno'),
            'apMaterno'=> request('apMaterno'),
            'direccion'=> request('direccion'),
            'telefonno'=> request('telefonno'),
            
        ]);
        return redirect()->route('listaEmpleados.show', $listaEmpleados);
    }

    public function destroy(Empleado $listaEmpleados)
    {
        $listaEmpleados->delete();
        
        return redirect()->route('listaEmpleados.index');
    }

}

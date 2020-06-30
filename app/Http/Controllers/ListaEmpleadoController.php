<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\Tipoempleados;


class ListaEmpleadoController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth')->only('create','edit','delete');
        //$this->middleware('auth');
        //$this->middleware('esMedico');
    }

    public function index(Request $request)
    {

        $nombres=$request->get('nombres');
        $apPaterno=$request->get('apPaterno');
        $apMaterno=$request->get('apMaterno');

        $data=Empleado::join('tipoempleados','empleados.tipo_empleado_id','=','tipoempleados.id')
                        ->select('empleados.*','tipoempleados.descripcion as descripcionEmpleado')
                        ->nombres($nombres)->apPaterno($apPaterno)->apMaterno($apMaterno)->get();
        
        return view('listaEmpleados.index',compact('data'));


        /* $nombres= $request->get('nombres');
        $apPaterno= $request->get('apPaterno');
        $nroDocumento= $request->get('nroDocumento'); */

/*         $listaEmpleado=Empleado::nombres($nombres)->apellidoPaterno($apPaterno)->nroDocumento('nroDocumento');
 */
            /*  if($request)
            {
                $query = trim($request->get('search'));

                $listaEmpleados= Empleado::where('nombres','LIKE',"%$query%")
                                    ->orderBy('id','asc')
                                    ->get();

            return view('listaEmpleados.index',['listaEmpleados'=>$listaEmpleado,'search'=>$query],compact('listaEmpleados'));
            }   */

            /* $data= Empleado::join('tipoempleados','empleados.tipo_empleado_id','=','tipoempleados.id')
            ->select('empleados.*','tipoempleados.descripcion as descripcionEmpleado')
            ->get(); */
            
        /* return view('listaEmpleados.index',[
            'listaEmpleados'=> Empleado::latest()->paginate()
        ],compact('data')); */
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
     /* public function search(Request $request)
    {
        $nombres=$request->get('nombres');
        $apPaterno=$request->get('apPaterno');
        $nroDocumento   =$request->get('nroDocumento'); 

        $data =Empleado::orderBy('id','DESC')
            ->nombres('nombres')
            ->apPaterno('apPaterno')
             ->nroDocumento('nroDocumento') 
            ->paginate(5);

        return view('listaEmpleados.index',compact('data'));

    }  */
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

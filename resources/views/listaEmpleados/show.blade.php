@extends('layout')

@section('title','lista Empleados ')

@section('content')

<div class="container">
    <div class="bg-white p-5 shadow rounded">
        <h2 class="list-group-item list-group-item-action">DATOS DEL Empleado</h2>
        <p class="list-group-item list-group-item list-group-item-dark">{{$listaEmpleados ->nroDocumento}}</p>
        <p class="list-group-item list-group-item list-group-item-dark">{{$listaEmpleados ->nombres}}</p>
        <p class="list-group-item list-group-item list-group-item-dark">{{$listaEmpleados ->apPaterno}}</p>
        <p class="list-group-item list-group-item list-group-item-dark">{{$listaEmpleados ->apMaterno}}</p>
        <p class="list-group-item list-group-item list-group-item-dark">{{$listaEmpleados ->direccion}}</p>
        <p class="list-group-item list-group-item list-group-item-dark">{{$listaEmpleados ->telefonno}}</p>
        @foreach ($listaEmpleado as $portItem)
                        
        <p class="list-group-item list-group-item list-group-item-dark" value="{{$portItem->id}}"> {{$portItem->descripcion}}</p>

        @endforeach

        <div class="d-flex justify-content-between
            align-items-center">        
            <a href="{{route('listaEmpleados.index')}}">
                Regresar
            </a>
            <div class="btn-group btn-group-sm">
                <a class="btn btn-warning"
                href="{{route('listaEmpleados.edit',$listaEmpleados)}}">
                Editar
                </a>
                <a class="btn btn-danger"
                    href="#"
                    onclick="document.getElementById('delete-empleado').submit()
                    ">
                    Eliminar
                </a>
            </div>
            <form action="{{route('listaEmpleados.destroy', $listaEmpleados)}}" 
                id="delete-empleado"
                method="POST"
                class="d-none">
                @csrf @method('DELETE')
            </form>
        </div> 
    </div>
</div>
@endsection
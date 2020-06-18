@extends('layout')

@section('title','Lista de Pacientes ')

@section('content')

<div class="container">
    <div class="bg-white p-5 shadow rounded">
        <h2 class="list-group-item list-group-item-action">DATOS DEL PACIENTE</h2>
        <p class="list-group-item list-group-item list-group-item-dark">{{$listaPacientes ->nroDocumento}}</p>
        <p class="list-group-item list-group-item list-group-item-dark">{{$listaPacientes ->nombres}}</p>
        <p class="list-group-item list-group-item list-group-item-dark">{{$listaPacientes ->apPaterno}}</p>
        <p class="list-group-item list-group-item list-group-item-dark">{{$listaPacientes ->apMaterno}}</p>
        <p class="list-group-item list-group-item list-group-item-dark">{{$listaPacientes ->direccion}}</p>
        <p class="list-group-item list-group-item list-group-item-dark">{{$listaPacientes ->sexo}}</p>
        <p class="list-group-item list-group-item list-group-item-dark">{{$listaPacientes ->telefonno}}</p>

        <div class="d-flex justify-content-between
            align-items-center">        
            <a href="{{route('listaPacientes.index')}}">
                Regresar
            </a>
            <div class="btn-group btn-group-sm">
                <a class="btn btn-warning"
                href="{{route('listaPacientes.edit',$listaPacientes)}}">
                Editar
                </a>
                <a class="btn btn-danger"
                    href="#"
                    onclick="document.getElementById('delete-paciente').submit()
                    ">
                    Eliminar
                </a>
            </div>
            <form action="{{route('listaPacientes.destroy', $listaPacientes)}}" 
                id="delete-paciente"
                method="POST"
                class="d-none">
                @csrf @method('DELETE')
            </form>
        </div> 
    </div>
</div>
@endsection
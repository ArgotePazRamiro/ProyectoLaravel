@extends('layout')

@section('title','Lista de Pacientes ')

@section('content')

<div class="container">
    <div class="row">
        <div class="">
        </div>
        <div class="col-md-6 order-md-1">
            <ul class="list-group">
                <li class="list-group-item list-group-item-action active"><span style="color: rgb(0, 255, 234)">DATOS
                        DEL PACIENTE:</span>
                    {{$listaPacientes ->nombres}}
                </li>

                <li class="list-group-item list-group-item-primary"><span style="color: black">Carnet de Identidad:
                    </span> {{$listaPacientes ->nroDocumento}}
                </li>
                <li class="list-group-item list-group-item-primary"><span style="color: black">Nombres:</span>
                    {{$listaPacientes ->nombres}}
                </li>
                <li class="list-group-item list-group-item-primary"><span style="color: black">Apellido Paterno:</span>
                    {{$listaPacientes ->apPaterno}}
                </li>
                <li class="list-group-item list-group-item-primary"><span style="color: black">Apellido Materno:</span>
                    {{$listaPacientes ->apMaterno}}
                </li>
                <li class="list-group-item list-group-item-primary"><span style="color: black">Direccion: </span>
                    {{$listaPacientes ->direccion}}
                </li>
                <li class="list-group-item list-group-item-primary"><span style="color: black">Sexo:</span>
                    {{$listaPacientes ->sexo}}
                </li>
                <li class="list-group-item list-group-item-primary"><span style="color: black">Telefono:</span>
                    {{$listaPacientes ->telefonno}}
                </li>

            </ul>
            <div class="d-flex justify-content-between
                align-items-center">
                <a href="{{route('listaPacientes.index')}}">
                    Regresar
                </a>
                <div class="btn-group btn-group-sm">
                    <a class="btn btn-warning" href="{{route('listaPacientes.edit',$listaPacientes)}}">
                        Editar
                    </a>
                    <a class="btn btn-danger" href="#" onclick="document.getElementById('delete-paciente').submit()
                    ">
                        Eliminar
                    </a>
                </div>
                <form action="{{route('listaPacientes.destroy', $listaPacientes)}}" id="delete-paciente" method="POST"
                    class="d-none">
                    @csrf @method('DELETE')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

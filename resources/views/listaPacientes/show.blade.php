@extends('layout')

@section('title','Lista de Pacientes')

@section('content')
<br><br><br>

<div class="container">
    <div class="row">
        <div>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">DATOS DEL PACIENTE</a>

            <p class="list-group-item list-group-item list-group-item-dark">{{$listaPacientes ->nroDocumento}}</p>
            <p class="list-group-item list-group-item list-group-item-dark">{{$listaPacientes ->nombres}}</p>
            <p class="list-group-item list-group-item list-group-item-dark">{{$listaPacientes ->apPaterno}}</p>
            <p class="list-group-item list-group-item list-group-item-dark">{{$listaPacientes ->apMaterno}}</p>
            <p class="list-group-item list-group-item list-group-item-dark">{{$listaPacientes ->direccion}}</p>
            <p class="list-group-item list-group-item list-group-item-dark">{{$listaPacientes ->sexo}}</p>
            <p class="list-group-item list-group-item list-group-item-dark">{{$listaPacientes ->telefonno}}</p>

            </div>
        </div>
    </div>
</div>
@endsection
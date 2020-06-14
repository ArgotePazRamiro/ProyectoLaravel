@extends('layout')

@section('title','Lista de Pacientes|'. $historiaClinica -> title)

@section('content')
<br><br><br>

<div class="container">
    <div class="row">
        <div>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">DATOS DEL PACIENTE</a>

            <p class="list-group-item list-group-item list-group-item-dark">{{$historiaClinica ->nroDocumento}}</p>
            <p class="list-group-item list-group-item list-group-item-dark">{{$historiaClinica ->nombres}}</p>
            <p class="list-group-item list-group-item list-group-item-dark">{{$historiaClinica ->apPaterno}}</p>
            <p class="list-group-item list-group-item list-group-item-dark">{{$historiaClinica ->apMaterno}}</p>
            <p class="list-group-item list-group-item list-group-item-dark">{{$historiaClinica ->direccion}}</p>
            <p class="list-group-item list-group-item list-group-item-dark">{{$historiaClinica ->sexo}}</p>
            <p class="list-group-item list-group-item list-group-item-dark">{{$historiaClinica ->telefonno}}</p>

            </div>
        </div>
    </div>
</div>
@endsection
@extends('layout')

@section('title','Lista pacientes')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 style="align-items: center">Lista de Paciente</h1>
        <!-- Boton para crear .... autentificar-->
        <h2><u><a class="btn btn-primary mb-0" href="{{route('listaPacientes.create') }}"> 
            Crear Nuevo Paciente
        </a></u></h2>

    </div>
    <table class="table table-striped table-dark ">
        <thead>
            <tr style="color: black" class="table-primary">
                <th scope="col">ID</th>
                <th scope="col">Nombre Completo</th>
                <th scope="col">Sexo</th>
                <th scope="col">Edad</th>
                <th scope="col">CI</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($listaPaciente as $portItem)
            <tr>
                <th scope="row">{{ $portItem->id }}</th>
                <td><u><a href="{{ route ('listaPacientes.show', $portItem) }}" style="color: yellow">{{ $portItem->nombres }} {{ $portItem->apPaterno }} {{ $portItem->apMaterno }}</u></a></td>
                <td>{{ $portItem->sexo }}</td>
                <td>{{ $portItem->edad }}</td>
                <td>{{ $portItem->nroDocumento }}</td>
                <td>{{ $portItem->direccion }}</td>
                <td>{{ $portItem->telefonno}}</td>
                
            </tr>
            @empty
            </tbody>
        </table>
        <p class="list-group-item border-0 mb-3 shadow-sm">
            No hay Pacientes Registrados
        </p>
@endforelse
{{$listaPaciente->links()}}
     
</div>


@endsection

@extends('layout')

@section('title','Lista pacientes')

@section('content')
<br><br><br>
<div class="container">
<h1 style="align-items: center">Lista de Paciente</h1>
</div>
<h2><u><a href="{{route('listaPacientes.create') }}"> Crear Nuevo Paciente</a></u></h2>
    <table class="table table-striped table-dark">
        <thead>
            <tr style="color: black">
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
<li>no hay archivos</li>
@endforelse
{{$listaPaciente->links()}}
     



@endsection

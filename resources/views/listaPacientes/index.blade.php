@extends('layout')

@section('title','Lista pacientes')

@section('content')
<br><br><br>
<h1>Lista de Paciente</h1>

    <table class="table table-striped table-dark">
        <thead>
            <tr>
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
     
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Buscar Paciente......."  aria-describedby="button-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
        </div>
      </div>
      




@endsection

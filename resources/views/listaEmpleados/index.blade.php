@extends('layout')

@section('title','Lista Empleado')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 style="align-items: center">Lista de Empleado</h1>
        <nav class="navbar navbar-light float-right">
        <form class="form-inline" method="GET" action="{{route('listaEmpleados.search')}}" autocomplete="off">
          
              <input name="nombres"  class="form-control mr-sm-2" type="search" placeholder="nombres" aria-label="nombres">
              <input name="apPaterno"  class="form-control mr-sm-2" type="search" placeholder="apPaterno" aria-label="apPaterno">
               <input name="nroDocumento"  class="form-control mr-sm-2" type="search" placeholder="nroDocumento" aria-label="nroDocumento">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </nav>
        {{-- <h6>
            @if ($search)
                <div class="alert alert-primary" role="alert">
                    
                    Los resultados de la busqueda de pacientes {{ $search }} son:
                </div>
                @else
            @endif
        </h6>  --}}
        <!-- Boton para crear .... autentificar-->
        @auth
        <h2><u><a class="btn btn-primary mb-0" href="{{route('listaEmpleados.create') }}"> 
            Crear Nuevo Empleado
        </a></u></h2>
        @endauth
    </div>
    
        
    
    <table class="table table-striped table-dark ">
        <thead>
            <tr style="color: black" class="table-succes">
                <th scope="col">ID</th>
                <th scope="col">Nombre Completo</th>
                <th scope="col">CI</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
                <th scope="col">Tipo Empleado</th>
            </tr>
        </thead>
        <tbody>
            {{-- @if ($dat )
            <tr>
                <th scope="row">{{ $portItem->id }}</th>
                <td><u><a href="{{ route ('listaEmpleados.show', $portItem) }}" style="color: yellow">{{ $portItem->nombres }} {{ $portItem->apPaterno }} {{ $portItem->apMaterno }}</u></a></td>
                <td>{{ $portItem->nroDocumento }}</td>
                <td>{{ $portItem->direccion }}</td>
                <td>{{ $portItem->telefonno}}</td>
                <td>{{ $portItem->descripcionEmpleado}}</td>
            </tr> --}}
            @forelse ($data as $portItem)
            <tr>
                <th scope="row">{{ $portItem->id }}</th>
                <td><u><a href="{{ route ('listaEmpleados.show', $portItem) }}" style="color: yellow">{{ $portItem->nombres }} {{ $portItem->apPaterno }} {{ $portItem->apMaterno }}</u></a></td>
                <td>{{ $portItem->nroDocumento }}</td>
                <td>{{ $portItem->direccion }}</td>
                <td>{{ $portItem->telefonno}}</td>
                <td>{{ $portItem->descripcionEmpleado}}</td>
            </tr>
            @empty
        </tbody>
            <p class="list-group-item border-0 mb-3 shadow-sm">
                No hay Empleados Registrados
            </p>
            @endforelse

    </table>
{{$listaEmpleados->links()}}
     
</div>


@endsection

@extends('layout')

@section('title','Lista Empleado')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 style="align-items: center">Lista de Empleado</h1>
        <label for="">buscar empleado</label>
        <nav class="navbar navbar-light float-right">
            <form class="form-inline">
          
              <input name="search" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">
          
                 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </nav>
        <h6>
            @if ($search)
                <div class="alert alert-primary" role="alert">
                    
                    Los resultados de la busqueda de pacientes {{ $search }} son:
                </div>
                @else
            @endif
        </h6> 
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
            @forelse ($listaEmpleados as $portItem)
            <tr>
                <th scope="row">{{ $portItem->id }}</th>
                <td><u><a href="{{ route ('listaEmpleados.show', $portItem) }}" style="color: yellow">{{ $portItem->nombres }} {{ $portItem->apPaterno }} {{ $portItem->apMaterno }}</u></a></td>
                <td>{{ $portItem->nroDocumento }}</td>
                <td>{{ $portItem->direccion }}</td>
                <td>{{ $portItem->telefonno}}</td>
                @foreach ($listaEmpleado as $empItem)

                    <td value="{{$empItem->id}}">{{$empItem->descripcion}}</td>

                @endforeach
            </tr>
            @empty
            </tbody>
            <p class="list-group-item border-0 mb-3 shadow-sm">
                No hay Empleados Registrados
            </p>
            @endforelse

        </table>
        
{{-- {{$listaEmpleado->links()}} --}}
     
</div>


@endsection

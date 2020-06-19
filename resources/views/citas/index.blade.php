@extends('layout')

@section('title','ListaCitas')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 style="align-items: center">Lista De Citas</h1>
        <!-- Boton para crear .... autentificar-->
        <h2><u><a class="btn btn-primary mb-0" href="{{route('citas.create') }}"> 
            Crear Nueva Cita
        </a></u></h2>

    </div>
    <table class="table table-striped table-dark ">
        <thead>
            <tr style="color: black" class="table-primary">
                <th scope="col">ID</th>
                <th scope="col">fecha Reserva</th>
                <th scope="col">Observaciones</th>
                <th scope="col">hora Cita</th>
                <th scope="col">Medico</th>
                <th scope="col">Nombre del Paciente</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($cita as $portItem)
            <tr>
                <th scope="row">{{ $portItem->id }}</th>
                <td>{{ $portItem->fechaReserva}}</td> 
                <td>{{ $portItem->observaciones }}</td>
                <td>{{ $portItem->horaCita}}</td>
                @foreach ($medicos as $medItem)

                    <td value="{{$medItem->id}}">{{$medItem->empleado_id}}</td>

                @endforeach
            
            @foreach ($paciente as $pacItem)

                    <td value="{{$pacItem->id}}">{{$pacItem->nombres}}</td>

                @endforeach
                @empty
            </tbody>
            
        </tr>
        
        </table>
        <p class="list-group-item border-0 mb-3 shadow-sm">
            no hay Citas.
        </p>
@endforelse
{{$cita->links()}}
     
</div>


@endsection

@extends('layout')

@section('title','ListaCitas')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 style="align-items: center">Lista De Citas</h1>
        <!-- Boton para crear .... autentificar-->
        @auth

        <h2><u><a class="btn btn-primary mb-0" href="{{ route('citas.create') }}">
                    Crear Nueva Cita
        </a></u></h2>
        @endauth

    </div>
    <table class="table table-bordered table-dark ">
        <thead>
            <tr style="color: yellow" class="">
                <th scope="col">ID</th>
                <th scope="col">fecha Reserva</th>
                <th scope="col">Observaciones</th>
                <th scope="col">hora Cita</th>
                <th scope="col">Nombre del Medico</th>
                <th scope="col">Nombre del Paciente</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $portItem)
            <tr>
                <th scope="row">{{ $portItem->id }}</th>
                <td>{{ $portItem->fechaReserva }}</td>
                <td>{{ $portItem->observaciones }}</td>
                <td>{{ $portItem->horaCita }}</td>

                <td>{{ $portItem->nombresEmpleado }}</td>

                <td>{{ $portItem->nombresPaciente }}</td>

                
        </tbody>

        </tr>
        @empty

        <p class="list-group-item border-0 mb-3 shadow-sm">
            no hay Citas.
        </p>
        @endforelse
    </table>



    {{ $cita->links() }}

</div>


@endsection

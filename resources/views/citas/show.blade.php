@extends('layout')

@section('title','listaCitas')

@section('content')

<div class="container">
    <div class="bg-white p-5 shadow rounded">
        <h2 class="list-group-item list-group-item-action">Citas</h2>
        <p class="list-group-item list-group-item list-group-item-dark">ID: {{$cita ->id}}</p>
        <p class="list-group-item list-group-item list-group-item-dark">fechaReserva: {{$cita ->fechaReserva}}</p>
        <p class="list-group-item list-group-item list-group-item-dark">Observaciones: {{$cita ->observaciones}}</p>
        <p class="list-group-item list-group-item list-group-item-dark">Hora Cita:{{$cita ->horaCita}}</p>
        
        @foreach ($medicos as $medItem)
        <p class="list-group-item list-group-item list-group-item-dark" value="{{$medItem->id}}"> {{$medItem->medico_id}}</p>
        @endforeach
        @foreach ($paciente as $pacItem)
        <p class="list-group-item list-group-item list-group-item-dark" value="{{$pacItem->id}}">{{$pacItem ->nombres}}</p>
        @endforeach

        <div class="d-flex justify-content-between
            align-items-center">        
            <a href="{{route('citas.index')}}">
                Regresar
            </a>
            @auth
                
            <div class="btn-group btn-group-sm">
                <a class="btn btn-warning"
                href="{{route('citas.edit',$cita)}}">
                Editar
                </a>
                <a class="btn btn-danger"
                    href="#"
                    onclick="document.getElementById('delete-cita').submit()
                    ">
                    Eliminar
                </a>
            </div>
            
            <form action="{{route('citas.destroy', $cita)}}" 
                id="delete-cita"
                method="POST"
                class="d-none">
                @csrf @method('DELETE')
            </form>
            @endauth

        </div> 
    </div>
</div>
@endsection
@extends('layout')

@section('title','EditarCita')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form method="POST" action="{{ route('citas.update', $listaEmpleados) }}">
                 @method('PATCH')
                <h1 class="display-4">Editar Cita</h1>
                <hr>
                @include('citas._form',['btnText'=>'Actualizar'])
            </form>
        </div>
    </div>
</div>

@endsection
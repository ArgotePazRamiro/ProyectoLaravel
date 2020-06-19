@extends('layout')

@section('title','Editar Empleado')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form method="POST" action="{{ route('listaEmpleados.update', $listaEmpleados) }}">
                 @method('PATCH')
                <h1 class="display-4">Editar Empleado</h1>
                <hr>
                @include('listaEmpleados._form',['btnText'=>'Actualizar'])
            </form>
        </div>
    </div>
</div>

@endsection
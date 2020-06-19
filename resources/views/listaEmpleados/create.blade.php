@extends('layout')

@section('title','Crear nuevo paciente')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form action="{{route('listaEmpleados.store')}}" method="POST">
                <h1 class="display-4">Nuevo Empleado</h1>
                <hr>
                @include('listaEmpleados._form',['btnText'=>'Guardar'])
            </form>
        </div>
    </div>
</div>

@endsection
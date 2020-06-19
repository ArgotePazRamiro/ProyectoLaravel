@extends('layout')

@section('title','Crear nuevo paciente')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form action="{{route('listaPacientes.store')}}" method="POST">
                <h1 class="display-4">Nuevo paciente</h1>
                <hr>
                @include('listaPacientes._form',['btnText'=>'Guardar'])
            </form>
        </div>
    </div>
</div>







@endsection
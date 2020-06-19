@extends('layout')

@section('title','Crear Cita')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form action="{{route('citas.store')}}" method="POST">
                <h1 class="display-4">nueva cita</h1>
                <hr>
                @include('citas._form',['btnText'=>'Guardar'])
            </form>
        </div>
    </div>
</div>

@endsection
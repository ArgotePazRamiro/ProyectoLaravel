@extends('layout')

@section('title','home')
    

@section('content')

<div class="container">
    <div class="row">
        
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">Mi Consultorio </h1>
            <p class="lead text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt quibusdam enim voluptate quidem vero quasi, dolor obcaecati exercitationem reiciendis cum consectetur commodi cumque, quaerat quis placeat numquam debitis optio esse!</p>
        
    
        <a class="btn btn-lg btn-block btn-outline-primary" href="{{route('listaPacientes.index')}}">Paciente</a>
        <a class="btn btn-lg btn-block btn-outline-primary" href="{{route('citas.index')}}">Citas</a>
        <a class="btn btn-lg btn-block btn-outline-primary" href="{{route('listaEmpleados.index')}}">Empleado</a>
            
        </div>
        <div class="col-12 col-lg-6">
            <img  class="img-fluid mb-4" src="/images/Doc.svg" alt="Imagen Doc">
        </div>
    </div>
</div>

@endsection
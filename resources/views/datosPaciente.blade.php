@extends('layout')

@section('title','home')
    

@section('content')
<br>
<form method="POST" action="{{route('messages.store')}}">
    @csrf
    <div>
        <br>
        <br>
        <section class="content-header">
            <h1 style="text-align: center">NUEVO PACIENTE</h1>
        </section>
        <section class="content">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col">
                    </div>
                    <div col-7> 
                        <div class="form-group" >
                        <input name="ci"  placeholder="Carnet de Identidad"><br>
                        {!! $errors->first('ci','<small>:message</small><br>') !!}  
                        </div>
                        <div class="form-group">
                        <input name="name" placeholder="nombre"><br>
                        {!! $errors->first('name','<small>:message</small><br>') !!} 
                        </div>
                        <div class="form-group">
                        <input name="apellidoPaterno"placeholder="apellido paterno"><br>
                        {!! $errors->first('apellidoPaterno','<small>:message</small><br>') !!} 
                        </div>
                        <div class="form-group">
                        <input name="apellidoMaterno" placeholder="apellido materno"><br>
                        {!! $errors->first('apellidoMaterno','<small>:message</small><br>') !!} 
                        </div>
                        <div class="form-group">
                        <input name="telefono" placeholder="telefono" > <br>
                        {!! $errors->first('telefono','<small>:message</small><br>') !!} 
                        </div>
                        <div class="form-group">
                        <input name="direccion" placeholder="direccion"><br>
                        {!! $errors->first('direccion','<small>:message</small><br>') !!} 
                        </div>
                        <div class="form-group">
                        <input name="sexo" placeholder="sexo"><br>
                        {!! $errors->first('sexo','<small>:message</small><br>') !!} 
                        </div>
                        <div class="form-group"><br>
                        <button class="btn btn-danger">GUARDAR</button>
                        </div>
                    </div> 
                    <div class="col">

                    </div>
                </div>
            </div>
        </section>
    </div>
</form>

@endsection
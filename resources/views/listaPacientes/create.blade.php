@extends('layout')

@section('title','Crear nuevo paciente')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form  class="bg-white py-3 px-4 shadow rounded" >
                <h1 class="display-4">Nuevo paciente</h1>
                <hr>
                @include('listaPacientes._form',['btnText'=>'Guardar'])
            </form>
        </div>
    </div>
</div>

@endsection
@push('js')
<script>
    
    //(document).ready(function(){
        $(document).on('submit', '#formulario', function (e) {
       // submitHandler:function('#formulario'){
           let form=$('#formulario');
            $.ajax({
                type:"POST",
                url:"{{route('listaPacientes.store')}}",
                data:$(form[0]).serialize(),
                dataType:"JSON",
                success: function(response){
                    console.log(response);
                },
                error: function(response){
                    alert('error');
                    console.log(response.responseJSON.errors);
                    $(form).validate().showErrors(response.responseJSON.errors);
                }
            });
        });
        //}
    //});
</script>

@endpush
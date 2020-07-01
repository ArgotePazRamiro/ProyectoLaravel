@extends('layout')

@section('title','Lista pacientes')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <form class="form-inline">
          
            <input name="nombres"  class="form-control mr-sm-2" id="nombres" type="search" placeholder="nombres" aria-label="nombres">
            <input name="apPaterno"  class="form-control mr-sm-2" id="apPaterno" type="search" placeholder="apPaterno" aria-label="apPaterno">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
    </div>

    <div class="table table-bordered">
        <div id="list-paciente"></div>
    </div>
    
</div>
<script>

    $(document).ready(function(){
        listPaciente();
    })

    var listPaciente = function()
    {
        $.ajax({
            type: 'get',
            url: '{{ url('listp') }}',
            success: function(data){
                $('#list-paciente').empty().html(data);
            }
        });
    }

    $(document).on('keyup','#nombres,#apPaterno', function(){
    debugger;
    var nombres = $('#nombres').val().toLowerCase();
    var apPaterno = $('#apPaterno').val();
    $.ajax({
    url:"{{url('listp/search')}}",
    type:'GET',
    data: {nombres:nombres,apPaterno:apPaterno},
    success: function(data)
    {

        console.log(data);

        $('tbody').empty().html(data);

    },
    error:function(){
        alert('error');
    },
    })
    })


</script>


@endsection


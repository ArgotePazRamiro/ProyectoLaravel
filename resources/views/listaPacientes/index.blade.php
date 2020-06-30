@extends('layout')

@section('title','Lista pacientes')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
          
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

</script>


@endsection


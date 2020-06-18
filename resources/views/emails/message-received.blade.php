<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje recebido</title>
</head>
<body>
<p>Se registro el Paciente con el nombre de:{{$msg['nombres']}} - del Carnet de Identidad:  {{ $msg ['nroDocumento'] }}</p>
<p><strong>Apellido Paterno: {{$msg['apPaterno'] }}</strong></p>
<p><strong>Apellido Materno: {{$msg['apMaterno'] }}</strong></p>
<p><strong>Edad: {{$msg['edad'] }}</strong></p>
<p><strong>Sexo: {{$msg['sexo'] }}</strong></p>
<p><strong>Direccion: {{$msg['direccion'] }}</strong></p>
<p><strong>telefono: {{$msg['telefonno'] }}</strong></p>

</body>
</html>
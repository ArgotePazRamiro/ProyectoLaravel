<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje recebido</title>
</head>
<body>
<p>Recibiste un mensaje de :{{$msg['name']}} - del Carnet de Identidad:  {{ $msg ['ci'] }}</p>
<p><strong>Apellido Paterno: {{$msg['apellidoPaterno'] }}</strong></p>
<p><strong>Apellido Materno: {{$msg['apellidoMaterno'] }}</strong></p>
<p><strong>Sexo: {{$msg['sexo'] }}</strong></p>
<p><strong>Direccion: {{$msg['direccion'] }}</strong></p>
<p><strong>telefono: {{$msg['telefono'] }}</strong></p>

</body>
</html>
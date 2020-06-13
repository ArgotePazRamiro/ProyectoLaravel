@extends('layout')

@section('title','home')


@section('content')
<br>
<br>
<br>
<!doctype html>
<html lang="en">

<head>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .container {
            max-width: 960px;
        }

        .lh-condensed {
            line-height: 1.25;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">NUEVO EMPLEADO</h4>
                <form class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="ci">Carnet de Identidad</label>
                        <input type="text" class="form-control" id="ci" name="ci" placeholder="" required>
                        <div class="invalid-feedback">
                            Por favor introduzca su carnet de identidad.
                        </div>
                    </div>



                    <div class="mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" pattern="[A-Za-z]+" minlength="2" maxlength="20" required>
                        <div class="invalid-feedback">
                            Por favor introduzca su nombre.
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="apellidoPaterno">Apellido Paterno</label>
                            <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" pattern="[A-Za-z]+" minlength="2" maxlength="20" required>
                            <div class="invalid-feedback">
                                Por favor introduzca su apellido paterno.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="apellidoMaterno">Apellido Materno</label>
                            <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" pattern="[A-Za-z]+" minlength="2" maxlength="20" required>
                            <div class="invalid-feedback">
                                Por favor introduzca su apellido materno.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="sexo">Sexo</label>
                            <select class="custom-select d-block w-100" id="sexo" name="sexo" required>
                                <option> </option>
                                <option>Masculino</option>
                                <option>Femenino</option>
                                <option>Otro</option>
                            </select>
                            <div class="invalid-feedback">
                                Seleccione un sexo valido.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" minlength="7" pattern="[0-9]+" required>
                        <div class="invalid-feedback">
                            Por favor introduzca su telefono.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="direccion">Direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" pattern="[A-Za-z0-9]+" minlength="2" maxlength="40"required>
                        <div class="invalid-feedback">
                            Por favor introduzca su direccion.
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-success btn-lg" type="submit">Continuar</button>
                </form>

            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2017-2020 Servidores A y R</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
    <script>
        (function () {
            'use strict'

            window.addEventListener('load', function () {
        
                var forms = document.getElementsByClassName('needs-validation')

                Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
            }, false)
        }())
    </script>
</body>

</html>



@endsection
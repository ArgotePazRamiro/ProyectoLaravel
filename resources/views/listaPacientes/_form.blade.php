@csrf
<div class="container">
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
        </div>
        <div class="col-md-8 order-md-1">
            <form class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="nroDocumento">Carnet de Identidad</label>
                    <input type="text" class="form-control" id="nroDocumento" name="nroDocumento"
                        value="{{old('nroDocumento', $listaPacientes ->nroDocumento)}}" required>
                    <div class="invalid-feedback">
                        Por favor introduzca su carnet de identidad.
                    </div>
                </div>



                <div class="mb-3">
                    <label for="nombres">Nombre</label>
                    <input type="text" class="form-control" id="nombres" name="nombres"
                        value="{{old('nombres', $listaPacientes ->nombres)}}" required>
                    <div class="invalid-feedback">
                        Por favor introduzca su nombre.
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="apPaterno">Apellido Paterno</label>
                        <input type="text" class="form-control" id="apPaterno" name="apPaterno" pattern="[A-Za-z]+"
                            minlength="2" maxlength="20" value="{{$listaPacientes ->apPaterno}}" required>
                        <div class="invalid-feedback">
                            Por favor introduzca su apellido paterno.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="apMaterno">Apellido Materno</label>
                        <input type="text" class="form-control" id="apMaterno" name="apMaterno" pattern="[A-Za-z]+"
                            minlength="2" maxlength="20" value="{{$listaPacientes ->apMaterno}}" required>
                        <div class="invalid-feedback">
                            Por favor introduzca su apellido materno.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="sexo">Sexo</label>
                        <select class="custom-select d-block w-100" id="sexo" name="sexo"
                            value="{{$listaPacientes ->sexo }}" required>
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
                    <label for="telefonno">Telefono</label>
                    <input type="text" class="form-control" id="telefonno" name="telefonno" minlength="7"
                        pattern="[0-9]+" value="{{$listaPacientes ->telefonno}}" required>
                    <div class="invalid-feedback">
                        Por favor introduzca su telefono.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="edad">Edad</label>
                    <input type="text" class="form-control" id="edad" name="edad" value="{{$listaPacientes ->edad}}"
                        required>
                    <div class="invalid-feedback">
                        Por favor introduzca su edad.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="direccion">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" pattern="[A-Za-z0-9]+"
                        minlength="2" maxlength="40" value="{{$listaPacientes ->direccion}}" required>
                    <div class="invalid-feedback">
                        Por favor introduzca su direccion.
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
                <a class="btn btn-link btn-block" href="{{route('listaPacientes.index')}}">
                    Cancelar
                </a>
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
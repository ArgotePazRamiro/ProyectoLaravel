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
                        value="{{old('nroDocumento', $listaEmpleados ->nroDocumento)}}" required>
                    <div class="invalid-feedback">
                        Por favor introduzca su carnet de identidad.
                    </div>
                </div>



                <div class="mb-3">
                    <label for="nombres">Nombre</label>
                    <input type="text" class="form-control" id="nombres" name="nombres"
                        value="{{old('nombres', $listaEmpleados ->nombres)}}" required>
                    <div class="invalid-feedback">
                        Por favor introduzca su nombre.
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="apPaterno">Apellido Paterno</label>
                        <input type="text" class="form-control" id="apPaterno" name="apPaterno" pattern="[A-Za-z]+"
                            minlength="2" maxlength="20" value="{{$listaEmpleados ->apPaterno}}" required>
                        <div class="invalid-feedback">
                            Por favor introduzca su apellido paterno.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="apMaterno">Apellido Materno</label>
                        <input type="text" class="form-control" id="apMaterno" name="apMaterno" pattern="[A-Za-z]+"
                            minlength="2" maxlength="20" value="{{$listaEmpleados ->apMaterno}}" required>
                        <div class="invalid-feedback">
                            Por favor introduzca su apellido materno.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="telefonno">Telefono</label>
                    <input type="text" class="form-control" id="telefonno" name="telefonno" minlength="7"
                        pattern="[0-9]+" value="{{$listaEmpleados ->telefonno}}" required>
                    <div class="invalid-feedback">
                        Por favor introduzca su telefono.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="direccion">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion"
                            value="{{$listaEmpleados ->direccion}}" required>
                    <div class="invalid-feedback">
                        Por favor introduzca su direccion.
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="tipo_empleado_id">Tipo de Empleado</label>
                        <select class="custom-select d-block w-100" id="tipo_empleado_id" name="tipo_empleado_id"
                         required>
                         @foreach ($listaEmpleado as $portItem)
                            <option value="{{$portItem->id}}"> {{$portItem->descripcion}} </option>
                         @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Seleccione tipo de Empleado.
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block">
                    {{ $btnText }}
                </button>
                <a class="btn btn-link btn-block" href="{{route('listaEmpleados.index')}}">
                    Cancelar
                </a>
            </form>
        </div>
    </div>
</div>
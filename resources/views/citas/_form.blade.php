@csrf
<div class="container">
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
        </div>
        <div class="col-md-8 order-md-1">
            <form class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="fechaReserva">Fecha Reserva</label>
                    <input type="date" class="form-control" id="fechaReserva" name="fechaReserva"
                        value="{{old('fechaReserva', $cita->fechaReserva)}}" required>
                    <div class="invalid-feedback">
                        Por favor introduzca su fecha Reserva.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="observaciones">Observaciones</label>
                    <input type="text" class="form-control" id="observaciones" name="observaciones"
                        value="{{old('observaciones', $cita ->observaciones)}}" required>
                    <div class="invalid-feedback">
                        Por favor introduzca una Observacion.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="horaCita">hora Cita</label>
                    <input type="time" class="form-control" id="horaCita" name="horaCita" 
                         value="{{$cita->horaCita}}" required>
                    <div class="invalid-feedback">
                        Por favor introduzca su horario cita.
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="medico_id">Medico</label>
                        <select class="custom-select d-block w-100" id="medico_id" name="medico_id"
                         required>
                         @foreach ($medicos as $mediItem)
                            <option value="{{$mediItem->id}}"> {{$mediItem->id}} </option>
                         @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Seleccione un medico.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="paciente_id">Paciente</label>
                        <select class="custom-select d-block w-100" id="paciente_id" name="paciente_id"
                         required>
                         @foreach ($paciente as $pacItem)
                    <option value="{{$pacItem->id}}"> {{$pacItem->nombres}} {{$pacItem->apPaterno}}</option>
                         @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Seleccione un medico.
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block">
                    {{ $btnText }}
                </button>
                <a class="btn btn-link btn-block" href="{{route('citas.index')}}">
                    Cancelar
                </a>
            </form>
        </div>
    </div>
</div>
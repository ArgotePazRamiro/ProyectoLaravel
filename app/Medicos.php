<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Medicos extends Model
{
    protected $fillable=['nroDocumento','nombres','apPaterno','apMaterno','direccion','telefonno','tipo_empleado_id'];
    protected $table ='medicos';



}

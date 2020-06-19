<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable=['nroDocumento','nombres','apPaterno','apMaterno','direccion','telefonno'];
    protected $table ='empleados';

}

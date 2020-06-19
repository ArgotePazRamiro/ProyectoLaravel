<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Paciente extends Model
{

    protected $fillable=['nroDocumento','nombres','apPaterno','apMaterno','edad','sexo','direccion','telefonno'];
    protected $table ='paciente';
    
}

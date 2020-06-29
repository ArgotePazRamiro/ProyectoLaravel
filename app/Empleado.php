<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Empleado extends Model
{
    protected $fillable=['nroDocumento','nombres','apPaterno','apMaterno','direccion','telefonno','tipo_empleado_id'];
    protected $table ='empleados';


    
    public function scopeNombres($query,$nombres)
    {
        if($nombres)
        {
            return $query->where('nombres','like',"%$nombres%");
        }
    }

    public function scopeApPaterno($query,$apPaterno)
    {
        if($apPaterno)
        {
            return $query->where('apPaterno','like',"%$apPaterno%");
        }
    }
    public function scopeApMaterno($query,$apMaterno)
    {
        if($apMaterno)
        {
            return $query->where('apMaterno','like',"%$apMaterno%");
        }
    } 
    
}

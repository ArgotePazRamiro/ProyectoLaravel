<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Empleado extends Model
{
    protected $fillable=['nroDocumento','nombres','apPaterno','apMaterno','direccion','telefonno','tipo_empleado_id'];
    protected $table ='empleados';

    public function scopeName($query,$descripcion)
    {
        if(trin($descripcion)!="")
        {
            $query->where(DB::raw("id","LIKE","%$descripcion%"));
        }
    }
}

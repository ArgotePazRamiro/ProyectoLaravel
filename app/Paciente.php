<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Paciente extends Model
{

    protected $fillable=['nroDocumento','nombres','apPaterno','apMaterno','edad','sexo','direccion','telefonno'];
    protected $table ='paciente';
    
    public function scopeName($query,$nombres)
    {
        if(trim($description)!= "")
        {
            $query ->DB::table('citas')
                   ->join('paciente', 'citas.id', '=', 'paciente.id')
                   
                   ->select('cita.*', 'paciente.nombres','medicos.id');
        }
    }
}

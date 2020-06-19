<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;



class Citas extends Model
{
    protected $fillable=['fechaReserva','observaciones','horaCita','medico_id','paciente_id'];
    protected $table ='citas';


    public function scopeName($query,$nombres)
    {
        if(trim($description)!= "")
        {
            $query ->DB::table('citas')
                   ->join('paciente', 'citas.id', '=', 'paciente.id')
                   ->join('medicos','citas.id','=','medicos.id')
                   ->select('cita.*', 'paciente.nombres','medicos.id');
        }
    }
}

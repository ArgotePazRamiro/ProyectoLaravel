<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaSemanas extends Model
{
    protected $fillable=['nombreDiaSemana'];
    protected $table ='diasemanas';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipoempleados extends Model
{
    protected $fillable=['id','descripcion'];

    protected $table ='tipoempleados';
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apPaterno');
            $table->string('apMaterno');
            $table->string('nroDocumento');
            $table->string('direccion');
            $table->string('telefonno');
            $table->timestamps();

            $table->integer('tipo_empleado_id')->unsigned();
            $table->foreign('tipo_empleado_id')->references('id')->on('tipoempleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}

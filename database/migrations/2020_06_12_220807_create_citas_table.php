<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fechaReserva');
            $table->string('observaciones');
            $table->string('horaCita');

            $table->integer('medico_id')->unsigned();
            $table->integer('paciente_id')->unsigned();
            $table->foreign('medico_id')->references('id')->on('medicos')->onDelete('set null');
            $table->foreign('paciente_id')->references('id')->on('paciente')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}

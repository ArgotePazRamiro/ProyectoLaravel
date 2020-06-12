<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosatencionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horariosatencion', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('medico_id')->unsigned();
            $table->integer('hora_id')->unsigned();
            $table->integer('dia_semana_id')->unsigned();
            $table->foreign('medico_id')->references('id')->on('medicos');
            $table->foreign('hora_id')->references('id')->on('horas');
            $table->foreign('dia_semana_id')->references('id')->on('diasemanas');

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
        Schema::dropIfExists('horariosatencion');
    }
}

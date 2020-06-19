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
            $table->string('fecha');
            $table->integer('medico_id')->unsigned()->nullable();
            $table->integer('hora_id')->unsigned()->nullable();
            $table->integer('dia_semana_id')->unsigned()->nullable();
            $table->foreign('medico_id')->references('id')->on('medicos')->onDelete('set null');
            $table->foreign('hora_id')->references('id')->on('horas')->onDelete('set null');
            $table->foreign('dia_semana_id')->references('id')->on('diasemanas')->onDelete('set null');

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

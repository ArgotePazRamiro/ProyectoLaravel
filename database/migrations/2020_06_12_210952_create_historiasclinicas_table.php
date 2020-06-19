<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriasclinicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historiasclinicas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fechaApertura');
            
            $table->integer('paciente_id')->unsigned()->nullable();
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
        Schema::dropIfExists('historiasclinicas');
    }
}

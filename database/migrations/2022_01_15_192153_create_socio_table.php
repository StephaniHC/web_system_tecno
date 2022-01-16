<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socio', function (Blueprint $table) {
            $table->integer('ci')->unsigned();
            $table->date('fecha_afiliacion'); 
            $table->integer('nro_puesto'); 
            $table->string('tipo_socio',1); 
            $table->date('fecha_inicio'); 
            $table->foreign('ci')->references('ci')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socio');
    }
}
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitucionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institucions', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre');
          $table->string('institucion')->comment('Nombre de la isntitucion laboratorio o centro medico');
          $table->string('direccion');
          $table->string('telefono');
          $table->string('tipo')->comment('Remitente Destinatario');
          $table->string('localidad');
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
        Schema::dropIfExists('institucions');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuntosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('puntos', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre');
          $table->string('responsable');
          $table->integer('telefono');
          $table->string('zona');
          $table->string('direccion');
          $table->double('longitud');
          $table->double('latitud');
          $table->smallInteger('id_tipo');
          $table->smallInteger('id_usuario');
          $table->foreign('id_tipo')->references('id')->on('tipo');
          $table->foreign('id_usuario')->references('id')->on('users');
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
        Schema::dropIfExists('puntos');
    }
}

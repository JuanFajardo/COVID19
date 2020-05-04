<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('paciente', function (Blueprint $table) {


            $table->increments('id');
            $table->string('nombre');
            $table->string('vinculo');
            $table->integer('edad');
            $table->string('sexo',1);
            $table->date('fecha_nacimiento');
            $table->integer('telefono');
            $table->string('zona');
            $table->string('domicilio');
            $table->string('observaciones');
            $table->double('longitud');
            $table->double('latitud');
            $table->smallInteger('id_usuario');

            $table->smallInteger('id_enfermedad_base');
            $table->string('nacionalidad');
            $table->string('institucion');
            $table->string('grupo_familiar');
            $table->date('fecha_captacion');
            $table->date('fecha_inicio_sintomas');
            $table->smallInteger('id_municipio');

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
        Schema::dropIfExists('paciente');
    }
}

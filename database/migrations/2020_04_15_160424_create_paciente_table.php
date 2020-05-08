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
            $table->string('grupo_familiar')->nullable();
            $table->string('vinculo')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('sexo',1)->nullable();
            $table->string('observaciones')->nullable();
            $table->string('estado')->nullable()->comment('actualizado con estado');
            $table->string('nacionalidad')->nullable();

            $table->string('institucion')->nullable();
            $table->date('fecha_captacion')->nullable();
            $table->date('fecha_inicio_sintomas')->nullable();

            $table->smallInteger('id_enfermedad_base')->nullable();
            $table->smallInteger('id_municipio')->nullable();
            $table->smallInteger('id_usuario');

            $table->string('globalid', 50)->nullable();
            $table->dateTime('creationdate')->nullable();
            $table->string('creator', 50)->nullable();
            $table->dateTime('editdate')->nullable();
            $table->string('editor', 50)->nullable();
            $table->string('nombre')->nullable();
            $table->string('paterno', 50)->nullable();
            $table->string('materno', 50)->nullable();
            $table->string('ci', 50)->nullable();
            $table->string('extencion', 50)->nullable();
            $table->string('codigopaciente', 50)->nullable();
            $table->smallInteger('edad')->nullable()->default('0');
            $table->string('telefono')->nullable();
            $table->string('zona')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('sangre', 50)->nullable()->comment('grupo sangineo');
            $table->string('contacto_covid', 50)->nullable()->comment('contacto_directo/contacto_indirecto');
            $table->string('situacion_aislamiento', 50)->nullable();
            $table->string('nro_familia', 50)->nullable();
            $table->string('lugar_actualmente')->nullable();
            $table->string('encuestador')->nullable();
            $table->string('encuestador_telefono')->nullable();
            $table->text('encuestador_observacion')->nullable();
            $table->dateTime('fecha_envio')->nullable();
            $table->string('situacion_medica', 50)->nullable();
            $table->string('informacion_familiar', 50)->nullable();
            $table->double('longitud');
            $table->double('latitud');

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

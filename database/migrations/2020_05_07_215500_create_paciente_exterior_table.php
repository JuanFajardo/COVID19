<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaciente_exteriorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente_exterior', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('id_tipo_documento');
            $table->Integer('numero_documento');
            $table->text('email');
            $table->text('direcciones_previstas');
            $table->text('comentarios');
            $table->smallInteger('id_paciente');
            $table->date('created_at');
            $table->date('updated_at');
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
        Schema::dropIfExists('paciente_exterior');
    }
}
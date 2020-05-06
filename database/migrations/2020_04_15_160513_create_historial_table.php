<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('historial', function (Blueprint $table) {
        $table->increments('id');
        $table->smallInteger('id_estado');
        $table->date('fecha');
        $table->smallInteger('habilitado');
        //$table->smallInteger('id_paciente');
        $table->string('id_paciente', 50)->nullable()->comment('globalid');
        $table->smallInteger('id_usuario');

        //$table->foreign('id_paciente')->references('globalid')->on('paciente');
        $table->foreign('id_estado')->references('id')->on('estado');
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
        Schema::dropIfExists('historial');
    }
}

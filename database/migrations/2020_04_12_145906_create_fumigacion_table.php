<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFumigacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fumigacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->string('imagen');
            $table->string('archivo');
            $table->smallInteger('estado');
            $table->date('fecha');
            $table->smallInteger('distrito');
            $table->smallInteger('id_usuario');
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
        Schema::dropIfExists('fumigacion');
    }
}

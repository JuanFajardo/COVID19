<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsentimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consentimiento', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_aceptacion');
            $table->dateTime('hora_aceptacion');
            $table->double('dom_lon');
            $table->double('dom_lat');
            $table->text('documento');
            $table->date('created_at');
            $table->date('updated_at');
            $table->smallInteger('id_paciente');
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
        Schema::dropIfExists('consentimiento');
    }
}
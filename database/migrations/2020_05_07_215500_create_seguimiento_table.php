<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimiento', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('dia');
            $table->date('fecha');
            $table->double('temperatura');
            $table->text('tos');
            $table->text('dificultad_respiratoria');
            $table->text('responsable');
            $table->smallInteger('id_tarjetamonitoreo');
            //$table->date('created_at');
            //$table->date('updated_at');
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
        Schema::dropIfExists('seguimiento');
    }
}    

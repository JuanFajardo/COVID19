<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarjetaMonitoreoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarjetamonitoreo', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->text('mayor_60');
            $table->text('comorbilidades');
            $table->text('lugar_referencia');
            $table->date('fecha_derivacion');
            $table->text('nombre_medico_deriva');
            $table->smallInteger('id_paciente');
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
        Schema::dropIfExists('tarjetamonitoreo');
    }
}

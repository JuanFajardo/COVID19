<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboratorioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

Schema::create('laboratorio', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('id_paciente');
            $table->string('apoderado');
            $table->smallInteger('ocupacion');
            $table->string('ocupacion_otro')->nullable();;
            $table->smallInteger('influenza');
            $table->date('fecha_influenza')->nullable();
            $table->smallInteger('viaje');
            $table->string('pais_viaje')->nullable();;
            $table->date('fecha_viaje')->nullable();
            $table->time('hora_viaje')->nullable();
            $table->string('empresa_viaje')->nullable();
            $table->smallInteger('nro_viaje')->nullable();
            $table->smallInteger('nro_asiento')->nullable();
            $table->smallInteger('contacto_positivo');
            $table->date('fecha_contacto_positivo')->nullable();
            $table->smallInteger('id_paciente_contagio')->nullable();
            $table->date('fecha_inicio_sintomas')->nullable();
            $table->smallInteger('tos_seca')->nullable();
            $table->smallInteger('fiebre')->nullable();
            $table->smallInteger('malestar_general')->nullable();
            $table->smallInteger('cefalea')->nullable();
            $table->smallInteger('dificultad_respiratoria')->nullable();
            $table->smallInteger('mialgias')->nullable();
            $table->smallInteger('dolor_de_garganta')->nullable();
            $table->smallInteger('perdida_olfato')->nullable();
            $table->smallInteger('perdida_gusto')->nullable();
            $table->smallInteger('asintomatico')->nullable();
            $table->string('otros')->nullable();
            $table->smallInteger('estado_actual');
            $table->date('fecha_defuncion')->nullable();
            $table->smallInteger('diagnostico_clinico');
            $table->string('diagnostico_otro')->nullable();
            $table->date('fecha_aislamiento')->nullable();
            $table->string('lugar_aislamiento')->nullable();
            $table->date('fecha_internacion')->nullable();
            $table->string('establecimiento_internacion')->nullable();
            $table->smallInteger('ventilacion_mecanica');
            $table->smallInteger('terapia_intensiva');
            $table->date('fecha_ingreso_uti')->nullable();
            $table->smallInteger('riesgo');
            $table->smallInteger('hipertension_arterial')->nullable();
            $table->smallInteger('obesidad')->nullable();
            $table->smallInteger('diabetes')->nullable();
            $table->smallInteger('embarazo')->nullable();
            $table->smallInteger('enfermedad_cardiaca')->nullable();
            $table->smallInteger('enfermedad_respiratoria')->nullable();
            $table->smallInteger('enfermedad_renal_cronica')->nullable();
            $table->string('otro_enfermedad')->nullable();
            $table->smallInteger('muestra_laboratorio');
            $table->string('lugar_laboratorio')->nullable();
            $table->smallInteger('tipo_muestra');
            $table->string('otro_tipo_muestra')->nullable();
            $table->string('nombre_laboratorio')->nullable();
            $table->date('fecha_toma_muestra')->nullable();
            $table->date('fecha_envio_muestra')->nullable();
            $table->string('responsable_muestra')->nullable();
            $table->string('observaciones')->nullable();
            $table->smallInteger('resultado_laboratorio');
            $table->date('fecha_resultado_laboratorio')->nullable();
            $table->string('nombre_notifica')->nullable();
            $table->integer('telefono_notifica')->nullable();
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
        Schema::dropIfExists('laboratorio');
    }
}

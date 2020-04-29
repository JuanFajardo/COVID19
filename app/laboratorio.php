<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laboratorio extends Model
{
   protected $table = 'laboratorio';
  protected $fillable = [
    'id', 'id_paciente','apoderado','ocupacion','ocupacion_otro','influenza','fecha_influenza','viaje','pais_viaje','fecha_viaje','hora_viaje','empresa_viaje','nro_viaje','nro_asiento','contacto_positivo','fecha_contacto_positivo','id_paciente_contagio','fecha_inicio_sintomas','tos_seca','malestar_general','fiebre','cefalea','dificultad_respiratoria','mialgias','dolor_de_garganta','perdida_olfato','perdida_gusto','asintomatico','otros','estado_actual','fecha_defuncion','diagnostico_clinico','diagnostico_otro','fecha_aislamiento','lugar_aislamiento','fecha_internacion','establecimiento_internacion','ventilacion_mecanica','terapia_intensiva','fecha_ingreso_uti','riesgo','hipertension_arterial','obesidad','diabetes','embarazo','enfermedad_cardiaca','enfermedad_respiratoria','enfermedad_renal_cronica','otro_enfermedad',
    'muestra_laboratorio','lugar_laboratorio','tipo_muestra','otro_tipo_muestra','nombre_laboratorio','fecha_toma_muestra','fecha_envio_muestra','responsable_muestra','observaciones','resultado_laboratorio','fecha_resultado_laboratorio',
    'nombre_notifica','telefono_notifica'];
}

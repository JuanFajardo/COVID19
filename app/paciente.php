<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
  protected $table = 'paciente';
  protected $fillable = ['id', 'nombre','vinculo','edad','sexo','fecha_nacimiento','telefono','zona','domicilio','observaciones','longitud','latitud','id_usuario','enfermedad_base','nacionalidad','institucion','grupo_familiar','fecha_captacion','fecha_inicio_sintomas','id_municipio'];

}

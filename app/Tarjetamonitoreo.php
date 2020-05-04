<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarjetamonitoreo extends Model
{
    protected $fillable = ['id', 'fecha_inicio', 'fecha_fin', 'mayor_60','comorbilidades', 'lugar_referencia', 'fecha_derivacion', 'nombre_medico_deriva', 'id_paciente', 'created_at', 'updated_at'];
    protected $table = 'tarjetamonitoreo';
   
}

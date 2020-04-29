<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class muestra extends Model
{
      protected $table = 'muestra';
  protected $fillable = ['id', 'fecha','observacion','id_paciente','id_usuario','accion'];
}

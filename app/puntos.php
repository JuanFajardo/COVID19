<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class puntos extends Model
{
  protected $table = 'puntos';
  protected $fillable = ['id', 'nombre','responsable', 'telefono', 'zona', 'direccion', 'longitud','latitud','id_tipo','id_usuario'];
}

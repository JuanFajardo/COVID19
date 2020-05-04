<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
  protected $table = 'detalles';
  protected $fillable = ['id', 'id_prueba', 'nro_tubos', 'cantidad', 'descripcion'];
}

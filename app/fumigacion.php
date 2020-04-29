<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fumigacion extends Model
{
  protected $table = 'fumigacion';
  protected $fillable = ['id', 'descripcion','imagen', 'archivo', 'estado', 'fecha', 'id_usuario','distrito'];
}

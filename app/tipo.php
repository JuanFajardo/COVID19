<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo extends Model
{
  protected $table = 'tipo';
    protected $fillable = ['id', 'nombre_tipo', 'id_usuario'];

}

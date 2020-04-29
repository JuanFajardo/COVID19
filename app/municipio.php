<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class municipio extends Model
{
  protected $table = 'municipio';
  protected $fillable = ['id', 'municipio','poblacion','id_provincia','id_usuario'];
}

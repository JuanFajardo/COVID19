<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class arbol extends Model
{
      protected $table = 'arbol';
  protected $fillable = ['id', 'id_paciente','parent_id','id_usuario'];
}

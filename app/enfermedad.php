<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enfermedad extends Model
{
      protected $table = 'enfermedad';
  protected $fillable = ['id', 'enfermedad','id_usuario'];
}

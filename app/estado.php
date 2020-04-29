<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estado extends Model
{
  protected $table = 'estado';
  protected $fillable = ['id', 'estado','id_usuario','clase'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
  protected $table = 'institucions';
  protected $fillable = ['id', 'nombre', 'institucion', 'direccion', 'telefono', 'tipo', 'localidad'];
  
  public function scopeGetTipoInstitucion($query, $tipo){
    return $query->where('tipo', '=', $tipo);
  }
}

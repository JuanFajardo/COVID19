<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
  protected $table = 'pruebas';
  protected $fillable = ['id', 'id_paciente', 'id_institucions_remitente', 'id_institucions_destinatario', 'temperatura', 'solicitud', 'fecha_envio', 'nombre'];

  
}

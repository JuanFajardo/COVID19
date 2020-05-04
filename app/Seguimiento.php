<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguimiento extends Model
{
    protected $fillable = ['id', 'dia', 'fecha', 'temperatura','tos', 'dificultad_respiratoria','responsable', 'id_tarjetamonitoreo','created_at', 'updated_at'];
    protected $table = 'seguimiento';
}
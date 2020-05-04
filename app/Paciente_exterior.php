<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente_exterior extends Model
{
    protected $fillable = ['id', 'id_tipo_documento', 'numero_documento', 'email','direcciones_previstas', 'comentarios', 'id_paciente', 'created_at', 'updated_at'];
    protected $table = 'paciente_exterior';
}

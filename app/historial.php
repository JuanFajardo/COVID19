<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class historial extends Model
{
    protected $table = 'historial';
    protected $fillable = ['id', 'id_estado','fecha','habilitado','id_paciente','id_usuario'];
}

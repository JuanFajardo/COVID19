<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consentimiento extends Model
{
    protected $fillable = ['id', 'fecha_aceptacion', 'hora_aceptacion', 'dom_lon','dom_lat', 'documento','created_at', 'updated_at'];
    protected $table = 'consentimiento';
}
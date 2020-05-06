<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
  protected $table = 'paciente';
  protected $fillable = ['id', 'grupo_familiar', 'vinculo', 'fecha_nacimiento', 'sexo', 'observaciones', 'estado', 'nacionalidad', 'institucion', 'fecha_captacion', 'fecha_inicio_sintomas',
                         'id_enfermedad_base', 'id_municipio', 'id_usuario', 'globalid', 'creationdate', 'creator', 'editdate', 'editor', 'nombre', 'paterno', 'materno', 'ci', 'extencion',
                         'codigopaciente', 'edad', 'telefono', 'zona', 'domicilio', 'sangre', 'contacto_covid', 'situacion_aislamiento', 'nro_familia', 'lugar_actualmente', 'encuestador',
                         'encuestador_telefono', 'encuestador_observacion', 'fecha_envio', 'situacion_medica', 'informacion_familiar', 'longitud', 'latitud'];


  public function form_consentimiento()
    {
    	$consentimiento=Consentimiento::where('id_paciente', $this->id)->orderBy('id', 'desc')->first();
        if ($consentimiento)
        {
        	return 'Con formulario';
        }
        else
        {
        	return 'Sin formulario';
        }
    }
    public function form_exterior()
    {
        $paciente_exterior=Paciente_exterior::where('id_paciente', $this->id)->orderBy('id', 'desc')->first();
        if ($paciente_exterior)
        {
            return 'Con formulario';
        }
        else
        {
            return 'Sin formulario';
        }
    }
    public function tipo_documento()
    {
        $paciente_exterior=Paciente_exterior::where('id_paciente', $this->id)->orderBy('id', 'desc')->first();
        if ($paciente_exterior)
        {
            return $paciente_exterior->tipo_documento;
        }
        else
        {
            return '';
        }
    }
    public function numero_documento()
    {
        $paciente_exterior=Paciente_exterior::where('id_paciente', $this->id)->orderBy('id', 'desc')->first();
        if ($paciente_exterior)
        {
            return $paciente_exterior->numero_documento;
        }
        else
        {
            return '';
        }
    }
    public function email()
    {
        $paciente_exterior=Paciente_exterior::where('id_paciente', $this->id)->orderBy('id', 'desc')->first();
        if ($paciente_exterior)
        {
            return $paciente_exterior->email;
        }
        else
        {
            return '';
        }
    }
    public function direcciones_previstas()
    {
        $paciente_exterior=Paciente_exterior::where('id_paciente', $this->id)->orderBy('id', 'desc')->first();
        if ($paciente_exterior)
        {
            return $paciente_exterior->direcciones_previstas;
        }
        else
        {
            return '';
        }
    }
    public function comentarios()
    {
        $paciente_exterior=Paciente_exterior::where('id_paciente', $this->id)->orderBy('id', 'desc')->first();
        if ($paciente_exterior)
        {
            return $paciente_exterior->comentarios;
        }
        else
        {
            return '';
        }
    }

}

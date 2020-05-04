<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
  protected $table = 'paciente';
  protected $fillable = ['id', 'nombre','vinculo','edad','sexo','fecha_nacimiento','telefono','zona','domicilio','observaciones','longitud','latitud','id_usuario','enfermedad_base','nacionalidad','institucion','grupo_familiar','fecha_captacion','fecha_inicio_sintomas','id_municipio'];
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

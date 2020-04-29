<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estado;
use App\paciente;
use App\historial;
use App\enfermedad;
use App\muestra;
use App\laboratorio;
use App\municipio;


class LaboratorioController extends Controller
{
    public function index()
  {
  $paciente=paciente::select("paciente.id","paciente.nombre")->get();
  $persona=paciente::Join("laboratorio","paciente.id","laboratorio.id_paciente")
  ->select("laboratorio.id","paciente.nombre as nombre1","laboratorio.created_at")->get();
  //return $paciente;
  return view("admin.laboratorio",compact("persona","paciente"));
  }

  public function GuardaLaboratorio(Request $request)
  {
    //return $request->id_paciente;
    $dato = new laboratorio;
    $request['id_paciente']  = \Auth::user()->id;
    $request['id_paciente_contagio']  = 2;
    $dato->fill($request->all());
    $dato->save();
    return redirect('Laboratorio')->with('success','Se Registro satisfactoriamente');
  }

  public function VerLaboratorio($id)
  {
    $laboratorio=laboratorio::find($id);
    $paciente=paciente::find($laboratorio->id_paciente);
    $contagio=paciente::find($laboratorio->id_paciente_contagio);
    return view("admin.verLaboratorio",compact("laboratorio","paciente","contagio"));
  }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Paciente;
use Illuminate\Support\Facades\Response;
use App\Consentimiento;
use App\Tarjetamonitoreo;
use App\Seguimiento;
use App\Paciente_exterior;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class PaginasController extends Controller
{
    /***************************** Controller Gobernacion ****************/
    public function consentimientolist()
    {
    	$pacientes = paciente::orderBy('id', 'ASC')->get();
      return view('gob.consentimientolist')->with('pacientes', $pacientes);
    }
    public function consentimientoform(Request $request)
    {
      $id=request('id', '0');
      $paciente = Paciente::find($id);
      $consentimiento1 = Consentimiento::where('id_paciente', $id)->first();
      if ($consentimiento1)
      { 
          return view('gob.consentimientoform')->with('paciente', $paciente)->with('consentimiento', $consentimiento1);
      }
      else
      {
         $consentimiento = new Consentimiento();
          $fecha = date('Y-m-d');
          $hora = date('G')-4;
          $minuto = date('i');
          $hora = $hora.':'.$minuto.':00';
          // Seteamos las propiedades
          $consentimiento->fecha_aceptacion = $fecha;
          $consentimiento->hora_aceptacion = $hora;
          $consentimiento->dom_lon = 2;
          $consentimiento->dom_lat = 2;
          $consentimiento->documento = '';
          $consentimiento->id_paciente = $id;
          $consentimiento->id=0;
          return view('gob.consentimientoform')->with('paciente', $paciente)->with('consentimiento', $consentimiento);
      }
      
      
    }
    public function tarjetamonitoreoform(Request $request)
    {
      $id=request('id', '0');
      $paciente = Paciente::find($id);
      $tarjetamonitoreo1 = Tarjetamonitoreo::where('id_paciente', $id)->first();
      if ($tarjetamonitoreo1)
      { 
          
          $fecha = $tarjetamonitoreo1->fecha_inicio;
          $seguimientos=Seguimiento::where('id_tarjetamonitoreo', $tarjetamonitoreo1->id)->orderBy('dia', 'ASC')->get();
          $dias1 = array();
          foreach ($seguimientos as $seguimiento) {
            $unarray = [$seguimiento->dia, $seguimiento->fecha, $seguimiento->temperatura, $seguimiento->tos, $seguimiento->dificultad_respiratoria, $seguimiento->responsable];
            array_push($dias1, $unarray);            
          }          
          return view('gob.tarjetamonitoreoform')->with('paciente', $paciente)->with('tarjetamonitoreo', $tarjetamonitoreo1)->with('dias', $dias1);
      }
      else
      {
         $tarjetamonitoreo = new Tarjetamonitoreo();
         $fecha = date('Y-m-d');
          $hora = date('G')-4;
          $minuto = date('i');
          $hora = $hora.':'.$minuto.':00';
          // Seteamos las propiedades
          $tarjetamonitoreo->fecha_inicio = $fecha;
          $tarjetamonitoreo->fecha_fin = '';
          $tarjetamonitoreo->mayor_60 = '';
          $tarjetamonitoreo->comorbilidades = '';
          $tarjetamonitoreo->lugar_referencia = '';
          $tarjetamonitoreo->fecha_derivacion = '';
          $tarjetamonitoreo->nombre_medio_deriva = '';
          $tarjetamonitoreo->id_paciente = $id;
          $dias1 = array(["1", $fecha,'','','',''],["2", date("Y-m-d",strtotime($fecha."+ 1 days")),'','','',''], ["3", date("Y-m-d",strtotime($fecha."+ 2 days")),'','','',''],["4", date("Y-m-d",strtotime($fecha."+ 3 days")),'','','',''], ["5", date("Y-m-d",strtotime($fecha."+ 4 days")),'','','',''], ["6", date("Y-m-d",strtotime($fecha."+ 5 days")),'','','',''], ["7", date("Y-m-d",strtotime($fecha."+ 6 days")),'','','',''], ["8", date("Y-m-d",strtotime($fecha."+ 7 days")),'','','',''], ["9", date("Y-m-d",strtotime($fecha."+ 8 days")),'','','',''], ["10", date("Y-m-d",strtotime($fecha."+ 9 days")),'','','',''],["11", date("Y-m-d",strtotime($fecha."+ 10 days")),'','','',''],["12", date("Y-m-d",strtotime($fecha."+ 11 days")),'','','',''], ["13", date("Y-m-d",strtotime($fecha."+ 12 days")),'','','',''], ["14", date("Y-m-d",strtotime($fecha."+ 13 days")),'','','','']);

          return view('gob.tarjetamonitoreoform')->with('paciente', $paciente)->with('tarjetamonitoreo', $tarjetamonitoreo)->with('dias', $dias1);
      }
      
      
    }
    public function vermapasimple()
    {
        $lat=request('dom_lat', '2');
        $lon=request('dom_lon', '2');      
        return view('gob.vermapasimple')->with('dom_lat', $lat)->with('dom_lon', $lon);
    }
    public function saveform(Request $request)
    {
      $id=request('id', '0'); 
      if ($id>0)
      {
         $consentimiento = Consentimiento::find($id);
         $consentimiento->dom_lon=request('dom_lon');
         $consentimiento->dom_lat=request('dom_lat');
         $consentimiento->fecha_aceptacion=request('fecha_aceptacion');
         $consentimiento->hora_aceptacion=request('hora_aceptacion');        
      }   
      else
      {
         $consentimiento = new Consentimiento();
         $consentimiento->id_paciente=request('id_paciente');
         $consentimiento->dom_lon=request('dom_lon');
         $consentimiento->dom_lat=request('dom_lat');
         $consentimiento->fecha_aceptacion=request('fecha_aceptacion');
         $consentimiento->hora_aceptacion=request('hora_aceptacion'); 
      }
      $consentimiento->save();
      $pacientes = paciente::orderBy('id', 'ASC')->get();
      return view('gob.consentimientolist')->with('pacientes', $pacientes);
    }
    public function consentimientopdf()
    {
        $id=request('id', '0');
        $paciente = Paciente::find($id);
        $consentimiento = Consentimiento::where('id_paciente', $id)->first();
        $sMapa= public_path("test5".".png");
        $sLat=40.714728;
        $sLong=-73.998672;
        
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);  

        $pdf = $pdf->loadView('gob.consentimientopdf', compact('paciente', 'consentimiento'));
        return $pdf->download('listado.pdf');
        
        
    }
    public function tarjetamonitoreo()
    {
      $pacientes = paciente::orderBy('id', 'ASC')->get();
      return view('gob.tarjetamonitoreo')->with('pacientes', $pacientes);
    }
    public function savetarjetaform(Request $request)
    {
      $id=request('id', '0'); 
      if ($id>0)
      {
         $tarjetamonitoreo = Tarjetamonitoreo::find($id);
         $tarjetamonitoreo->fecha_inicio=request('fecha_inicio');
         $tarjetamonitoreo->fecha_fin=request('fecha_fin');
         $tarjetamonitoreo->mayor_60=request('mayor_60');
         $tarjetamonitoreo->comorbilidades=request('comorbilidades');
         $tarjetamonitoreo->lugar_referencia=request('lugar_referencia');
         $tarjetamonitoreo->fecha_derivacion=request('fecha_derivacion');
         $tarjetamonitoreo->nombre_medico_deriva=request('nombre_medico_deriva');
         $tarjetamonitoreo->id_paciente=request('id_paciente');
         $tarjetamonitoreo->save();
         for($i=0;$i<=13;$i++){
             $seguimiento = Seguimiento::where('id_tarjetamonitoreo', $id)->where('dia', $i + 1)->first();
             if ($seguimiento){
             }
             else{
                $seguimiento = new Seguimiento(); 
             }

             $seguimiento->dia = $request->input('dia.'.$i);
             $seguimiento->fecha = $request->input('fecha.'.$i);
             $seguimiento->temperatura = $request->input('temperatura.'.$i);
             $seguimiento->tos = $request->input('tos.'.$i);
             $seguimiento->dificultad_respiratoria = $request->input('dificultad_respiratoria.'.$i);
             $seguimiento->responsable = $request->input('responsable.'.$i);;
             $seguimiento->id_tarjetamonitoreo = $id;
             $seguimiento->save();
         }
      }   
      else
      {
         $tarjetamonitoreo = new Tarjetamonitoreo();
         $tarjetamonitoreo->fecha_inicio=request('fecha_inicio');
         $tarjetamonitoreo->fecha_fin=request('fecha_fin');
         $tarjetamonitoreo->mayor_60=request('mayor_60');
         $tarjetamonitoreo->comorbilidades=request('comorbilidades');
         $tarjetamonitoreo->lugar_referencia=request('lugar_referencia');
         $tarjetamonitoreo->fecha_derivacion=request('fecha_derivacion');
         $tarjetamonitoreo->nombre_medico_deriva=request('nombre_medico_deriva');
         $tarjetamonitoreo->id_paciente=request('id_paciente');
         $id_tarjetamonitoreo=$tarjetamonitoreo->save();
         for($i=0;$i<=13;$i++){
             $seguimiento = new Seguimiento();
             $seguimiento->dia = $request->input('dia.'.$i);
             $seguimiento->fecha = $request->input('fecha.'.$i);
             $seguimiento->temperatura = $request->input('temperatura.'.$i);
             $seguimiento->tos = $request->input('tos.'.$i);
             $seguimiento->dificultad_respiratoria = $request->input('dificultad_respiratoria.'.$i);
             $seguimiento->responsable = $request->input('responsable.'.$i);;
             $seguimiento->id_tarjetamonitoreo = $id_tarjetamonitoreo;
             $seguimiento->save();
         } 
      }
      
      $pacientes = paciente::orderBy('id', 'ASC')->get();
      return view('gob.tarjetamonitoreo')->with('pacientes', $pacientes);
    }
    public function tarjetamonitoreopdf()
    {
      $id=request('id', '0');
      $paciente = Paciente::find($id);
      $tarjetamonitoreo = Tarjetamonitoreo::where('id_paciente', $id)->first();
      if ($tarjetamonitoreo)
      { 
          $fecha = $tarjetamonitoreo->fecha_inicio;
          $seguimientos=Seguimiento::where('id_tarjetamonitoreo', $tarjetamonitoreo->id)->orderBy('dia', 'ASC')->get();
          $dias = array();
          foreach ($seguimientos as $seguimiento) {
            $unarray = [$seguimiento->dia, $seguimiento->fecha, $seguimiento->temperatura, $seguimiento->tos, $seguimiento->dificultad_respiratoria, $seguimiento->responsable];
            array_push($dias, $unarray);            
          }          
      }      
        $pdf = PDF::loadView('gob.tarjetamonitoreopdf', compact('paciente', 'tarjetamonitoreo', 'dias'));
        return $pdf->download('listado.pdf');
    }
    public function monitoreoexteriorlist()
    {
      $pacientes = paciente::orderBy('id', 'ASC')->get();
      return view('gob.monitoreoexteriorlist')->with('pacientes', $pacientes);
    }
    public function monitoreoexteriorform(Request $request)
    {
      $id=request('id', '0');
      $paciente = Paciente::find($id);
      if (!$paciente){
         $paciente = new Paciente();
      }  
      $paciente_exterior = Paciente_exterior::where('id_paciente', $id)->first();
      if ($paciente_exterior)
      {         
                  
          
      }
      else
      {
          $paciente_exterior = new Paciente_exterior();
          // Seteamos las propiedades
          $paciente_exterior->id_tipo_documento = 0;
          $paciente_exterior->numero_documento = '';
          $paciente_exterior->email = '';
          $paciente_exterior->direcciones_previstas = '';
          $paciente_exterior->comentarios = '';
          $paciente_exterior->id_paciente = $id;
      }
      return view('gob.monitoreoexteriorform')->with('paciente', $paciente)->with('paciente_exterior', $paciente_exterior);
      
    }
    public function saveexteriorform(Request $request)
    {
      $id=request('id', '0'); 
      if ($id>0)
      {
         $paciente_exterior = Paciente_exterior::find($id);
                 
      }   
      else
      {
         $paciente_exterior = new Paciente_exterior();
      }
      $paciente_exterior->id_tipo_documento=request('id_tipo_documento');
      $paciente_exterior->numero_documento=request('numero_documento');
      $paciente_exterior->email=request('email');
      $paciente_exterior->direcciones_previstas=request('direcciones_previstas');
      $paciente_exterior->comentarios=request('comentarios');
      $paciente_exterior->id_paciente=request('id_paciente');
      $paciente_exterior->save();
      $pacientes = paciente::orderBy('id', 'ASC')->get();
      return view('gob.monitoreoexteriorlist')->with('pacientes', $pacientes);
    }
    public function listapacientesexteriorpdf()
    {
      $pacientes = Paciente::all();       
      $pdf = PDF::loadView('gob.listapacientesexteriorpdf', compact('pacientes'));
        return $pdf->download('listado.pdf');
    }
    public function tarjetapacienteexteriorpdf()
    {
      $id=request('id', '0');
      $paciente = Paciente::find($id);       
      $pdf = PDF::loadView('gob.tarjetapacienteexteriorpdf', compact('paciente'));
        return $pdf->download('listado.pdf');
    }
    /******************************************/
    
}
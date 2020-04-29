<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipo;
use App\coem;
use App\puntos;
use App\paciente;
class MapaController extends Controller
{
  public function CargarMarcadores($id)
  {
    $dato=puntos::where("id_tipo",$id)->get();
    return $dato;
  }

  public function Pagina()
  {
    $coem=coem::orderBy("id","DESC")->first();
    $fumigacion=\DB::table("fumigaciones")->orderby("id","DESC")->first();
    $oficial=\DB::table("datoscovid")->orderby("id","DESC")->first();
    $fumigacion_diaria=\DB::table("fumigacion_diaria")->orderby("id","DESC")->first();
    $canasta=\DB::table("canasta")->orderby("id","DESC")->first();
    $datos=paciente::join("historial","historial.id_paciente","=","paciente.id")
    ->join("estado","estado.id","=","historial.id_estado")
    ->select('paciente.longitud','paciente.latitud','historial.id_estado')
    ->where("historial.habilitado",0)
    ->orderBy("paciente.id")->get();
    $data=array();
    foreach($datos as $dato)
    {
      $dato1=rand (10 , 100 );
      $dato2=rand (10 , 100 );

//return $dato->latitud;
$nuevo1=substr($dato->latitud,0, -3);
$nuevo2=substr($dato->longitud,0, -3);

      $dato1_=$nuevo1.$dato1;
      $dato2_=$nuevo2.$dato2;
//return $dato1_;
      $mes=array("latitud"=>$dato1_,
                  "longitud"=>$dato2_,
                  "estado"=>$dato->id_estado);
      array_push($data,$mes);
    }
      return view('home',compact("coem","data","fumigacion","canasta","fumigacion_diaria","oficial"));
  }
}

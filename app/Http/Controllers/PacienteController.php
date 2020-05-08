<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estado;
use App\paciente;
use App\historial;
use App\enfermedad;
use App\muestra;
use App\arbol;
use App\municipio;
class PacienteController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

    public function index()
    {
      $municipio=municipio::orderBy("id")->get();
      $estado=estado::orderBy("id")->get();
      $enfermedad=enfermedad::orderBy("id")->get();

      /*$datos=paciente::join("historial","historial.id_paciente","=","paciente.id")
      ->join("estado","estado.id","=","historial.id_estado")*/

      $datos=paciente::join("enfermedad","enfermedad.id","=","paciente.id_enfermedad_base")
      ->select('paciente.id', 'paciente.nombre','paciente.vinculo','paciente.edad','paciente.sexo','paciente.fecha_nacimiento',
              'paciente.telefono','paciente.zona','paciente.domicilio','paciente.observaciones','paciente.longitud','paciente.latitud',
              'paciente.id_enfermedad_base','paciente.nacionalidad','paciente.institucion','paciente.grupo_familiar','paciente.fecha_captacion','paciente.fecha_inicio_sintomas',
              'paciente.*',
              //'historial.id_estado','historial.fecha','estado.estado','estado.clase',
              'enfermedad.enfermedad')
      //->where("historial.habilitado",0)
      ->orderBy("paciente.id")->get();
      return view("admin.paciente",compact("estado","datos","enfermedad","municipio"));
    }

    public function GuardaPaciente(Request $request)
    {
      $this->validate($request, [
      'nombre' => 'required',
      ]);
      //return $request->all();
      $dato = new paciente;
      $request['id_usuario']  = \Auth::user()->id;
      $dato->fill($request->all());
      $dato->save();

      $dato2 = new historial;
      $request['fecha']  = date('Y-m-d');
      $request['habilitado']  = 0;
      $request['id_paciente']  = $dato->id;
      $dato2->fill($request->all());
      $dato2->save();
      return redirect('Paciente')->with('success','Se Registro satisfactoriamente');
    }

    public function BuscarPaciente($id)
    {
      $estado=estado::orderBy("id")->get();
      $enfermedad=enfermedad::orderBy("id")->get();
      /*$datos=paciente::join("historial","historial.id_paciente","=","paciente.id")
      ->join("estado","estado.id","=","historial.id_estado")*/
      $datos=paciente::join("enfermedad","enfermedad.id","=","paciente.id_enfermedad_base")
      ->select('paciente.id', 'paciente.nombre','paciente.vinculo','paciente.edad','paciente.sexo','paciente.fecha_nacimiento',
              'paciente.telefono','paciente.zona','paciente.domicilio','paciente.observaciones','paciente.longitud','paciente.latitud',
              'paciente.id_enfermedad_base','paciente.nacionalidad','paciente.institucion','paciente.grupo_familiar','paciente.fecha_captacion','paciente.fecha_inicio_sintomas',
              'paciente.*',
              //'historial.id_estado','historial.fecha','estado.estado',
              'enfermedad.enfermedad')
      ->where("paciente.id",$id)
      ->orderBy("paciente.id")->get();
      return $datos;
    }

      public function ActualizaPaciente(Request $request)
    {

      paciente::find($request->id)->update($request->all());
      return redirect('Paciente')->with('success','Registro actualizado satisfactoriamente');
    }


    public function NuevoHistorial(Request $request)
    {
      $historial= new historial();
      $request['fecha']  = date('Y-m-d');
      $request['habilitado']  = 0;
      $request['id_paciente']  = $request->id_historial;
      $request['id_usuario']  = \Auth::user()->id;
      $historial->fill($request->all());
      $historial->save();
      if($historial)
      {
        historial::where("id","!=",$historial->id)->where("id_paciente",$request->id_historial)->update(["habilitado"=>1]);
        return redirect('Paciente')->with('success','Registro el historial satisfactoriamente');
      }
      else
      return redirect('Paciente')->with('success','No se realizo el registro de historial');

    }

    public function Eliminar__(Request $request)
    {
      puntos::find($request->id_e)->delete();
      return redirect("Puntos")->with("success","Se elimino el registro correctamente");
    }

    public function NuevaMuestra(Request $request)
    {

      $dato = new muestra;
      $request['id_usuario']  = \Auth::user()->id;
      $request['id_paciente']  = $request->id_e;
      $dato->fill($request->all());
      $dato->save();
      return redirect('Paciente')->with('success','Se Registro la muestra satisfactoriamente');
    }

    public function VerHistorial($id)
    {
      $muestra=muestra::where("id_paciente",$id)->select("fecha","observacion as dato1","accion")->get();
      //foreach($muestra as $dato1){ }

      $historial=historial::join("estado","estado.id","=","historial.id_estado")
      ->select("historial.fecha","estado.estado as dato1")
      ->where("id_paciente",$id)
      ->get();

      $results = array_merge($muestra->toArray(), $historial->toArray());
      usort($results, function($a,$b) {
          return $a['fecha'] < $b['fecha'];
      });
      return $results;
    }

    public function BuscarPacienteFamilia($id)
    {
      $dato=paciente::where("grupo_familiar",$id)->orderBy('latitud')->get();
      return $dato;
    }
    public function BuscarPacienteEstado($id)
    {
      // $datos=paciente::join("historial","historial.id_paciente","=","paciente.id")
      // ->join("estado","estado.id","=","historial.id_estado")
      $datos=paciente::join("enfermedad","enfermedad.id","=","paciente.id_enfermedad_base")
      ->select('paciente.grupo_familiar','paciente.longitud','paciente.latitud'
              //'historial.habilitado','estado.estado'
              )
      //->where("historial.habilitado",0)
      ->where("paciente.estado",$id)
      ->orderBy("paciente.latitud")->get();
      return $datos;
    }

    public function Arbol()
    {
      $datos=arbol::join("paciente","paciente.id","=","arbol.id_paciente")->select("paciente.nombre as name","arbol.id","arbol.parent_id")->orderBy("arbol.parent_id")->get();
      foreach($datos as $result)
      {
        $sub_data["id"] = $result->id;
        $sub_data["name"] = $result->name;
        $sub_data["text"] = $result->name;
        $sub_data["parent_id"] = $result->parent_id;
        $data[] = $sub_data;
      }

      foreach($data as $key => &$value)
      {
       $output[$value["id"]] = &$value;
      }
      foreach($data as $key => &$value)
      {
         if($value["parent_id"] && isset($output[$value["parent_id"]]))
         {
          $output[$value["parent_id"]]["nodes"][] = &$value;
         }
      }
      foreach($data as $key => &$value)
      {
         if($value["parent_id"] && isset($output[$value["parent_id"]]))
         {
          unset($data[$key]);
         }
      }
      return json_encode($data);
    }

    public function BuscarArbol($id)
    {
      $arbol=paciente::join("arbol","arbol.id_paciente","=","paciente.id")
                       ->where("arbol.parent_id",$id)->select("paciente.nombre")->get();
      return $arbol;
    }
    public function BuscarArbolPaciente($id)
    {
      $arbol=paciente::join("arbol","arbol.id_paciente","=","paciente.id")->where("paciente.id","!=",$id)->select("paciente.nombre","arbol.id")->get();
      return $arbol;
    }
    public function AsignarArbol(Request $request)
    {
      $dato = new arbol;
      $request['id_usuario']  = \Auth::user()->id;
      $request['id_paciente']  = $request->id_paciente_arbol;
      $dato->fill($request->all());
      $dato->save();
      return redirect('Paciente')->with('success','Se registro al paciente al arbol correctamente');
    }
}

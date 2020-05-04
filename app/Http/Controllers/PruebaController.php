<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Prueba;
use \App\Institucion;
class PruebaController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function index(Request $request){
    $datos = \DB::table('pruebas')->join('paciente', 'pruebas.id_paciente', '=', 'paciente.id')
                                       ->select('pruebas.*', 'paciente.nombre as nombrePaciente')->get();

    $remitentes = Institucion::select("*")->getTipoInstitucion('REMITENTE')->get();
    $destinatarios = Institucion::select("*")->getTipoInstitucion('DESTINATARIO')->get();
    

    if ($request->ajax()) {
      return $datos;
    }else{
      return view('prueba.index', compact('datos', 'remitentes', 'destinatarios'));
    }
  }

  public function store(Request $request){
    $this->validate($request, [
      'id_paciente' => 'required',
      'id_institucions_remitente' => 'required',
      'id_institucions_destinatario' => 'required',
      'temperatura' => 'required',
      'solicitud' => 'required',
      'fecha_envio' => 'required',
      'nombre' => 'required'
    ]);

    $request['id_institucions_remitente'] = explode('|', $request['id_institucions_remitente'])[0];
    $request['id_institucions_destinatario'] = explode('|', $request['id_institucions_destinatario'])[0];

    $dato = new Prueba;
    $dato->fill($request->all());
    $dato->save();
    $id = $dato->id;

    for($i=1; $i<=9; $i++ ) {
      $tubo     = "tubo".$i;
      $cantidad = "cantidad".$i;
      $descrip  = "descripcion".$i;
      echo $request[$tubo];

      if(strlen($request[$tubo])>0){
          $detalle = new \App\Detalle;
          $detalle->id_prueba= $id;
          $detalle->nro_tubos     = $request[$tubo];
          $detalle->cantidad      = $request[$cantidad];
          $detalle->descripcion   = $request[$descrip];
          $detalle->save();
      }else{
        break;
      }
    }
    return redirect('/Prueba')->with('success','Se Registro satisfactoriamente');
  }

  public function show($id){
    $datos = Prueba::Where('id', '=', $id)->get();
    return $datos;
  }

  public function update(Request $request, $id){
    $dato = Prueba::find($id);
    $request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Prueba')->with('success','Se Actualizo satisfactoriamente');;
  }

  public function destroy(Request $request, $id){
    $dato = Prueba::find($request->id_e);
    $dato->delete();
    return redirect('Prueba');
  }

  public function getReporte($id){
    $remitente  = \DB::table('pruebas')->join('institucions', 'pruebas.id_institucions_remitente', '=', 'institucions.id')
                                     ->where('pruebas.id', '=', $id)->first();
    $destinatario = \DB::table('pruebas')->join('institucions', 'pruebas.id_institucions_destinatario', '=', 'institucions.id')
                                     ->where('pruebas.id', '=', $id)->first();
    $dato = Prueba::find($id);
    $detalles = \DB::table('detalles')->where('detalles.id_prueba', '=', $id)->get();

    return view('prueba.laboratorio', compact('dato', 'remitente', 'detalles', 'destinatario'));
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipo;
use App\puntos;
class PuntosController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

    public function index()
    {
      $tipo=tipo::orderBy("nombre_tipo")->get();
      $datos=puntos::join("tipo","tipo.id","=","puntos.id_tipo")
      ->select("puntos.id","puntos.nombre","puntos.responsable","puntos.zona","puntos.direccion","puntos.telefono","puntos.latitud","puntos.longitud","tipo.nombre_tipo")
      ->orderBy("id")->get();
      return view("admin.puntos",compact("tipo","datos"));
    }

    public function GuardaPunto(Request $request)
    {
      $this->validate($request, [
      'nombre' => 'required',
      ]);
      //return $request->all();
      $dato = new puntos;
      $request['id_usuario']  = \Auth::user()->id;
      $dato->fill($request->all());
      $dato->save();
      return redirect('Puntos')->with('success','Se Registro satisfactoriamente');
    }

    public function BuscarPunto($id)
    {
      $datos=puntos::join("tipo","tipo.id","=","puntos.id_tipo")
      ->select("puntos.id","puntos.nombre","puntos.responsable","puntos.zona","puntos.direccion","puntos.telefono","puntos.latitud","puntos.longitud","tipo.nombre_tipo","tipo.id as id_tipo")
      ->where("puntos.id",$id)->get();
      return $datos;
    }

    public function ActualizaPunto(Request $request)
    {
      puntos::find($request->id)->update($request->all());
      return redirect('Puntos')->with('success','Registro actualizado satisfactoriamente');
    }

    public function EliminarPunto(Request $request)
    {
      puntos::find($request->id_e)->delete();
      return redirect("Puntos")->with("success","Se elimino el registro correctamente");
    }


}

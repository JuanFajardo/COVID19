<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estado;
class EstadoController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

    public function index()
    {
      $datos=estado::orderBy("id")->get();
      return view("admin.estado",compact("datos"));
    }

    public function GuardaEstado(Request $request)
    {
      $this->validate($request, [
      'estado' => 'required',
      ]);
      //return $request->all();
      $dato = new estado;
      $request['id_usuario']  = \Auth::user()->id;
      $dato->fill($request->all());
      $dato->save();
      return redirect('Estado')->with('success','Se Registro satisfactoriamente');
    }

    public function BuscarEstado($id)
    {
      $datos=estado::where("id",$id)->get();
      return $datos;
    }

    public function ActualizaEstado(Request $request)
    {
      estado::find($request->id)->update($request->all());
      return redirect('Estado')->with('success','Registro actualizado satisfactoriamente');
    }

    public function EliminarEstado(Request $request)
    {
      estado::find($request->id_e)->delete();
      return redirect("Estado")->with("success","Se elimino el registro correctamente");
    }


}


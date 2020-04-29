<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipo;
class TipoController extends Controller
{
    public function index()
    {
      $datos=tipo::orderBy("id")->get();
      return view("admin.tipo",compact("datos"));
    }
    public function GuardaTipo(Request $request)
    {
      $this->validate($request, [
      'nombre_tipo' => 'required',
      ]);
      $dato = new tipo;
      $request['id_usuario']  = \Auth::user()->id;
      $dato->fill($request->all());
      $dato->save();
      return redirect('Tipo')->with('success','Se Registro satisfactoriamente');
    }

    public function BuscarTipo($id)
    {
      $dato=\DB::table("tipo")->where("id",$id)->get();
      return $dato;
    }

    public function ActualizaTipo(Request $request)
    {
      tipo::find($request->id)->update($request->all());
      return redirect('Tipo')->with('success','Registro actualizado satisfactoriamente');
    }

    public function EliminarTipo(Request $request)
    {
      tipo::find($request->id_e)->delete();
      return redirect("Tipo")->with("success","Se elimino el registro correctamente");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fumigacion;
class FumigacionController extends Controller
{
  public function index()
  {
    $datos=fumigacion::orderBy("id","DESC")->get();
    return view("admin.fumigacion",compact("datos"));
  }
  public function GuardaFumigacion(Request $request)
  {

    $id=\Auth::user()->id;
    $en=date('Y-M-d-H-i-s').$id;
    //return $request->imagen;
    $file = $request->file('imagen_');
    $name = md5($en) . '.' . $file->getClientOriginalExtension();
    $request->file('imagen_')->move("fotos", $name);

    $file = $request->file('archivo_');
    $archivo = md5($en) . '.' . $file->getClientOriginalExtension();
    $request->file('archivo_')->move("archivo", $archivo);
    $dato = new fumigacion;
    $request['imagen']=$name;
    $request['archivo']=$archivo;
    $request['id_usuario']  = \Auth::user()->id;
    $request['estado']=0;
    $request['imagen']=$name;
    $request['archivo']=$archivo;
    $dato->fill($request->all());
    $dato->save();
    return redirect('Fumigacion')->with('success','Se Registro satisfactoriamente');
  }

  public function BuscarFumigacion($id)
  {
    $dato=\DB::table("tipo")->where("id",$id)->get();
    return $dato;
  }

  public function ActualizaFumigacion(Request $request)
  {
    tipo::find($request->id)->update($request->all());
    return redirect('Tipo')->with('success','Registro actualizado satisfactoriamente');
  }

  public function EliminarFumigacion(Request $request)
  {
    tipo::find($request->id_e)->delete();
    return redirect("Tipo")->with("success","Se elimino el registro correctamente");
  }

}

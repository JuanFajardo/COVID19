<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\enfermedad;
class EnfermedadController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

    public function index()
    {
      $datos=enfermedad::orderBy("id")->get();
      return view("admin.enfermedad",compact("datos"));
    }

    public function GuardaEnfermedad(Request $request)
    {
      $this->validate($request, [
      'enfermedad' => 'required',
      ]);
      //return $request->all();
      $dato = new enfermedad;
      $request['id_usuario']  = \Auth::user()->id;
      $dato->fill($request->all());
      $dato->save();
      return redirect('Enfermedad')->with('success','Se Registro satisfactoriamente');
    }

    public function BuscarEnfermedad($id)
    {
      $datos=enfermedad::where("id",$id)->get();
      return $datos;
    }

    public function ActualizaEnfermedad(Request $request)
    {
      enfermedad::find($request->id)->update($request->all());
      return redirect('Enfermedad')->with('success','Registro actualizado satisfactoriamente');
    }

    public function EliminarEnfermedad(Request $request)
    {
      enfermedad::find($request->id_e)->delete();
      return redirect("Enfermedad")->with("success","Se elimino el registro correctamente");
    }

}


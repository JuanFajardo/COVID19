<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Institucion;

class InstitucionController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }

  public function index(Request $request){
    $datos = Institucion::all();
    if ($request->ajax()) {
      return $datos;
    }else{
      return view('institucion.index', compact('datos'));
    }
  }

  public function store(Request $request){
    $this->validate($request, [
    'nombre' => 'required',
    'telefono' => 'required',
    'institucion' => 'required',
    'tipo' => 'required',
    'localidad' => 'required'
    ]);
    $dato = new Institucion;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Institucion')->with('success','Se Registro satisfactoriamente');;
  }

  public function show($id){
    $datos = Institucion::Where('id', '=', $id)->get();
    return $datos;
  }

  public function update(Request $request, $id){
    $dato = Institucion::find($request->id);
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Institucion')->with('success','Se Actualizo satisfactoriamente');;
  }

  public function destroy(Request $request, $id){
    $dato = Institucion::find($request->id_e);
    $dato->delete();
    return redirect('/Institucion');
  }

}

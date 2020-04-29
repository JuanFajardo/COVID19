<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\estado;
use App\paciente;
use App\municipio;

class MunicipioController extends Controller
{
      public function index()
    {
     $datos=municipio::orderBy("id")->get();
     return view("admin.municipio",compact("datos"));
    }
    public function GuardaMunicipio(Request $request)
    {
     $this->validate($request, [
     'municipio' => 'required',
     ]);
     $dato = new municipio;
     $request['id_usuario']  = \Auth::user()->id;
     $request['id_provincia']  = 1;
     $dato->fill($request->all());
     $dato->save();
     return redirect('Municipio')->with('success','Se Registro satisfactoriamente');
    }

    public function BuscarMunicipio($id)
    {
     $dato=\DB::table("municipio")->where("id",$id)->get();
     return $dato;
    }

    public function ActualizaMunicipio(Request $request)
    {
     municipio::find($request->id)->update($request->all());
     return redirect('Municipio')->with('success','Registro actualizado satisfactoriamente');
    }

    public function EliminarMunicipio(Request $request)
    {
    _municipio::find($request->id_e)->delete();
     return redirect("Tipo")->with("success","Se elimino el registro correctamente");
    }
    public function BuscarDatosGrafico($id)
    {
      /*$datos = \DB::table('paciente')
                ->join("historial","historial.id_paciente","=","paciente.id")
                ->join("estado","historial.id_estado","=","estado.id")
                ->join("municipio","municipio.id","=","paciente.id_municipio")
                ->where("municipio.id",$id)
                ->select('estado.estado', \DB::raw('count(*) as total'))
                ->groupBy('estado.estado')
                ->get();
                */
        $datos = estado::whereIn("id",[2,1,6,3])->get();
        $grafico=array();
        foreach($datos as $data)
        {
          $opcion=paciente::join("municipio","municipio.id","=","paciente.id_municipio")
          ->join("historial","historial.id_paciente","=","paciente.id")
          ->join("estado","historial.id_estado","=","estado.id")
          ->where("estado.id",$data->id)
          ->where("municipio.id",$id)
          ->where("historial.habilitado",0)
          ->count();
          $add=array(
                    "country"=>$data->estado,
                    "value"=>$opcion
                    );
          array_push($grafico,$add);
        }
        return $grafico;
    }
}

@extends('layouts.app')

@section('menu2')class="active"@endsection
@section('submenu23')class="active"@endsection

@section('ruta')
<style>.modal-xl {
    max-width: 95% !important;


}</style>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-6">
        <h2>Pacientes</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{asset('index.php/Tipo')}}">Lista de Pacientes </a>
                 - Ver Arbol de contagios
                  <button class='btn btn-primary btn-sm' onclick="Arbol()">
                    <span class="fa fa-eye" aria-hidden="true"></span>
                  </button>
            </li>
        </ol>
    </div>
    <div class="col-lg-6">

      @if (count($errors) > 0)
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif

      @if(Session::has('success'))
      <div class="alert alert-info">
        {{Session::get('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
    </div>
</div>
@endsection

@section('contenido')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
<a href="#Nuevo" data-toggle="modal" class="config"><button class='btn btn-primary dim'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo Paciente</button></a>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">

                <div class="table-responsive">
            <table class="table table-bordered table-hover dataTables-example" >
            <thead>
            <tr>
              <th>Paciente</th>
              <th>Direccion</th>
              <th>Encuestador</th>
              <th>Familia</th>
              <th>Estado</th>
              <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
              @foreach($datos as $dato)
            <tr class="gradeC">
              <td onClick="VerMapaPaciente({{$dato->id}})">{{$dato->nombre}} {{$dato->paterno}} {{$dato->materno}}<br> <small>{{$dato->globalid}} </small> </td>
              <td>{{$dato->domicilio}} <br> <small>{{$dato->zona}}</small> </td>
              <td> <small><b>{{$dato->encuestador_telefono}}</b></small>  {{$dato->encuestador}}  <br> <small>{{$dato->encuestador_observacion}}</small> </td>

              <td onClick="VerMapaDetalle('{{$dato->grupo_familiar}}',1)">{{$dato->grupo_familiar}}</td>
              @foreach($estado as $est)
              @if($est->estado == $dato->estado)
                <td onClick="VerMapaDetalle('{{$dato->estado}}',2)" class="{{$est->clase}}">{{$dato->estado}}</td>
              @endif
              @endforeach

              <td>
                <button class="btn btn-info dim" type="button" id="{{$dato->id}}" onclick="Editar(this.id)" data-toggle="tooltip" data-placement="top" title="Editar">
                  <i class="fa fa-edit"></i>
                </button>
                <button class="btn btn-danger dim" type="button" id="{{$dato->id}}" onclick="Eliminar(this.id)" data-toggle="tooltip" data-placement="top" title="Actualizar / Agregar">
                  <i class="fa fa-list-ul"></i>
                </button>
                <button class="btn btn-success dim" type="button" id="{{$dato->id}}" onclick="Estado(this.id)" data-toggle="tooltip" data-placement="top" title="Actulizar Estado">
                  <i class="fa fa-medkit"></i>
                </button>
                <button class="btn btn-warning dim" type="button" id="{{$dato->id}}" onclick="Historial(this.id)" data-toggle="tooltip" data-placement="top" title="Historial">
                  <i class="fa fa-folder-open"></i>
                </button>
                <button class="btn btn-primary dim" type="button" id="{{$dato->id}}" onclick="AsignarArbol(this.id)" data-toggle="tooltip" data-placement="top" title="Agregar Arbol">
                  <i class="fa fa-sitemap"></i>
                </button>
                <a href="{{asset('index.php/Laboratorio?paciente='.$dato->id)}}" class="btn btn-danger dim"  data-toggle="tooltip" data-placement="top" title="Prueba de Laboratorio">
                  <i class="fa fa-eyedropper"></i>
                </a>
              </td>
            </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>Paciente</th>
              <th>Direccion</th>
              <th>Encuestador</th>
              <th>Familia</th>
              <th>Estado</th>
              <th>Opciones</th>
              </tr>
            </tfoot>
            </table>
          </div>
          </div>
        </div>
    </div>
    </div>
</div>
@endsection

@section('modal')
<div class="modal fade" id="Nuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content panel-primary">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Nuevo Tipo</h4>
            </div>
            <div class="modal-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/GuardaPaciente') }}" autocomplete="off">
          {{ csrf_field() }}
            <table class="table">
              <tr>
                <td>Nombre</td>
                <td><input type="text" name="nombre" class='form-control' required></td>
              </tr>
              <tr>
                <td>Vinculo</td>
                <td><input type="text" name="vinculo" class='form-control' required></td>
              </tr>
              <tr>
                <td>Edad</td>
                  <td><input type="number" name="edad" class='form-control' required></td>
              </tr>
              <tr>
                <td>Fecha Nacimiento</td>
                <td><input type="date" name="fecha_nacimiento" class='form-control' required></td>
              </tr>

            <tr>
              <td>Municipio</td>
              <td>
                  <select name="id_municipio" class="form-control">
                    @foreach($municipio as $datam)
                    <option value="{{$datam->id}}">{{$datam->municipio}}</option>
                    @endforeach
                  </select>
              </td>
            </tr>

              <tr>
                <td>Sexo</td>
                <td>
                  <select name="sexo" class='form-control' required>
                    <option>M</option>
                    <option>F</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Telefono</td>
                <td><input type="number" name="telefono" class='form-control' required></td>
              </tr>
              <tr>
                <td>Zona</td>
                <td><input type="text" name="zona" class='form-control' required></td>
              </tr>
              <tr>
                <td>Domicilio</td>
                <td><input type="text" name="domicilio" class='form-control' required></td>
              </tr>
              <tr>
                <td>Observaciones</td>
                <td><input type="text" name="observaciones" class='form-control' required></td>
              </tr>
              <tr>
                <td>Estado</td>
                <td>
                    <select name="id_estado" class="form-control">
                      @foreach($estado as $data)
                      <option value="{{$data->id}}">{{$data->estado}}</option>
                      @endforeach
                    </select>
                </td>
              </tr>
              <tr>
              <td>Enfermedad Base</td>
              <td>
                <select name="id_enfermedad_base" class="form-control">
                  @foreach($enfermedad as $data1)
                  <option value="{{$data1->id}}">{{$data1->enfermedad}}</option>
                  @endforeach
                </select>
              </td>
              </tr>
              <tr>
              <td>Nacionalidad</td>
              <td><input type="text" class="form-control" name="nacionalidad"></td>
              </tr>
              <tr>
              <td>Institucion</td>
              <td><input type="text" class="form-control" name="institucion"></td>
              </tr>
              <tr>
              <td>Grupo Familiar</td>
              <td><input type="text" class="form-control" name="grupo_familiar"></td>
              </tr>
              <tr>
              <td>Fecha Captacion</td>
              <td><input type="date" class="form-control" name="fecha_captacion"></td>
              </tr>
              <tr>
              <td>Fecha inicio de sintomas</td>
              <td><input type="date" class="form-control" name="fecha_inicio_sintomas"></td>
              </tr>
              <input type="hidden" name="latitud" id="latitud" class='form-control' required>
              <input type="hidden" name="longitud" id="longitud" class='form-control' required>
              <tr>
                <td>Abrir Mapa</td>
                <td>
                  <a href="#Mapa" onclick="Cambio(1)" data-toggle="modal" class="config"><button class='btn btn-info dim'><span class="fa fa-map-marker" aria-hidden="true"></span> Cargar Mapa</button></a>
              </td>
              </tr>
              <tr>
                <td></td>
                <td><input type="submit" name="ejecutar" class='btn btn-primary' value="Registrar"></td>
              </tr>
            </table>
          </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="Editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content panel-primary">
            <div class="modal-header panel-heading">
              <h4 class="modal-title">Editar Paciente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/ActualizaPaciente') }}" autocomplete="off">
          {{ csrf_field() }}
          <table class="table">
            <tr>
              <td>Nombre</td>
              <td><input type="text" name="nombre" id="nombre" class='form-control' required></td>
            </tr>
            <tr>
              <td>Vinculo</td>
              <td><input type="text" name="vinculo" id="vinculo" class='form-control' required></td>
            </tr>
            <tr>
              <td>Edad</td>
                <td><input type="number" name="edad" id="edad" class='form-control' required></td>
            </tr>
            <tr>
              <td>Fecha Nacimiento</td>
              <td><input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class='form-control' required></td>
            </tr>

            <tr>
              <td>Municipio</td>
              <td>
                  <select name="id_municipio" class="form-control">
                    @foreach($municipio as $datam)
                    <option value="{{$datam->id}}">{{$datam->municipio}}</option>
                    @endforeach
                  </select>
              </td>
            </tr>

            <tr>
              <td>Sexo</td>
              <td>
                <select name="sexo" id="sexo" class='form-control' required>
                  <option>M</option>
                  <option>F</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Telefono</td>
              <td><input type="number" name="telefono" id="telefono" class='form-control' required></td>
            </tr>
            <tr>
              <td>Zona</td>
              <td><input type="text" name="zona" id="zona" class='form-control' required></td>
            </tr>
            <tr>
              <td>Domicilio</td>
              <td><input type="text" name="domicilio" id="domicilio" class='form-control' required></td>
            </tr>
            <tr>
              <td>Observaciones</td>
              <td><input type="text" name="observaciones" id="observaciones" class='form-control' required></td>
            </tr>
            <tr>
            <td>Enfermedad Base</td>
            <td>
              <select name="id_enfermedad_base" id="id_enfermedad_base" class="form-control">
                @foreach($enfermedad as $datas)
                <option value="{{$datas->id}}">{{$datas->enfermedad}}</option>
                @endforeach
              </select>
            </td>
            </tr>
            <tr>
            <td>Nacionalidad</td>
            <td><input type="text" class="form-control" name="nacionalidad" id="nacionalidad"></td>
            </tr>
            <tr>
            <td>Institucion</td>
            <td><input type="text" class="form-control" name="institucion" id="institucion"></td>
            </tr>
            <tr>
            <td>Grupo Familiar</td>
            <td><input type="text" class="form-control" name="grupo_familiar" id="grupo_familiar"></td>
            </tr>
            <tr>
            <td>Fecha Captacion</td>
            <td><input type="date" class="form-control" name="fecha_captacion" id="fecha_captacion"></td>
            </tr>
            <tr>
            <td>Fecha inicio de sintomas</td>
            <td><input type="date" class="form-control" name="fecha_inicio_sintomas" id="fecha_inicio_sintomas"></td>
            </tr>
            <input type="hidden" name="latitud" id="latitud_" class='form-control' required>
            <input type="hidden" name="longitud" id="longitud_" class='form-control' required>
            <input type="hidden" name="id" id="id" class='form-control' required>
            <tr>
              <td>Abrir Mapa</td>
              <td>
                <a href="#Mapa" onclick="Cambio(1)" data-toggle="modal" class="config"><button class='btn btn-info dim'><span class="fa fa-map-marker" aria-hidden="true"></span> Cargar Mapa</button></a>
            </td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="ejecutar" class='btn btn-primary' value="Registrar"></td>
            </tr>
          </table>
          </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div id="Eliminar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content panel-success">
      <div class="modal-header panel-heading">
        <h4 class="modal-title" id="myModalLabel">Actualizar o ingresar dato <span id="nombre_muestra" class="label label-info"></span></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/NuevaMuestra') }}" autocomplete="off">
          {{ csrf_field() }}
          <table class="table table-bordered">
            <tr>
              <td>Fecha</td>
              <td>
                <input type="date" name="fecha" class="form-control" required>
              </td>
            </tr>
            <tr>
              <td>Accion</td>
              <td>
                <select name="accion" class="form-control">
                  <option>--/--</option>
                  <option>MUESTRA</option>
                  <option>CAMBIO DE UBICACION</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Observacion</td>
              <td>
                <textarea class="form-control" name="observacion" required></textarea>
              </td>
            </tr>
            <tr>
              <td><input type="hidden" name="id_e" id="id_e"></td>
              <td><input type="submit" name="ejecutar" class='btn btn-primary' value="Registrar Muestra"></td>
            </tr>
          </table>
        </form>
      </div>
      <div class="modal-footer">
        ...
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="Mapa" tabindex="-0" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content panel-danger">
            <div class="modal-header panel-heading">
              <h4 class="modal-title" id="Mapa">Mapa </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <div id="mapa" style="width:100%; height:750px;"></div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>



<div id="ActualizaEstado" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content panel-success">
      <div class="modal-header panel-heading">
        <h4 class="modal-title" id="myModalLabel">Actualizar historial de <span id="nombre_historial" class="label label-info"></span></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/NuevoHistorial') }}" autocomplete="off">
          {{ csrf_field() }}
          <table class="table table-bordered">
            <tr>
              <td>Estado</td>
              <td>
                <select name="id_estado" class="form-control">
                  @foreach($estado as $estadoh)
                  <option value="{{$estadoh->id}}">{{$estadoh->estado}}</option>
                  @endforeach
              </select>
              </td>
            </tr>
            <tr>
              <td><input type="hidden" name="id_historial" id="id_historial"></td>
              <td><input type="submit" name="ejecutar" class='btn btn-primary' value="Registrar Historial"></td>
            </tr>
          </table>
        </form>
      </div>
      <div class="modal-footer">
        ...
      </div>
    </div>
  </div>
</div>


<div id="HistorialVer" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content panel-success">
      <div class="modal-header panel-heading">
        <h4 class="modal-title" id="myModalLabel">Historial de  <span id="nombre_historial_ver" class="label label-info"></span></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="ibox ">
          <div class="ibox-title">
              <h5>Linea de tiempo</h5>
          </div>
          <div id="CargarDato"></div>
        </div>
      </div>
    </div>
  </div>
</div>



<div id="VerMapaPaciente" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content panel-success">
      <div class="modal-header panel-heading">
        <h4 class="modal-title" id="myModalLabel"> <span id="nombre_paciente" class="label label-info"></span></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="mapaPaciente" style="width:100%; height:80vh;"></div>
      </div>
    </div>
  </div>
</div>

<div id="Arbol" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content panel-success">
      <div class="modal-header panel-heading">
        <h4 class="modal-title" id="myModalLabel"> Arbol de Contagios</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="treeview"></div>
      </div>
    </div>
  </div>
</div>



<div id="errorArbol" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content panel-success">
      <div class="modal-header panel-heading">
        <h4 class="modal-title" id="myModalLabel">Error</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger"><center>La persona ya tiene un registro en el arbol, tambien tiene dependientes por el cual no se puede actualizar o eliminar:</center></div>
        <b>Dependientes</b>:<center><div id="errorArbolDatos"></div></center>
      </div>
    </div>
  </div>
</div>

<div id="ArbolForm" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content panel-success">
      <div class="modal-header panel-heading">
        <h4 class="modal-title" id="myModalLabel">Ingresar Nodo arbol</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/AsignarArbol') }}" autocomplete="off">
          {{ csrf_field() }}
          <table class="table table-bordered">
            <tr>
              <td>Seleccione opcion</td>
              <td>
                <div id="habilitado"></div>
              </td>
            </tr>
            <tr>
              <td><input type="hidden" name="id_paciente_arbol" id="id_paciente_arbol"></td>
              <td><input type="submit" name="ejecutar" class='btn btn-primary' value="Registrar Arbol"></td>
            </tr>
          </table>
        </form>

      </div>
    </div>
  </div>
</div>

@endsection

@section('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWfhkbkuAlTm08GKlCAUcINKqXUSTdzqE&callback=initMap" async defer></script>
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


function AsignarArbol(id)
{
  //alert(id)
  url='{{asset("/index.php/BuscarArbol")}}/'+id;
  $.getJSON(url, null, function(data) {
      if(data.length>0)
      {
          $.each(data, function(field, e)
          {
              $('#errorArbolDatos').html(e.nombre+"<br>");
          });
        $("#errorArbol").modal('show');
       }
       else
       {
         $("#habilitado").html('');
         url='{{asset("/index.php/BuscarArbolPaciente")}}/'+id;
         html='';
         html+='<select name="parent_id" class="form-control">';
         html+='<option value="0">Paciente Raiz</option>';
         $.getJSON(url, null, function(data) {
             if(data.length>0)
             {
                 $.each(data, function(field, e)
                 {
                    html+='<option value="'+e.id+'">'+e.nombre+'</option>';
                 });
              }
              html+='</select>';
              $("#habilitado").html(html);
              $("#id_paciente_arbol").val(id);
               $("#ArbolForm").modal('show');
          });
       }
   });

}

function Arbol()
{
  url='{{asset("/index.php/Arbol")}}'
  $.getJSON(url, null, function(data) {
        if(data.length>0)
        {
          //alert(data)
          $('#treeview').treeview({
            levels: 1,
            color: "#428bca",
            borderColor:"428bca",
            data: data
          });

        }
        else
        alert('no se encontro ningun resultado')
    });

  $("#Arbol").modal('show');
}


function VerMapaPaciente(id)
{
   url='{{asset("/index.php/BuscarPaciente")}}/'+id
 $.getJSON(url, null, function(data) {
     if(data.length>0)
     {
       var i=0;
         $.each(data, function(field, e)
         {
            myLatlng = new google.maps.LatLng(e.latitud,e.longitud);
            var mapOptions = {
              zoom: 15,
              center: myLatlng,
             //mapTypeId: google.maps.MapTypeId.SATELLITE,
             styles: [
             {
               featureType: 'poi.business',
               "stylers": [{ "visibility": "off" }]
             },
             {
               featureType: 'administrative.locality',
               elementType: 'labels.text.fill',
               "stylers": [{ "visibility": "off" }]
             }
             ]
           }

             var map = new google.maps.Map(document.getElementById("mapaPaciente"), mapOptions);
  				 coordenadas = new google.maps.LatLng(e.latitud, e.longitud);
  				 var marker = new google.maps.Marker({
  					position: coordenadas,
  					draggable: false,
  					map: map
  					});
            $("#nombre_paciente").html('Mapa Personal de '+e.nombre);

         });
         $("#VerMapaPaciente").modal('show');
     }else alert('no se encontro ningun resultado')
  });
}


function VerMapaDetalle(id,opt)
{
  if(id=="")
  id="-1";
   url=(opt==1)?'{{asset("/index.php/BuscarPacienteFamilia")}}/'+id:'{{asset("/index.php/BuscarPacienteEstado")}}/'+id;
   myLatlng = new google.maps.LatLng(-19.57861330496016,-65.76237916946411);
   var mapOptions = {
     zoom: 15,
     center: myLatlng,
    //mapTypeId: google.maps.MapTypeId.SATELLITE,
    styles: [
    {
      featureType: 'poi.business',
      "stylers": [{ "visibility": "off" }]
    },
    {
      featureType: 'administrative.locality',
      elementType: 'labels.text.fill',
      "stylers": [{ "visibility": "off" }]
    }


    ]
  }

    var map = new google.maps.Map(document.getElementById("mapaPaciente"), mapOptions);

 $.getJSON(url, null, function(data) {
     if(data.length>0)
     {
       var i=0;
       var numero=0
       flag=true;
         $.each(data, function(field, e)
         {
           if(flag)
           {
          anterior=e.latitud;
           }


           if(e.latitud==anterior)
           {
            flag=false;
            numero=++i;
            anterior=e.latitud;
           }
           else {
             i=1;numero=i;
             anterior=e.latitud;
           }

  				 coordenadas = new google.maps.LatLng(e.latitud, e.longitud);
  				 var marker = new google.maps.Marker({
  					position: coordenadas,
            zIndex:i*10,
  					draggable: false,
  					map: map,
            label:{text:''+numero, color:'white'}
  					});

            (opt==1)?$("#nombre_paciente").html('Mapa del grupo familiar: '+e.grupo_familiar):$("#nombre_paciente").html('Mapa de estados: '+e.estado);


         });
         $("#VerMapaPaciente").modal('show');
     }else alert('no se encontro ningun resultado')
  });
}

$(document).ready(function(){
    $('.dataTables-example').DataTable({
        pageLength: 25,
        responsive: true,
        "language": {
    "bDeferRender": true,
    "sEmtpyTable": "No ay registros",
    "decimal": ",",
    "thousands": ".",
    "lengthMenu": "Mostrar _MENU_ datos por registros",
    "zeroRecords": "No se encontro nada,  lo siento",
    "info": "Mostrar paginas [_PAGE_] de [_PAGES_]",
    "infoEmpty": "No ay entradas permitidas",
    "search": "Buscar ",
    "infoFiltered": "(Busqueda de _MAX_ registros en total)",
    "oPaginate":{
        "sLast":"Final",
        "sFirst":"Principio",
        "sNext":"Siguiente",
        "sPrevious":"Anterior"
    }
},
        dom: '<"html5buttons"B>lTfgitp',
        buttons: [
            {extend: 'csv'},
            {extend: 'excel', title: 'ListaExcel'},
            {extend: 'pdf', title: 'ListaPDF'},

            {extend: 'print',
             customize: function (win){
                    $(win.document.body).addClass('white-bg');
                    $(win.document.body).css('font-size', '10px');

                    $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
            }
            }
        ]

    });

});

function Editar(id)
{
  url  = '{{ asset("/index.php/BuscarPaciente")}}/'+id;
 $.getJSON(url, null, function(data) {
     if(data.length>0)
     {
         $.each(data, function(field, e)
         {
           //alert(e.id_enfermedad_base)
             $('#nombre').val(e.nombre);
             $('#vinculo').val(e.vinculo);
             $('#edad').val(e.edad);
             $('#fecha_nacimiento').val(e.fecha_nacimiento);
             $('#sexo').val(e.sexo);
             $('#telefono').val(e.telefono);
             $('#zona').val(e.zona);
             $('#domicilio').val(e.domicilio);
             $('#observaciones').val(e.observaciones);
             $('#latitud_').val(e.latitud);
             $('#longitud_').val(e.longitud);
             $('#id').val(e.id);
             $('#id_enfermedad_base option[value='+e.id_enfermedad_base+']').prop('selected', true);
             $('#nacionalidad').val(e.nacionalidad);
             $('#institucion').val(e.institucion);
             $('#grupo_familiar').val(e.grupo_familiar);
             $('#fecha_captacion').val(e.fecha_captacion);
             $('#fecha_inicio_sintomas').val(e.fecha_inicio_sintomas);
         });
         $("#Editar").modal('show');
     }
 });
}

function Estado(id)
{
  url  = '{{ asset("/index.php/BuscarPaciente")}}/'+id;
 $.getJSON(url, null, function(data) {
     if(data.length>0)
     {
         $.each(data, function(field, e)
         {
             $('#nombre_historial').html(e.nombre);
             $('#id_historial').val(e.id);
         });
      }
  $("#ActualizaEstado").modal('show');
  });
}


function Eliminar(id)
{
  url  = '{{ asset("/index.php/BuscarPaciente")}}/'+id;
 $.getJSON(url, null, function(data) {
     if(data.length>0)
     {
         $.each(data, function(field, e)
         {
             $('#nombre_muestra').html(e.nombre);
             $('#id_e').val(e.id);
         });
      }

  $("#Eliminar").modal('show');
  });
}


function Historial(id)
{
  url  = '{{ asset("/index.php/BuscarPaciente")}}/'+id;
 $.getJSON(url, null, function(data) {
     if(data.length>0)
     {
         $.each(data, function(field, e)
         {
             $('#nombre_historial_ver').html(e.nombre);
             $('#id_e').val(e.id);
         });
      }
  });






  url  = '{{ asset("/index.php/VerHistorial")}}/'+id;
  $("#CargarDato").html('');
  html='';
 $.getJSON(url, null, function(data) {
     if(data.length>0)
     {
       var x=0;y=0;z=0;
         $.each(data, function(field, e)
         {
moment.locale('es');
var tiempo = moment(e.fecha, "YYYY-MM-DD").fromNow();
var literal = moment(e.fecha, "YYYY-MM-DD");
literal.locale(false);
fech=literal.format('LL');
           html+='<div class="ibox-content inspinia-timeline">';
           html+='<div class="timeline-item">';
                   html+='<div class="row">';
                       html+='<div class="col-3 date">';
                           html+='<i class="fa fa-history"></i>';
                           html+=fech+'<br>';
                           html+='<small class="text-navy">'+tiempo+'</small>';
                       html+='</div>';
                       html+='<div class="col-7 content">';
                       if(e.accion=="MUESTRA")
                       {
                         if(x==0)
                         {
                           html+='<p class="m-b-xs"><strong class="label label-warning">Ultima toma de Muestra</strong></p>';
                           x++;
                         }
                         else
                         html+='<p class="m-b-xs"><strong>Nueva Muestra</strong></p>';
                       }
                       else
                       {
                         if(e.accion=="CAMBIO DE UBICACION")
                         {
                           if(y==0)
                           {
                              html+='<p class="m-b-xs"><strong class="label label-success">Ultimo Ubicacion Paciente</strong></p>';
                              y++;
                           }
                           else
                           html+='<p class="m-b-xs"><strong>Cambio de Ubicacion Paciente</strong></p>';
                         }
                         else
                         {
                           if(z==0)
                           {
                             html+='<p class="m-b-xs"><strong class="label label-danger">Ultimo Estado Paciente</strong></p>';
                             z++;
                           }
                           else
                           html+='<p class="m-b-xs"><strong>Cambio de Estado Paciente</strong></p>';
                         }
                       }
                       html+='<p>'+e.dato1+'</p>';
                       html+='</div>';
                   html+='</div>';
               html+='</div>';
           html+='</div>';


         });
         $("#CargarDato").html(html);
      }
  $("#HistorialVer").modal('show');
  });
}

// cargarMapa();
var map;
var flag=true;
var marcador1 = [];
function initMap()
{
  myLatlng = new google.maps.LatLng(-19.57861330496016,-65.76237916946411);
 var mapOptions = {
   zoom: 18,
   center: myLatlng,
  styles: [
  {
    featureType: 'poi.business',
    "stylers": [{ "visibility": "off" }]
  },
  {
    featureType: 'administrative.locality',
    elementType: 'labels.text.fill',
    "stylers": [{ "visibility": "off" }]
  }
  ]
}

  var map = new google.maps.Map(document.getElementById("mapa"), mapOptions);
  var geocoder = new google.maps.Geocoder();


  google.maps.event.addListener(map, 'click', function(event) {




   if(!flag)
   {
     marcador1[0].setMap(null);
     marcador1.length = 0
     flag=true;
   }
   if(flag)
   {
   var latitud = event.latLng.lat();
   var longitud = event.latLng.lng();
   if(opcion==1)
   {
     document.getElementById("latitud").value = latitud;
     document.getElementById("longitud").value = longitud;
   }
   else {
     document.getElementById("latitud_").value = latitud;
     document.getElementById("longitud_").value = longitud;
   }


     var coordenadas = new google.maps.LatLng(latitud, longitud); /* Debo crear un punto geografico utilizando google.maps.LatLng */
     /*Pone el marcador*/
   var marcador = new google.maps.Marker({
       position: coordenadas,
       draggable: false,
       map: map,
       animation: google.maps.Animation.DROP,
       title:"Nuevo Punto",
         });
   marcador1.push(marcador);
   flag=false;
   }



   /*geocoder.geocode({
      'latLng': event.latLng
    }, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        if (results[0]) {
          alert(results[0].formatted_address);
        }
      }
    });
*/


   });

}

$('#Mapa').on('hidden.bs.modal', function () {
  $("#Nuevo").modal('show');
});
var opcion=0;
function Cambio(dato)
{
$("#Nuevo").modal('hide');
  opcion=dato;
}

</script>
@endsection

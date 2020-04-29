@extends('layouts.app')

@section('ruta')
<style>.modal-xl {
    max-width: 95% !important;
}</style>


<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-6">
        <h2>Puntos</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{asset('index.php/Tipo')}}">Lista de Puntos</a>
            </li>
        </ol>
    </div>
    <div class="col-lg-6">
<br>
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
<a href="#Nuevo" data-toggle="modal" class="config"><button class='btn btn-primary dim'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo Punto</button></a>
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
                <th>#</th>
                <th>Nombre</th>
                <th>Responsable</th>
                <th>Zona</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Tipo</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
              <?php $i=1;?>
              @foreach($datos as $dato)
            <tr class="gradeC">
              <td><?php echo $i++;?></td>
              <td>{{$dato->nombre}}</td>
              <td>{{$dato->responsable}}</td>
              <td>{{$dato->zona}}</td>
              <td>{{$dato->direccion}}</td>
              <td>{{$dato->telefono}}</td>
              <td>{{$dato->nombre_tipo}}</td>
              <td>
<button class="btn btn-warning dim" type="button" id="{{$dato->id}}" onclick="Editar(this.id)"><i class="fa fa-edit"></i></button>
<button class="btn btn-danger dim" type="button" id="{{$dato->id}}" onclick="Eliminar(this.id)"><i class="fa fa-trash-o"></i></button></a>
              </td>
            </tr>
            @endforeach
            </tbody>
            <?php if($i>5){?>
            <tfoot>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Responsable</th>
              <th>Zona</th>
              <th>Direccion</th>
              <th>Telefono</th>
              <th>Tipo</th>
              <th>Opciones</th>
            </tr>
            </tfoot>
          <?php }?>
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
              <h4 class="modal-title">Nuevo Tipo</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

            </div>
            <div class="modal-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/GuardaPunto') }}" autocomplete="off">
          {{ csrf_field() }}
            <table class="table">
              <tr>
                <td>Tipo</td>
                <td>
                  <select name="id_tipo" class="form-control">
                    @foreach($tipo as $dato1)
                    <option value="{{$dato1->id}}">{{$dato1->nombre_tipo}}</option>
                    @endforeach
                    </select>
                </td>
              </tr>
              <tr>
                <td>Nombre</td>
                <td><input type="text" name="nombre" class='form-control' required></td>
              </tr>
              <tr>
                <td>Responsable</td>
                <td><input type="text" name="responsable" class='form-control' required></td>
              </tr>
              <tr>
                <td>Zona</td>
                <td><input type="text" name="zona" class='form-control' required></td>
              </tr>
              <tr>
                <td>Direccion</td>
                <td><input type="text" name="direccion" class='form-control' required></td>
              </tr>
              <tr>
                <td>Telefono</td>
                <td><input type="text" name="telefono" class='form-control' required></td>
              </tr>
              <tr>
                <td>Latitud</td>
                <td><input type="text" name="latitud" id="latitud" class='form-control' required></td>
              </tr>
              <tr>
                <td>Longitud</td>
                <td><input type="text" name="longitud" id="longitud" class='form-control' required></td>
              </tr>
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
        <div class="modal-content panel-warning">
            <div class="modal-header panel-heading">
              <h4 class="modal-title">Actualizar Punto</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

            </div>
            <div class="modal-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/ActualizaPunto') }}" autocomplete="off">
          {{ csrf_field() }}
          <table class="table">
            <tr>
              <td>Tipo</td>
              <td>
                <select name="id_tipo" id="id_tipo" class="form-control">
                  @foreach($tipo as $dato1)
                  <option value="{{$dato1->id}}">{{$dato1->nombre_tipo}}</option>
                  @endforeach
                  </select>
              </td>
            </tr>
            <tr>
              <td>Nombre</td>
              <td><input type="text" name="nombre" id="nombre" class='form-control' required></td>
            </tr>
            <tr>
              <td>Responsable</td>
              <td><input type="text" name="responsable" id="responsable" class='form-control' required></td>
            </tr>
            <tr>
              <td>Zona</td>
              <td><input type="text" name="zona" id="zona" class='form-control' required></td>
            </tr>
            <tr>
              <td>Direccion</td>
              <td><input type="text" name="direccion" id="direccion" class='form-control' required></td>
            </tr>
            <tr>
              <td>Telefono</td>
              <td><input type="text" name="telefono" id="telefono" class='form-control' required></td>
            </tr>
            <tr>
              <td>Latitud</td>
              <td><input type="text" name="latitud" id="latitud_" class='form-control' required></td>
            </tr>
            <tr>
              <td>Longitud</td>
              <td><input type="text" name="longitud" id="longitud_" class='form-control' required></td>
            </tr>
            <tr>
              <td>Abrir Mapa</td>
              <td>
                <a href="#Mapa" onclick="Cambio(2)" data-toggle="modal" class="config"><button class='btn btn-info dim'><span class="fa fa-map-marker" aria-hidden="true"></span> Cargar Mapa</button></a>
            </td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="ejecutar" class='btn btn-primary' value="Registrar"></td>
            </tr>
            <input type="hidden" name="id" id="id" value="0">
          </table>
          </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="Eliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content panel-danger">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Eliminar Tipo</h4>
            </div>
            <div class="modal-body">
              <form name="registro" action="{{ url('/EliminarPunto') }}" method="post">
                {{ csrf_field() }}
              <center>  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <input type="submit" class="btn btn-success" value="Eliminar"><br>
                <input type="hidden" name="id_e" id="id_e" value="">
              </center>
            </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<div class="modal fade" id="Mapa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

@endsection

@section('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWfhkbkuAlTm08GKlCAUcINKqXUSTdzqE&callback=initMap" async defer></script>
<script>

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
  url  = '{{ asset("/index.php/BuscarPunto")}}/'+id;
 $.getJSON(url, null, function(data) {
     if(data.length>0)
     {
         $.each(data, function(field, e)
         {
             $('#nombre').val(e.nombre);
             $('#responsable').val(e.responsable);
             $('#zona').val(e.zona);
             $('#direccion').val(e.direccion);
             $('#telefono').val(e.telefono);
             $('#latitud_').val(e.latitud);
             $('#longitud_').val(e.longitud);
             $('#id_tipo option').eq(0).before($('<option>', { value: e.id_tipo,text: e.nombre_tipo,selected: "selected"}));
             $('#id').val(e.id);
         });
         $("#Editar").modal('show');
     }
 });
}

function Eliminar(id)
{
  $("#id_e").val(id);
  $("#Eliminar").modal('show');
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
var opcion=0;
function Cambio(dato)
{
  opcion=dato;
}

</script>
@endsection

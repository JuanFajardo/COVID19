@extends('layouts.app')
@section('laboratorio')class="active"@endsection



@section('ruta')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-6">
        <h2>Laboratio</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{asset('index.php/Laboratorio')}}">Laboratios</a>
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
<a href="#Nuevo" data-toggle="modal" class="config"><button class='btn btn-primary dim'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nueva Laboratio</button></a>
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
                <th>Fecha</th>
                <th>Remitente</th>
                <th>Destinatario</th>
                <th>Temperatura</th>
                <th>Observacion</th>
                <th>Nombre</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
              <?php $i=1;?>
              @foreach($datos as $dato)
            <tr class="gradeC">
              <td>{{$dato->nombrePaciente}}</td>
              <td>{{$dato->fecha_envio}}</td>
              <td>{{$dato->id_institucions_remitente}}</td>
              <td>{{$dato->id_institucions_destinatario}}</td>
              <td>{{$dato->temperatura}} °C</td>
              <td>{{$dato->solicitud}}</td>
              <td>{{$dato->nombre}}</td>
              <td>
                <button class="btn btn-warning dim" type="button" id="{{$dato->id}}" onclick="Editar(this.id)"><i class="fa fa-edit"></i></button>
                <!--<button class="btn btn-danger dim" type="button" id="{{$dato->id}}" onclick="Eliminar(this.id)"><i class="fa fa-trash-o"></i></button></a>-->
                <a class="btn btn-primary dim" type="button" href="{{ asset('index.php/Laboratorio/Reporte/'.$dato->id)}}" ><i class="fa fa-file-pdf-o"></i></button></a>
              </td>
            </tr>
            @endforeach
            </tbody>
            <?php if($i>5){?>
            <tfoot>
            <tr>
                  <th>#</th>
                  <th>Estado</th>
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
    <div class="modal-dialog">
        <div class="modal-content panel-primary">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <?php $id = isset( $_GET['paciente'] ) ? $_GET['paciente'] : 1 ;
                      $dato = \App\paciente::find($id);
                      if( strlen($dato) > 0 )
                        $nombre = $dato->nombre;
                      else
                        $nombre =  "Registra";
                ?>
                <h4 class="modal-title">Nuevo {{$nombre}}</h4>
            </div>
            <div class="modal-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/Prueba') }}" autocomplete="off">
          {{ csrf_field() }}
            <table class="table">
              <datalist id="list-remitente">
                @foreach($remitentes as $remitente)
                <option value="{{$remitente->id}}|{{$remitente->nombre}}, {{$remitente->institucion}}, {{$remitente->direccion}}, {{$remitente->telefono}}">
                @endforeach
              </datalist>

              <datalist id="list-destinatario">
                @foreach($destinatarios as $destinatario)
                <option value="{{$destinatario->id}}|{{$destinatario->nombre}}, {{$destinatario->institucion}}, {{$destinatario->direccion}}, {{$destinatario->telefono}}">
                @endforeach
              </datalist>

              <tr>
                <td colspan="2"><label for="">REMITENTE</label> <input type="text" name="id_institucions_remitente" class='form-control' required list="list-remitente"></td>
              </tr>
              <tr>
                <td colspan="2"><label for="">DESTINATARIO</label> <input type="text" name="id_institucions_destinatario" class='form-control' required list="list-destinatario"></td>
              </tr>
              <tr>
                <td><label for="">Temperatura</label> <input type="text" name="temperatura" class='form-control' required></td>
                <td><label for="">Solicitud</label> <input type="text" name="solicitud" class='form-control' required></td>
              </tr>
              <tr>
                <td><label for="">Fecha envio</label> <input type="date" name="fecha_envio" class='form-control' required></td>
                <td><label for="">Nombre del que Preparo el envio </label> <input type="text" name="nombre" class='form-control' required></td>
              </tr>
            </table>

            <table>
              <thead>
                  <input type="hidden" name="contador" value="9">
                  <tr>
                    <th>N° de Tubos</th>
                    <th>Cantidad Aproximada</th>
                    <th>Descripcion del envio</th>
                  </tr>
              </thead>
              <tbody id="cuerpoFormulario">
                <tr>
                  <td><input type="text" name="tubo1" class='form-control' placeholder="Tubo 1"></td> <td><input type="text" name="cantidad1" class='form-control' placeholder="Cantidad 1"></td> <td><input type="text" name="descripcion1" class='form-control' placeholder="Descripcion  1"></td>
                </tr>
                <tr>
                  <td><input type="text" name="tubo2" class='form-control' placeholder="Tubo 2"></td> <td><input type="text" name="cantidad2" class='form-control' placeholder="Cantidad 2"></td> <td><input type="text" name="descripcion2" class='form-control' placeholder="Descripcion  2"></td>
                </tr>
                <tr>
                  <td><input type="text" name="tubo3" class='form-control' placeholder="Tubo 3"></td> <td><input type="text" name="cantidad3" class='form-control' placeholder="Cantidad 3"></td> <td><input type="text" name="descripcion3" class='form-control' placeholder="Descripcion  3"></td>
                </tr>
                <tr>
                  <td><input type="text" name="tubo4" class='form-control' placeholder="Tubo 4"></td> <td><input type="text" name="cantidad4" class='form-control' placeholder="Cantidad 4"></td> <td><input type="text" name="descripcion4" class='form-control' placeholder="Descripcion  4"></td>
                </tr>
                <tr>
                  <td><input type="text" name="tubo5" class='form-control' placeholder="Tubo 5"></td> <td><input type="text" name="cantidad5" class='form-control' placeholder="Cantidad 5"></td> <td><input type="text" name="descripcion5" class='form-control' placeholder="Descripcion  5"></td>
                </tr>
                <tr>
                  <td><input type="text" name="tubo6" class='form-control' placeholder="Tubo 6"></td> <td><input type="text" name="cantidad6" class='form-control' placeholder="Cantidad 6"></td> <td><input type="text" name="descripcion6" class='form-control' placeholder="Descripcion  6"></td>
                </tr>
                <tr>
                  <td><input type="text" name="tubo7" class='form-control' placeholder="Tubo 7"></td> <td><input type="text" name="cantidad7" class='form-control' placeholder="Cantidad 7"></td> <td><input type="text" name="descripcion7" class='form-control' placeholder="Descripcion  7"></td>
                </tr>
                <tr>
                  <td><input type="text" name="tubo8" class='form-control' placeholder="Tubo 8"></td> <td><input type="text" name="cantidad8" class='form-control' placeholder="Cantidad 8"></td> <td><input type="text" name="descripcion8" class='form-control' placeholder="Descripcion  8"></td>
                </tr>
                <tr>
                  <td><input type="text" name="tubo9" class='form-control' placeholder="Tubo 9"></td> <td><input type="text" name="cantidad9" class='form-control' placeholder="Cantidad 9"></td> <td><input type="text" name="descripcion9" class='form-control' placeholder="Descripcion  9"></td>
                </tr>

              </tbody>
                <tr>
                  <input type="hidden" name="id_paciente" value="<?php echo $id; ?>">
                  <td colspan="3"><input type="submit" name="ejecutar" class='btn btn-primary' value="Registrar"></td>
                </tr>
            </table>
          </form>
            </div>
        </div>
    </div>
</div>
<!-- /.modal- -->
<div class="modal fade" id="Editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content panel-warning">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Editar </h4>
            </div>
            <div class="modal-body">
        {!! Form::open(['route'=>['Prueba.update', ':DATO_ID'], 'method'=>'PATCH', 'id'=>'form-update' ])!!}
          {{ csrf_field() }}
            <table class="table">
              <tr>
                <td colspan="2"><label for="">REMITENTE</label> <input type="text" id="id_institucions_remitente" name="id_institucions_remitente" class='form-control' required list="list-remitente"></td>
              </tr>
              <tr>
                <td colspan="2"><label for="">DESTINATARIO</label> <input type="text" id="id_institucions_destinatario" name="id_institucions_destinatario" class='form-control' required list="list-destinatario"></td>
              </tr>
              <tr>
                <td><label for="">Temperatura</label> <input type="text" id="temperatura" name="temperatura" class='form-control' required></td>
                <td><label for="">Solicitud</label> <input type="text" id="solicitud" name="solicitud" class='form-control' required></td>
              </tr>
              <tr>
                <td><label for="">Fecha envio</label> <input type="date" name="fecha_envio" class='form-control' required></td>
                <td><label for="">Nombre del que Preparo el envio </label> <input type="text" name="nombre" class='form-control' required></td>
              </tr>


              <tr>
                <input type="hidden" name="id_paciente" value="<?php echo $id; ?>">
                <td><input type="submit" name="ejecutar" class='btn btn-warning' value="Actualizar"></td>
              </tr>
              <input type="hidden" name="id" id="id" value="0">
            </table>
          </form>
            </div>
        </div>
    </div>
</div>

<!-- /.modal- -->

<div class="modal fade" id="Eliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content panel-danger">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Eliminar </h4>
            </div>
            <div class="modal-body">
              {!! Form::open(['route'=>['Prueba.destroy', ':DATO_ID'], 'method'=>'DELETE', 'id'=>'form-delete']) !!}
              <center>  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <input type="submit" class="btn btn-success" value="Eliminar"><br>
                <input type="hidden" name="id_e" id="id_e" value="">
              {!! Form::close() !!}

            </div>
        </div>
    </div>

</div>
<!-- /.modal-dialog -->
@endsection

@section('js')
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

function Editar(id){
  url  = '{{ asset("/index.php/Prueba")}}/'+id;
  $.getJSON(url, null, function(data) {
    if(data.length>0){
      $.each(data, function(field, e){
        $('#id_paciente').val(e.id_paciente);
        $('#id_institucions_remitente').val(e.id_institucions_remitente);
        $('#id_institucions_destinatario').val(e.id_institucions_destinatario);
        $('#temperatura').val(e.temperatura);
        $('#solicitud').val(e.solicitud);
        $('#fecha_envio').val(e.fecha_envio);
        $('#nombre').val(e.nombre);

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

</script>
@endsection

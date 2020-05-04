@extends('layouts.app')
@section('institucion')class="active"@endsection



@section('ruta')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-6">
        <h2>Instituciones/Laboratios Remitentes/Destinatario</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{asset('index.php/Institucion')}}">Instituciones/Laboratios</a>
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
<a href="#Nuevo" data-toggle="modal" class="config"><button class='btn btn-primary dim'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nueva institucion</button></a>
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
                <th>Institucion</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Lugar</th>
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
              <td>{{$dato->institucion}}</td>
              <td>{{$dato->direccion}}</td>
              <td>{{$dato->telefono}}</td>
              <td>{{$dato->tipo}}</td>
              <td>{{$dato->localidad}}</td>
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
                <h4 class="modal-title">Nuevo</h4>
            </div>
            <div class="modal-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/Institucion') }}" autocomplete="off">
          {{ csrf_field() }}
            <table class="table">
              <tr>
                <td><label for="">Nombre</label> <input type="text" name="nombre" class='form-control' required></td>
                <td><label for="">Institucion</label> <input type="text" name="institucion" class='form-control' required></td>
              </tr>
              <tr>
                <td><label for="">Direccion</label> <input type="text" name="direccion" class='form-control' required></td>
                <td><label for="">Telefono</label> <input type="text" name="telefono" class='form-control' required></td>
              </tr>
              <tr>
                <td><label for="">Tipo</label> <input type="text" name="tipo" class='form-control' required list="id-tipo"></td>
                <datalist id="id-tipo">
                  <option value="REMITENTE"><option value="DESTINATARIO">
                </datalist>
                <td><label for="">Localidad</label> <input type="text" name="localidad" class='form-control' required list="id-localidad"></td>
                <datalist id="id-localidad">
                  <option value="Potosí">
                  <option value="Otro">
                </datalist>
              </tr>
              <tr>
                <td colspan="2"><input type="submit" name="ejecutar" class='btn btn-primary' value="Registrar"></td>
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
        {!! Form::open(['route'=>['Institucion.update', ':DATO_ID'], 'method'=>'PATCH', 'id'=>'form-update' ])!!}
          {{ csrf_field() }}
            <table class="table">
              <tr>
                <td><label for="">Nombre</label> <input type="text" name="nombre" id="nombre" class='form-control' required></td>
                <td><label for="">Institucion</label> <input type="text" name="institucion" id="institucion" class='form-control' required></td>
              </tr>
              <tr>
                <td><label for="">Direccion</label> <input type="text" name="direccion" id="direccion" class='form-control' required></td>
                <td><label for="">Telefono</label> <input type="text" name="telefono" id="telefono" class='form-control' required></td>
              </tr>
              <tr>
                <td><label for="">Tipo</label> <input type="text" name="tipo" id="tipo" class='form-control' required list="id-tipo"></td>
                <td><label for="">Localidad</label> <input type="text" name="localidad" id="localidad" class='form-control' required list="id-localidad"></td>
              </tr>

              <tr>
                <td></td>
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
              {!! Form::open(['route'=>['Institucion.destroy', ':DATO_ID'], 'method'=>'DELETE', 'id'=>'form-delete']) !!}
              <center>  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <input type="submit" class="btn btn-success" value="Eliminar"><br>
                <input type="hidden" name="id_e" id="id_e" value="">
              {!! Form::close() !!}

              <!--<form name="registro" action="{{ url('/Institucion') }}" method="DELETE">
                {{ csrf_field() }}
              <center>  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <input type="submit" class="btn btn-success" value="Eliminar"><br>
                <input type="hidden" name="id_e" id="id_e" value="">
              </center>
            </form>-->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


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
  url  = '{{ asset("/index.php/Institucion")}}/'+id;
  $.getJSON(url, null, function(data) {
    if(data.length>0){
      $.each(data, function(field, e){
        $('#nombre').val(e.nombre);
        $('#institucion').val(e.institucion);
        $('#direccion').val(e.direccion);
        $('#telefono').val(e.telefono);
        $('#tipo').val(e.tipo);
        $('#localidad').val(e.localidad);
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

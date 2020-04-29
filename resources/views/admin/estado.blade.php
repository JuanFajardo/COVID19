@extends('layouts.app')

@section('menu2')class="active"@endsection
@section('submenu22')class="active"@endsection

@section('ruta')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-6">
        <h2>Estados</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{asset('index.php/Tipo')}}">Lista de Estados</a>
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
<a href="#Nuevo" data-toggle="modal" class="config"><button class='btn btn-primary dim'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo Estado</button></a>
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
                <th>Estado</th>
                <th>Clase (color)</th>
                <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
              <?php $i=1;?>
              @foreach($datos as $dato)
            <tr class="gradeC">
              <td><?php echo $i++;?></td>
              <td>{{$dato->estado}}</td>
              <td class="{{$dato->clase}}">{{$dato->clase}}</td>
              <td>
<button class="btn btn-info dim" type="button" id="{{$dato->id}}" onclick="Editar(this.id)"><i class="fa fa-edit"></i></button>
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
                  <th>Clase (color)</th>
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
                <h4 class="modal-title">Nuevo Tipo</h4>
            </div>
            <div class="modal-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/GuardaEstado') }}" autocomplete="off">
          {{ csrf_field() }}
            <table class="table">
              <tr>
                <td>Estado</td>
                <td><input type="text" name="estado" class='form-control' required></td>
              </tr>
              <tr>
                <td>Clase (color)</td>
                <td><input type="text" name="clase" class='form-control' required></td>
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
    <div class="modal-dialog">
        <div class="modal-content panel-primary">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Editar Tipo</h4>
            </div>
            <div class="modal-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/ActualizaEstado') }}" autocomplete="off">
          {{ csrf_field() }}
            <table class="table">
              <tr>
                <td>Estado</td>
                <td><input type="text" name="estado" id="estado" class='form-control' required></td>
              </tr>
              <tr>
                <td>Clase</td>
                <td><input type="text" name="clase" id="clase" class='form-control' required></td>
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
              <form name="registro" action="{{ url('/EliminarEstado') }}" method="post">
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

function Editar(id)
{
  url  = '{{ asset("/index.php/BuscarEstado")}}/'+id;
 $.getJSON(url, null, function(data) {
     if(data.length>0)
     {
         $.each(data, function(field, e)
         {
             $('#estado').val(e.estado);
             $('#clase').val(e.clase);
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


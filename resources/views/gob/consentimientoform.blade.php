@extends('layouts.app')

@section('menu2')class="active"@endsection
@section('submenu26')class="active"@endsection

@section('ruta')
<style>.modal-xl {
    max-width: 95% !important;


}</style>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-6">
        <h2>Formulario de consentimiento de cuarentena </h2>
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
      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
      <script>
        function seleccionar_pos()
        {
           document.getElementById('dom_lat').value=parent.frames[0].document.getElementById('dom_lat').value;
           document.getElementById('dom_lon').value=parent.frames[0].document.getElementById('dom_lon').value;  
        }
      
      </script>
        
<!-- =============================== FORMULARIO ========== -->
  <div class="container-contact100" position="absolute">
    <div class="wrap-contact100">

      <form id="save_post" name="save_post" method="post" action="{{URL::to('/')}}/saveform" class="contact100-form validate-form">
      {{ csrf_field() }}
      <table class="table">
        <tr>
           <td> NOMBRE *</td>
           <td> <input class="form-control" type="text" id="nombre" name="nombre" value="{!! $paciente->nombre !!} {!! $paciente->paterno !!} {!! $paciente->materno !!}" class="form-control"  maxlength="20" readonly="readonly"> </td>
        </tr>
        <tr>
            <td> CARNET DE IDENTIDAD *</td>
            <td> <input class="form-control" type="number" id="ci" name="ci" value="{!! $paciente->ci !!}" class="form-control" placeholder="Introduce su Carnet de Identidad"> </td>
        </tr>
        <tr> 
            <td>DOMICILIO *</td>
            <td><input class="form-control" type="text" id="domicilio" name="domicilio" value="{!! $paciente->domicilio !!}" class="form-control" maxlength="60"></td>
        </tr>
        <tr>
            <td>CELULAR *</td>
            <td><input class="form-control" type="number" id="celular" name="celular" value="{!! $paciente->telefono !!}" class="form-control" min="0" max="99999999"></td>
        </tr>
        <tr>
            <td>LATITUD *</td>
            <td><input class="form-control" type="number" id="dom_lat" name="dom_lat" value="{!! $consentimiento->dom_lat !!}" class="form-control" readonly="readonly"></td>
        </tr>
        <tr>
            <td>LONGITUD *</td>
            <td><input class="form-control" type="number" id="dom_lon" name="dom_lon" value="{!! $consentimiento->dom_lon !!}" class="form-control" readonly="readonly"></td>        
        </tr>
      
        <tr>
            <td>FECHA Y HORA *</td>
            <td><input class="input100" type="hidden" id="id_paciente" name="id_paciente" value="{!! $paciente->id !!}" class="form-control" readonly="readonly">
                <input class="form-control" id="fecha_aceptacion" name="fecha_aceptacion" value="{!! $consentimiento->fecha_aceptacion !!}"  readonly="readonly">
                <input class="form-control" type="text" id="hora_aceptacion" name="hora_aceptacion" value="{!! $consentimiento->hora_aceptacion !!}"  readonly="readonly">
                <input  type="hidden" id="documento" name="documento" value="{!! $consentimiento->documento !!}"  readonly="readonly">
                <input  type="hidden" id="id" name="id" value="{!! $consentimiento->id !!}"  readonly="readonly">
            </td>
        </tr>
        <tr>
           <td colspan="2"><a href="#" onclick="seleccionar_pos();">Seleccionar posicion</a> </td>
        </tr> 
        <tr>
          <td colspan="2">
            <div class="container-contact100-form-btn">
          <button class="btn btn-primary" onclick="seleccionar_pos();">
            <span>
              Guardar
              <!-- <input type="submit" value="Save"> -->
              <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true" type="none" value="Save"></i>
            </span>
          </button>

        </div>
          </td>


        </table> 
      
     <iframe src="/vermapasimple/?dom_lat={!! $consentimiento->dom_lat !!}&dom_lon={!! $consentimiento->dom_lon !!}" frameborder="0" style="border:0; width: 100%; height: 420px;" allowfullscreen></iframe>
     <p>
      .
     </p> 
     <p>
      .
     </p> 
      </form>
    </div>
  </div>
  
@endsection
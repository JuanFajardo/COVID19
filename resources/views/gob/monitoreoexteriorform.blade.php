@extends('layouts.app')
@section('menu2')class="active"@endsection
@section('submenu25')class="active"@endsection
@section('ruta')
<style>.modal-xl {
    max-width: 95% !important;
}</style>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-6">
        <h2>Tarjeta para monitoreo de sintomas en pacientes ingresados del exterior</h2>
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
<!-- =============================== FORMULARIO ========== -->
  <div class="container-contact100" position="absolute">
    <div class="wrap-contact100">
      <form id="save_post" name="save_post" method="post" action="{{URL::to('/')}}/saveexteriorform" class="contact100-form validate-form">
      {{ csrf_field() }}
      <table class="table">
        <tr>
            <td> NOMBRE *</td>
            <td><input type="text" id="nombre" name="nombre" value="{!! $paciente->nombre !!} {!! $paciente->paterno !!} {!! $paciente->materno !!}" class="form-control"  maxlength="20"></td>
        </tr>
        <tr>
            <td colspan="2"> TIPO DE DOCUMENTO *</td>
        </tr>
        <tr>
          <td></td><td><input  class="form-control" type="radio" id="1" name="tipo_documento" value="{!! $paciente_exterior->tipo_documento !!}"  placeholder="tipo_documento" > Pasaporte </td>
        </tr>
        <tr>
          <td></td><td><input class="form-control" type="radio" id="2" name="tipo_documento" value="{!! $paciente_exterior->tipo_documento !!}"  placeholder="tipo_documento" > Cedula de identidad</td>
        </tr>
        <tr> 
         <td></td><td><input class="form-control" type="radio" id="3" name="tipo_documento" value="{!! $paciente_exterior->tipo_documento !!}"  placeholder="tipo_documento" > Salvo conducto</td> 
        </tr>
        <tr>
          <td></td><td><input class="form-control" type="radio" id="4" name="tipo_documento" value="{!! $paciente_exterior->tipo_documento !!}"  placeholder="tipo_documento" > Otros</td>
        </tr>
        <tr>
          <td>NACIONALIDAD *</td>
          <td><input type="text" id="nacionalidad" name="nacionalidad" value="{!! $paciente->nacionalidad !!}" class="form-control" maxlength="60"></td>
        </tr>
      <tr>
        <td>TELEFONOS O WHATSAPP *</td>
        <td><input type="number" id="celular" name="celular" value="{!! $paciente->telefono !!}" class="form-control" min="0" max="99999999"></td>
      </tr>
      <tr>
        <td>CORREOS ELECTRONICOS *</td>
        <td><input type="email" id="email" name="email" value="{!! $paciente_exterior->email !!}" class="form-control">
        </td>
      </tr>
      <tr>
        <td>DIRECCIONES PREVISTAS *</td>
        <td><input type="text" id="direcciones_previstas" name="direcciones_previstas" value="{!! $paciente_exterior->direcciones_previstas !!}" class="form-control"></td>        
      </tr>
        <tr>
          <td>COMETARIOS *</td>
          <td><input type="hidden" id="id_paciente" name="id_paciente" value="{!! $paciente->id !!}" class="form-control" readonly="readonly">
          <input class="form-control" id="comentarios" name="cometarios" value="{!! $paciente_exterior->comentarios !!}" >
          <input  type="hidden" id="id" name="id" value="{!! $paciente_exterior->id !!}">
          </td>
        </tr>
        <tr>
          <td colspan="2">  
             <div class="container-contact100-form-btn">
             <button class="btn btn-primary">
                <span>
                   Guardar
                   <!-- <input type="submit" value="Save"> -->
                   <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true" type="submit" value="Save"></i>
                </span>
             </button>
             </div>
          </td>
        </tr>
      <tr>
        <td colspan="2"><button></button>></td>
      </tr>    
  </table>
  </form>
    </div>
  </div>
@endsection
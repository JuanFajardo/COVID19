@extends('layouts.app')

@section('menu2')class="active"@endsection
@section('submenu25')class="active"@endsection

@section('ruta')
<style>.modal-xl {
    max-width: 95% !important;


}</style>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-6">
        <h2><strong>TARJETA DE MONITOREO DE SINTOMAS Y SEGUIMIENTO INDIVIDUAL DE CONTACTOS Y CASOS SOSPECHOSOS DE COVID-19</strong></h2>
        <ol class="breadcrumb"></ol>
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

      <form id="save_post" name="save_post" method="post" action="{{URL::to('/')}}/savetarjetaform" class="contact100-form validate-form">
      {{ csrf_field() }}
        <table>
          <tr>
            <td>NOMBRE *</td>
            <td><input class="form-control" type="text" id="nombre" name="nombre" value="{!! $paciente->nombre !!}" class="form-control"  maxlength="250" readonly="readonly"></td>
          </tr>
          <tr>
            <td>EDAD *</td>
            <td><input class="form-control" type="number" id="edad" name="edad" value="{!! $paciente->edad !!}" class="form-control" placeholder="Introduce su edad" " required="readonly"></td> 
          </tr>
          <tr>
            <td>FECHA INICIO SEGUIMIENTO *</td>
            <td><input class="form-control" type="date" id="fecha_inicio" name="fecha_inicio" value="{!! $tarjetamonitoreo->fecha_inicio !!}" class="form-control" ></td>
          </tr>
          <tr>
            <td>LUGAR: (domicilio/seguimiento telefonico) *</td>
            <td><input class="form-control" type="text" id="domicilio" name="domicilio" value="{!! $paciente->domicilio !!} {!! $paciente->telefono !!}" class="form-control" readonly="readonly"></td>
          </tr>
          <tr>
            <td>FECHA FIN DEL MONITOREO *</td>
            <td><input class="form-control" type="date" id="fecha_fin" name="fecha_fin" value="{!! $tarjetamonitoreo->fecha_fin !!}" class="form-control">
            </td>
          </tr>
          <tr>
             <td colspan="2">FACTOR DE RIESTO *</td>
          </tr>
          <tr>
            <td></td><td>Mayor de 60 anios *
                     <input type="checkbox" id="mayor_60" name="mayor_60" value="Si" class="form-control" @if($tarjetamonitoreo->mayor_60) checked @else @endif></td>
          </tr>
          <tr>
            <td></td><td>Comorbilidades *
                     <input type="checkbox" id="comorbilidades" name="comorbilidades" value="Si" class="form-control" @if($tarjetamonitoreo->comorbilidades) checked @else @endif></td>
          </tr>        
      <tr>
        <td colspan="2">
             <div class="table-responsive">
                <table class="table table-responsive table-striped table-bordered table-hover" style="width:100%" id="example" name="example">
                  <thead align="center" class="thead-dark">
                     <th>Dia de seguim.</th>
                     <th>Fecha</th>
                     <th>Temperatura</th>
                     <th>Tos</th>
                     <th>Dificultad respiratoria</th>
                     <th>Responsable</th>
                     <th>Observaciones</th>
                  </thead> 
                  <tbody>
                  @foreach($dias as $dia)
                     <tr> <td><input type="text" size="2" value="{!! $dia[0] !!}" id="dia[]" name="dia[]"></td>
                       <td><input class="form-control" type="date" size="4" value="{!! $dia[1] !!}" id="fecha[]" name="fecha[]"> </td>
                       <td><input class="form-control" type="text" id="temperatura[]" name="temperatura[]" value="{!! $dia[2] !!}"></td>
                       <td><input class="form-control" type="text" size="4" id="tos[]" name="tos[]" value="{!! $dia[3] !!}"></td>
                       <td><input class="form-control" type="text" size="4" id="dificultad_respiratoria[]" name="dificultad_respiratoria[]" value="{!! $dia[4] !!}"></td>
                       <td><input class="form-control" type="text" size="30" id="responsable[]" name="responsable[]" value="{!! $dia[5] !!}"></td>
                       <td><input class="form-control" type="text" size="30" id="obervaciones[]" name="obervaciones[]"></td>
                     </tr>
                  @endforeach
                  </tbody>
                </table>
             </div>
        </td>
      </tr>
      <tr>
        <td>LUGAR DE REFERENCIA O DERIVACION *</td>
        <td><input type="hidden" id="id_paciente" name="id_paciente" value="{!! $paciente->id !!}" class="form-control" readonly="readonly">
        <input class="form-control" id="lugar_referencia" name="lugar_referencia" value="{!! $tarjetamonitoreo->lugar_referencia !!}">
        <input  type="hidden" id="id" name="id" value="{!! $tarjetamonitoreo->id !!}"  readonly="readonly">
        </td>
      </tr>
      <tr>
        <td>FECHA DE DERIVACION *</td>
        <td><input class="form-control" id="fecha_derivacion" name="fecha_derivacion" value="{!! $tarjetamonitoreo->fecha_derivacion !!}"></td>
      </tr>
      <tr>
        <td>NOMBRE DE QUIEN DERIVA *</td>
        <td><input class="form-control" id="nombre_medico_deriva" name="nombre_medico_deriva" value="{!! $tarjetamonitoreo->nombre_medico_deriva !!}">
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
      <td colspan="2">
        <button></button>
       </td> 
    </tr>
    <tr>
      <td colspan="2">
        <button></button>
       </td> 
    </tr>
  </table>
      </form>
    </div>
  </div>      
@endsection
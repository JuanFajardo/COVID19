@extends('layouts.app')

@section('menu2')class="active"@endsection
@section('submenu26')class="active"@endsection

@section('ruta')
<style>.modal-xl {
    max-width: 95% !important;


}</style>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-6">
        <h2>Lista de personas contagiadas y sospechosas en cuarentena</h2>
        
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

<div class="row">
    <div class="col-12">
        <div class="card">
              <div class="card-body">
                <h5 class="card-title"></h5>                
                <div class="table-responsive">
                <table class="table table-striped" style="width:100%" id="example" name="example">
                <thead class="thead-dark" align="center">
                    <th>No</th><th>NOMBRE COMPLETO</th><th>DOMICILIO</th><th>CELULAR</th><th>Estado</th><th>Consentimiento</th><th></th>
                </thead>
                <tbody>
                    @foreach($pacientes as $paciente)
                    <tr>
                    <td>{!! $paciente->id !!}</td><td>{!! $paciente->nombre !!} {!! $paciente->paterno !!} {!! $paciente->materno !!}</td><td>{!! $paciente->domicilio !!}</td><td>{!! $paciente->telefono !!}</td><td>{!! $paciente->estado !!}</td><td align="center"><a href="/consentimientoform/?id={!! $paciente->id !!}"><button type="button" class="btn @if ($paciente->form_consentimiento()=='Con formulario')btn-primary btn-sm @else btn-secondary @endif"><i class="fa fa-file-pdf"> - {!! $paciente->form_consentimiento() !!}</i></button></a></td><td>
                        <a href="{{asset('/consentimientopdf/')}}?id={!! $paciente->id !!}"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-print"></i></button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
                
              </div>
            </div>
    </div>
</div>      
@endsection
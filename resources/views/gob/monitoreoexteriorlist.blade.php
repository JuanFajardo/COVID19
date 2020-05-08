@extends('layouts.app')

@section('menu2')class="active"@endsection
@section('submenu25')class="active"@endsection

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
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link href="boos/css/styles.css" rel="stylesheet" />
        
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
    <link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=c863b7da7e72b0e94c16b81c38293467">
    
    <!-- icons -->
  
    <!-- icons -->
    <style type="text/css" class="init">
    </style>
    <script type="text/javascript" src="/media/js/site.js?_=a64810efc82bfd3b645784011efa5963"></script>
    <script type="text/javascript" src="/media/js/dynamic.php?comments-page=extensions%2Fresponsive%2Fexamples%2Fdisplay-types%2Fbootstrap4-modal.html" async></script>
         

<div class="row">
    <div class="col-12">
        <div class="card">
              <div class="card-body">
                <h5 class="card-title">MONITOREO DE SINTOMAS DE PERSONAS PROCEDENTES DE UN PAIS O REGION CON COVID-19</h5>                
                <div class="table-responsive">
                <table class="table table-striped" style="width:100%" id="example" name="example">
                <thead class="thead-dark" align="center">
                    <th>No</th><th>NOMBRE COMPLETO</th><th>DOMICILIO</th><th>CELULAR</th><th>ESTADO</th><th>TARJETA DE MONITOREO</th><th></th>
                </thead>
                <tbody>
                    @foreach($pacientes as $paciente)
                    <tr>
                    <td>{!! $paciente->id !!}</td><td>{!! $paciente->nombre !!} {!! $paciente->paterno !!} {!! $paciente->materno !!}</td><td>{!! $paciente->domicilio !!}</td><td>{!! $paciente->telefono !!}</td><td>{!! $paciente->estado !!}</td><td align="center"><a href="{{asset('/monitoreoexteriorform/')}}?id={!! $paciente->id !!}"><button type="button" class="btn @if ($paciente->form_exterior()=='Con formulario')btn-primary btn-sm @else btn-secondary @endif"><i class="fa fa-file-pdf"> - {!! $paciente->form_exterior() !!}</i></button></a></td><td>
                        <a href="{{asset('/tarjetapacienteexteriorpdf/')}}?id={!! $paciente->id !!}"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-print"></i></button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                <a href="{{asset('/monitoreoexteriorform/')}}"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>Nuevo tarjeta</button></a>
                        <a href="{{asset('/listapacientesexterior/')}}"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-print"></i>Imprimir lista de tarjetas</button></a>
            </div>
                
              </div>
            </div>
    </div>
</div>      
@endsection
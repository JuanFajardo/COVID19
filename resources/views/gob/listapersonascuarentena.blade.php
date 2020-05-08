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
<link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link href="boos/css/styles.css" rel="stylesheet" />
        
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
    <link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=c863b7da7e72b0e94c16b81c38293467">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
    <!-- icons -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- icons -->
    <style type="text/css" class="init">
    </style>
    <script type="text/javascript" src="/media/js/site.js?_=a64810efc82bfd3b645784011efa5963"></script>
    <script type="text/javascript" src="/media/js/dynamic.php?comments-page=extensions%2Fresponsive%2Fexamples%2Fdisplay-types%2Fbootstrap4-modal.html" async></script>
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>     

<div class="row">
    <div class="col-12">
        <div class="card">
              <div class="card-body">
                <h5 class="card-title">Lista de contactos del Paciente</h5>
                <p> <strong>Numero de paciente : </strong> {!! $paciente->id !!}</p>
                <p> <strong>Nombre del Paciente : </strong>{!! $paciente->nombre !!} {!! $paciente->apellido_p !!} {!! $paciente->apellido_m !!} </p>
                <p align="right"><a href="/registrarcontacto/?id_paciente={!! $paciente->id !!}"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-cloud"></i>Registrar Contactos</button></a></p>
                <div class="table-responsive">
                <table class="table table-striped" style="width:100%" id="example" name="example">
                <thead class="thead-dark" align="center">
                    <th>No</th><th>NOMBRE COMPLETO</th><th>VINCULO</th><th>EDAD</th><th>DOMICILIO</th><th>CELULAR</th><th>ENFERMEDAD BASE</th><th>FECHA CONTACTO</th><th>SINTOMAS</th><th>F</th><th>TS</th><th>DR</th><th>C</th><th>D.G.</th><th>D.T.</th><th>A</th><th>OBSERVACIONES</th>
                </thead>
                <tbody>
                    @foreach($contactos as $contacto)
                    <tr>
                    <td>{!! $contacto->id !!}</td><td>{!! $contacto->nombre !!} {!! $contacto->apellido_p !!} {!! $contacto->apellido_m !!}</td><td>{!! $contacto->vinculo !!}</td><td>{!! $contacto->edad !!}</td><td>{!! $contacto->domicilio !!}</td><td>{!! $contacto->celular !!}</td><td>{!! $contacto->enfermedad_base !!}</td><td>{!! $contacto->fecha_contacto !!}</td><td>{!! $contacto->sintomas !!}</td><td>{!! $contacto->f !!}</td><td>{!! $contacto->ts !!}</td><td>{!! $contacto->dr !!}</td><td>{!! $contacto->c !!}</td><td>{!! $contacto->dg !!}</td><td>{!! $contacto->dt !!}</td><td>{!! $contacto->a !!}</td><td>{!! $contacto->edad !!}</td><td>{!! $contacto->observaciones !!}</td><td>
                        <a href="/index.php/modificarcontacto/?id={!! $contacto->id !!}"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button></a>
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
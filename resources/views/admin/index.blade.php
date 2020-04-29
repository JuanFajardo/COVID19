@extends('layouts.app')

@section('ruta')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>INICIO</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{asset('/home')}}">Sistema Gamp v3.0</a>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
@endsection

@section('contenido')
<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>Bienvenido {{Auth::user()->username}}</h5>
                </div>

                <div class="ibox-content">

                    <p class="font-bold">
                        Sistema Covid-19
                    </p>

                    <p>Bienvenido ya puede utilizar el sistema</p>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

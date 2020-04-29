@extends('layouts.app')

@section('ruta')
<style>.modal-xl {
    max-width: 75% !important;}
    fieldset {
    	border-radius: 4px;
    }
    .panel1{background-color: rgba(26, 179, 148, 0.1);color: #1ab394;}
    .panel2{background-color: rgba(28, 132, 198, 0.1); color: #1c84c6;}
    .panel3{background-color: rgba(248, 172, 89, 0.1); color: #f8ac59;}
    .panel4{background-color: rgba(237, 85, 101, 0.1); color: #ed5565;}
    legend {
    	background-color: #fff;
    	border: 1px solid #ddd;
    	border-radius: 4px;
    	font-size: 17px;
    	font-weight: bold;
    	padding: 3px 5px 3px 7px;
    	width: auto;
    }
    .viaje{
      border-left: 3px solid #9fd6f9;
    }
    .contagio{
      border-left: 3px solid #9fd6f9;
    }

  </style>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
<a href="#Nuevo" data-toggle="modal" class="config"><button class='btn btn-primary dim'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo Laboratorio</button></a>
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
              <th>Paciente</th>
              <th>Fecha Registro</th>
              <th>Opciones</th>
            </tr>
            </thead>
            <tbody>
              <?php $i=1;?>
              @foreach($persona as $dato)
            <tr class="gradeC">
              <td><?php echo $i++;?></td>
              <td>{{$dato->nombre1}}</td>
              <td>{{$dato->created_at}}</td>
              <td>
<button class="btn btn-info dim" type="button" id="{{$dato->id}}" onclick="Editar(this.id)" data-toggle="tooltip" data-placement="top" title="Editar">
  <i class="fa fa-edit"></i>
</button>
<button class="btn btn-warning dim" type="button" id="{{$dato->id}}" onclick="Eliminar(this.id)" data-toggle="tooltip" data-placement="top" title="Laboratorio">
  <i class="fa fa-list-ul"></i>
</button>
<a href="{{asset('index.php/VerLaboratorio')}}/{{$dato->id}}"><button class="btn btn-primary dim" type="button" id="{{$dato->id}}" title="Ver Laboratorio">
  <i class="fa fa-eye"></i>
</button></a>
              </td>
            </tr>
            @endforeach

            </tbody>
            <?php if($i>5){?>
            <tfoot>
            <tr>
              <th>#</th>
              <th>Paciente</th>
              <th>Fecha Registro</th>
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
    <div class="modal-dialog modal-xl">
        <div class="modal-content panel-info">
            <div class="modal-header panel-heading">
                <h4 class="modal-title">Nuevo Laboratorio</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background-color:">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/GuardaLaboratorio') }}" autocomplete="off">
          {{ csrf_field() }}

          <fieldset class="col-12 col-md-12 panel1">
          <legend>IDENTIFICACION DEL CASO/PACIENTE:</legend>
          <div class="form-row tabla1">
            <div class="form-group col-md-6">
              <label>Seleccione Paciente</label>
              <select name="id_paciente" class="form-control">
                @foreach($paciente as $data_)
                <option value="{{$data_->id}}">{{$data_->nombre}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="id_paciente">Si es menor de edad Nombre del Padre/Madre o apoderado</label>
              <input type="text" name="apoderado" class="form-control">
            </div>
          </div>
        </fieldset>

        <fieldset class="col-12 col-md-12 panel1">
        <legend>ANTECEDENTES EPIDEMIOLOGICOS</legend>
          <div class="row tabla2">
            <div class="col">
              Ocupacion:
            </div>
            <div class="col">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-radio-input" name="ocupacion" value="1"> Personal de Salud
                </label>
              </div>
            </div>
            <div class="col">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-radio-input" name="ocupacion" value="2"> Personal de Laboratorio
                </label>
              </div>
            </div>
            <div class="col">
              <input type="text" class="form-control" name="ocupacion_otro" onkeydown="radio1('ocupacion')" placeholder="Otro">
            </div>
          </div>
<br>
          <div class="row tabla2">
            <div class="col">
              Antecedente de vacunación para influenza:
            </div>
            <div class="col">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-radio-input" name="influenza" value="1"> No
                </label>
              </div>
            </div>
            <div class="col">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-radio-input" name="influenza" value="2"> Si
                </label>
              </div>
            </div>
            <div class="col">
              Fecha: <input type="date" class="form-control" name="fecha_influenza">
            </div>
          </div>
<br>
          <div class="row tabla2">
            <div class="col">
              ¿Tuvo un viaje a un lugar de riesgo dentro o fuera del país ?
            </div>
            <div class="col">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-radio-input" name="viaje" value="1"> No
                </label>
              </div>
            </div>
            <div class="col">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-radio-input" name="viaje" value="2"> Si
                </label>
              </div>
            </div>
          </div>

<br>
        <div class="row viaje tabla2">
          <div class="form-group col-md-4">
            <label for="pais_viaje">¿Dónde (país y ciudad )?</label>
            <input type="text" name="pais_viaje" class="form-control">
          </div>
          <div class="form-group col-md-4">
            <label for="fecha_viaje">Fecha de retorno de viaje:</label>
            <input type="date" name="fecha_viaje" class="form-control">
            </select>
          </div>

          <div class="form-group col-md-4">
            <label for="hora_viaje">Hora de viaje</label>
            <input type="time" name="hora_viaje" class="form-control"
            </select>
          </div>
        </div>


        <div class="row viaje tabla2">
          <div class="form-group col-md-4">
            <label for="empresa_viaje">Empresa</label>
            <input type="text" name="empresa_viaje" class="form-control">
          </div>
          <div class="form-group col-md-4">
            <label for="nro_viaje">Nro. de vuelo</label>
            <input type="number" name="nro_viaje" class="form-control">
            </select>
          </div>

          <div class="form-group col-md-4">
            <label for="nro_asiento">N° de asiento</label>
            <input type="number" name="nro_asiento" class="form-control"
            </select>
          </div>
        </div>


        <div class="row justify-content-center tabla2">
          <div class="col"><center>¿Tuvo contacto con un caso confirmado de COVID-19 en los 14 días previos al inicio de síntomas, en domicilio o establecimiento de salud</center></div>
        </div>


        <div class="row tabla2">
          <div class="form-group col-md-6">
            <div class="form-check">
              <label class="form-check-label">
                <center><input type="radio" class="form-radio-input" name="contacto_positivo" value="1"> No</center>
              </label>
            </div>
          </div>
          <div class="form-group col-md-6">
            <div class="form-check">
              <label class="form-check-label">
                <center><input type="radio" class="form-radio-input" name="contacto_positivo" value="2"> Si</center>
              </label>
            </div>
          </div>
        </div>

          <div class="row contagio tabla2">
            <div class="form-group col-md-6">
              <label for="id_paciente">Nombre y apellido Caso Positivo</label>
              <select name="id_paciente_contagio" class="form-control">
                @foreach($paciente as $data)
                <option value="{{$data->id}}">{{$data->nombre}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="id_paciente">Fecha de contacto</label>
              <input type="date" name="fecha_contacto_positivo" class="form-control">
            </div>
          </div>
        </fieldset>

        <fieldset class="col-12 col-md-12 panel1">
        <legend>DATOS CLÍNICOS</legend>

        <div class="row tabla4">
          <div class="form-group col-md-3">
          Fecha Inicio de sintomas
        </div>
          <div class="form-group col-md-3">
          <input type="date" name="fecha_inicio_sintomas" class="form-control">
          </div>
        </div>


        <div class="row tabla3">
          <div class="form-group col-md-2">
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-radio-input" name="tos_seca" value="1"> Tos Seca
              </label>
            </div>
          </div>
          <div class="form-group col-md-2">
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-radio-input" name="fiebre" value="1"> Fiebre
              </label>
            </div>
          </div>

          <div class="form-group col-md-2">
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-radio-input" name="malestar_general" value="1"> Malestar General
              </label>
            </div>
          </div>
          <div class="form-group col-md-2">
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-radio-input" name="cefalea" value="1"> Cefalea
              </label>
            </div>          </div>
          <div class="form-group col-md-2">
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-radio-input" name="dificultad_respiratoria" value="1"> Dificultad Respiratoria
              </label>
            </div>          </div>
          <div class="form-group col-md-2">
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-radio-input" name="mialgias" value="1"> Mialgias
              </label>
            </div>
          </div>
        </div>

        <div class="row tabla3">
          <div class="form-group col-md-2">
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-radio-input" name="dolor_de_garganta" value="1"> Dolor de garganta
              </label>
            </div>
          </div>
          <div class="form-group col-md-2">
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-radio-input" name="perdida_olfato" value="1"> Perdida y/o disminución del sentido del olfato
              </label>
            </div>
          </div>

          <div class="form-group col-md-2">
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-radio-input" name="perdida_gusto" value="1"> Perdida y/o disminución del sentido del gusto
              </label>
            </div>
          </div>
          <div class="form-group col-md-2">
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-radio-input" name="asintomatico" value="1"> Asintomático
              </label>
            </div>
          </div>
          <div class="form-group col-md-4">
<input type="text" name="otros" class="form-control" placeholder="Otros">
          </div>
        </div>

        <div class="row justify-content-center tabla3">
          <div class="col"><center><b>Estado actual del paciente( al momento del reporte)</b></center></div>
        </div>
<br>
        <div class="row tabla3">
          <div class="form-group col-md-3">
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-radio-input" name="estado_actual" value="1"> Leve
              </label>
            </div>
          </div>
          <div class="form-group col-md-3">
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-radio-input" name="estado_actual" value="2"> Grave
              </label>
            </div>
          </div>

          <div class="form-group col-md-3">
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-radio-input" name="estado_actual" value="3"> Fallecido
              </label>
            </div>
          </div>
          <div class="form-group col-md-3">Fecha de defuncion
<input type="date" name="fecha_defuncion" class="form-control">
          </div>
        </div>


        <div class="row justify-content-center tabla3">
          <div class="col"><center><b>Diagnostico clínico</b></center></div>
        </div>
<br>
        <div class="row tabla3">
          <div class="form-group col-md-3">
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-radio-input" name="diagnostico_clinico" value="1"> IRA
              </label>
            </div>
          </div>
          <div class="form-group col-md-3">
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-radio-input" name="diagnostico_clinico" value="2"> IRAG
              </label>
            </div>
          </div>

          <div class="form-group col-md-3">
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-radio-input" name="diagnostico_clinico" value="3"> Neumonia
              </label>
            </div>
          </div>
          <div class="form-group col-md-3">Otro Especificar
<input type="text" name="diagnostico_otro" class="form-control">
          </div>
        </div>
        </fieldset>



        <fieldset class="col-12 col-md-12 panel1">
          <legend>DATOS EN CASO DE HOSPITALIZACION Y/O AISLAMIENTO</legend>

          <div class="row tabla2">
            <div class="form-group col-md-3">
              <label for="id_paciente">Fecha de aislamiento</label>
              <input type="date" name="fecha_aislamiento" class="form-control">
            </div>
            <div class="form-group col-md-3">
              <label for="id_paciente">Lugar Aislamiento</label>
              <input type="text" name="lugar_aislamiento" class="form-control">
            </div>
            <div class="form-group col-md-3">
              <label for="id_paciente">Fecha de Internacion</label>
              <input type="date" name="fecha_internacion" class="form-control">
            </div>
            <div class="form-group col-md-3">
              <label for="id_paciente">Establecimiento de salud internacion</label>
              <input type="text" name="establecimiento_internacion" class="form-control">
            </div>
          </div>


          <div class="row tabla2">
            <div class="form-group col-md-2">
              <label for="id_paciente">Ventilacion Mecanica</label>
            </div>
            <div class="form-group col-md-2">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-radio-input" name="ventilacion_mecanica" value="1"> Si
                </label>
              </div>
            </div>
            <div class="form-group col-md-2">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-radio-input" name="ventilacion_mecanica" value="2"> No
                </label>
              </div>
            </div>
            <div class="form-group col-md-2">
              <label for="id_paciente">Terapia Intensiva</label>
            </div>
            <div class="form-group col-md-2">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-radio-input" name="terapia_intensiva" value="1"> Si
                </label>
              </div>
            </div>
            <div class="form-group col-md-2">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-radio-input" name="terapia_intensiva" value="2"> No
                </label>
              </div>
            </div>

          </div>


          <div class="row tabla4">
            <div class="form-group col-md-3">
            Fecha Ingreso UTI
          </div>
            <div class="form-group col-md-3">
            <input type="date" name="fecha_ingreso_uti" class="form-control">
            </div>
          </div>



        </fieldset>




        <fieldset class="col-12 col-md-12 panel1">
          <legend> ENFERMEDADES DE BASE O CONDICIONES DE RIESGO</legend>


          <div class="row tabla2">
            <div class="col">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-radio-input" name="riesgo" value="2"> Presenta
                </label>
              </div>
            </div>
            <div class="col">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-radio-input" name="riesgo" value="1"> No presenta
                </label>
              </div>
            </div>
          </div>

<br>

          <div class="row riesgo tabla3">
            <div class="form-group col-md-3">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-radio-input" name="hipertension_arterial" value="1"> Hipertensión Arterial
                </label>
              </div>
            </div>

            <div class="form-group col-md-3">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-radio-input" name="obesidad" value="2"> Obesidad
                </label>
              </div>
            </div>

            <div class="form-group col-md-3">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-radio-input" name="diabetes" value="3"> Diabetes
                </label>
              </div>
            </div>

            <div class="form-group col-md-3">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-radio-input" name="embarazo" value="3"> Embarazo
                </label>
              </div>
            </div>
          </div>
          <div class="row riesgo tabla3">
            <div class="form-group col-md-3">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-radio-input" name="hipertension_arterial" value="1"> Enfermedades cardiaca
                </label>
              </div>
            </div>

            <div class="form-group col-md-3">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-radio-input" name="obesidad" value="2"> Enfermedad respiratoria
                </label>
              </div>
            </div>

            <div class="form-group col-md-3">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-radio-input" name="diabetes" value="3"> Enfermedades Renal Crónica
                </label>
              </div>
            </div>

            <div class="form-group col-md-3">
                <input type="text" name="otro_enfermedad" class="form-control" placeholder="Otro">
            </div>
          </div>

        </fieldset>


        <fieldset class="col-12 col-md-12 panel1">
          <legend> LABORATORIO</legend>

          <div class="row tabla2">
            <div class="col">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-radio-input" name="muestra_laboratorio" value="2"> No
                </label>
              </div>
            </div>
            <div class="col">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-radio-input" name="muestra_laboratorio" value="1"> Si
                </label>
              </div>
            </div>
          </div>
<br>

          <div class="row tabla4 muestra_laboratorio">
            <div class="form-group col-md-3">
            Lugar de toma de muestra
          </div>
            <div class="form-group col-md-3">
            <input type="text" name="lugar_laboratorio" class="form-control">
            </div>
          </div>

          <div class="row muestra_laboratorio">
              <div class="form-group col-md-12">
                <b>Tipo de muestra tomada</b>
              </div>
          </div>

          <div class="row riesgo tabla3 muestra_laboratorio">
            <div class="form-group col-md-4">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-radio-input" name="tipo_muestra" value="1"> Aspirado
                </label>
              </div>
            </div>

            <div class="form-group col-md-4">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-radio-input" name="tipo_muestra" value="2"> Lavado Bronco alveolar
                </label>
              </div>
            </div>

            <div class="form-group col-md-4">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-radio-input" name="tipo_muestra" value="3"> Hisopado Nasofaríngeo
                </label>
              </div>
            </div>
          </div>


          <div class="row riesgo tabla3 muestra_laboratorio">
            <div class="form-group col-md-6">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-radio-input" name="tipo_muestra" value="1"> Hisopado Combinado
                </label>
              </div>
            </div>

            <div class="form-group col-md-6">
              <input type="text" name="otro_tipo_muestra" class="form-control" placeholder="Otro">
            </div>
          </div>

          <div class="row tabla2 muestra_laboratorio">
            <div class="form-group col-md-4">
              <label for="id_paciente">Nombre del Laboratorio que tomara la muestra</label>
              <input type="text" name="nombre_laboratorio" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label for="id_paciente">Fecha toma de muestra</label>
              <input type="date" name="fecha_toma_muestra" class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label for="id_paciente">Fecha de envio</label>
              <input type="date" name="fecha_envio_muestra" class="form-control">
            </div>
          </div>


          <div class="row tabla2 muestra_laboratorio">
            <div class="form-group col-md-6">
              <label for="id_paciente">Responsable de Toma de Muestra</label>
              <input type="text" name="responsable_muestra" class="form-control">
            </div>
            <div class="form-group col-md-6">
              <label for="id_paciente">observaciones</label>
              <input type="text" name="observaciones" class="form-control">
            </div>
          </div>

          <div class="row tabla2 muestra_laboratorio">
            <div class="form-group col-md-3">
              <label for="id_paciente">Resultado Laboratorio</label>
            </div>
            <div class="form-group col-md-3">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-radio-input" name="resultado_laboratorio" value="1"> Positivo
                </label>
              </div>
            </div>
            <div class="form-group col-md-3">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-radio-input" name="resultado_laboratorio" value="2"> Negativo
                </label>
              </div>
            </div>
            <div class="form-group col-md-3">
              <label for="id_paciente">Fecha:</label>
              <input type="date" name="fecha_resultado_laboratorio" class="form-control">
            </div>
          </div>


        </fieldset>


      <fieldset class="col-12 col-md-12 panel1">
        <legend> DATOS DEL PERSONAL QUE NOTIFICA</legend>
          <div class="row tabla2">
            <div class="form-group col-md-6">
              <label for="id_paciente">Nombre y apellido</label>
              <input type="text" name="nombre_notifica" class="form-control">
            </div>
            <div class="form-group col-md-6">
              <label for="id_paciente">Telefono</label>
              <input type="number" name="telefono_notifica" class="form-control">
            </div>
          </div>

          <div>
            <input type="submit" value="Registrar" class="btn btn-success">
          </div>
      </fieldset>
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
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/ActualizaTipo') }}" autocomplete="off">
          {{ csrf_field() }}
            <table class="table">
              <tr>
                <td>Tipo</td>
                <td><input type="text" name="nombre_tipo" id="nombre_tipo" class='form-control' required></td>
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
              <form name="registro" action="{{ url('/EliminarTipo') }}" method="post">
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


function radio1(dato)
{
  $('input[name='+dato+']').prop("checked", false);
}

$('input:radio').change(function() {
   switch(this.name)
   {
     case 'ocupacion':
     $("input[name=ocupacion_otro]").val('');
     break;
     case 'influenza':
     $("input[name=fecha_influenza]").val('');
     break;
     case 'viaje':
     (this.value=="1")?$( ".viaje" ).hide("fast"):$( ".viaje" ).show("fast");
     break;
     case 'contacto_positivo':
     (this.value=="1")?$( ".contagio" ).hide("fast"):$( ".contagio" ).show("fast");
     break;
     case 'riesgo':
     (this.value=="1")?$( ".riesgo" ).hide("fast"):$( ".riesgo" ).show("fast");
     break;
     case 'muestra_laboratorio':
     (this.value=="1")?$( ".muestra_laboratorio" ).show("fast"):$( ".muestra_laboratorio" ).hide("fast");
     break;
   }
});

$(document).ready(function(){
$( ".viaje" ).hide();
$( ".contagio" ).hide();
$( ".riesgo" ).hide();
$( ".muestra_laboratorio" ).hide();


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
  url  = '{{ asset("/index.php/BuscarTipo")}}/'+id;
 $.getJSON(url, null, function(data) {
     if(data.length>0)
     {
         $.each(data, function(field, e)
         {
             $('#nombre_tipo').val(e.nombre_tipo);
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


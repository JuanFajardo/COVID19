<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
<title></title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <br/>
<style type="text/css">
<!--
	p {margin: 0; padding: 0;}	.ft10{font-size:10px;font-family:Times;color:#000000;}
	.ft11{font-size:10px;font-family:Times;color:#000000;}
	.ft12{font-size:10px;font-family:Times;color:#000000;}
	.ft13{font-size:10px;font-family:Times;color:#363435;}
	.ft14{font-size:10px;font-family:Times;color:#363435;}
	.ft15{font-size:11px;font-family:Times;color:#363435;}
	.ft16{font-size:10px;font-family:Times;color:#ffffff;}
	.ft17{font-size:14px;font-family:Times;color:#282828;}
	.ft18{font-size:10px;line-height:17px;font-family:Times;color:#000000;}
	.ft19{font-size:10px;line-height:14px;font-family:Times;color:#000000;}
	.ft110{font-size:10px;line-height:14px;font-family:Times;color:#363435;}
	.ft111{font-size:10px;line-height:16px;font-family:Times;color:#363435;}
-->
</style>
</head>
<body bgcolor="#A0A0A0" vlink="blue" link="blue">
<div id="page1-div" style="position:relative;width:918px;height:1188px;">
<img width="918" height="1188" src="{{asset('images/target001.png')}}" alt="background image"/>
<p style="position:absolute;top:125px;left:51px;white-space:nowrap" class="ft10">Establecimiento&#160;de&#160;Salud………………………….……………………………………………….</p>
<p style="position:absolute;top:125px;left:488px;white-space:nowrap" class="ft10">Cód.. Estab……………….…………..</p>
<p style="position:absolute;top:125px;left:690px;white-space:nowrap" class="ft10">Red&#160;de&#160;Salud……………………...………………..</p>
<p style="position:absolute;top:146px;left:51px;white-space:nowrap" class="ft10">Departamento&#160;………………………………</p>
<p style="position:absolute;top:146px;left:334px;white-space:nowrap" class="ft10">Municipio………………..……. Fecha&#160;de&#160;Notificación…….…/…..…../………..</p>
<p style="position:absolute;top:146px;left:747px;white-space:nowrap" class="ft10">Sem&#160;Epidem……………..…</p>
<p style="position:absolute;top:168px;left:51px;white-space:nowrap" class="ft10">Caso&#160;identificado&#160;por&#160;búsqueda&#160;activa</p>
<p style="position:absolute;top:168px;left:341px;white-space:nowrap" class="ft10">No</p>
<p style="position:absolute;top:168px;left:431px;white-space:nowrap" class="ft10">Si</p>
<p style="position:absolute;top:204px;left:690px;white-space:nowrap" class="ft10">Sexo: &#160;</p>
<p style="position:absolute;top:204px;left:756px;white-space:nowrap" class="ft10">F @if($paciente->sexo=="M")<input type="checkbox" checked="checked">@endif</p>
<p style="position:absolute;top:204px;left:814px;white-space:nowrap" class="ft10">M @if($paciente->sexo=="F")<input type="checkbox" checked="checked">@endif</p>
<p style="position:absolute;top:222px;left:51px;white-space:nowrap" class="ft10">Nº&#160;Carnet&#160;de&#160;Identidad&#160;/Pasaporte: {{$paciente->ci or 'No tiene'}}.</p>
<p style="position:absolute;top:222px;left:556px;white-space:nowrap" class="ft10">Fecha&#160;de&#160;Nacimiento……………/………../…………..</p>
<p style="position:absolute;top:222px;left:804px;white-space:nowrap" class="ft10">Edad………...…..</p>
<p style="position:absolute;top:240px;left:51px;white-space:nowrap" class="ft10">Lugar&#160;de&#160;residencia&#160;; Departamento: <b>Potosi</b>.</p>
<p style="position:absolute;top:240px;left:424px;white-space:nowrap" class="ft10">Municipio: <b>Potosi</b></p>
<p style="position:absolute;top:240px;left:636px;white-space:nowrap" class="ft10">País: <b>Bolivia</b></p>
<p style="position:absolute;top:256px;left:51px;white-space:nowrap" class="ft10">Calle: <b>{{$paciente->domicilio}}</b></p>
<p style="position:absolute;top:256px;left:396px;white-space:nowrap" class="ft10">Zona: <b>{{$paciente->zona}}</b></p>
<p style="position:absolute;top:256px;left:611px;white-space:nowrap" class="ft10">Nº………………</p>
<p style="position:absolute;top:256px;left:690px;white-space:nowrap" class="ft10">Teléfono: <b>{{$paciente->telefono}}</b></p>
<p style="position:absolute;top:273px;left:51px;white-space:nowrap" class="ft10">Si&#160;es&#160;menor&#160;de&#160;edad&#160;Nombre&#160;del&#160;Padre/Madre&#160;o&#160;apoderado:<b>{{$laboratorio->apoderado}}</b> ..</p>
<p style="position:absolute;top:273px;left:611px;white-space:nowrap" class="ft10">Teléfono&#160;del&#160;apoderado: <b>0</b></p>
<p style="position:absolute;top:304px;left:51px;white-space:nowrap" class="ft10">Ocupación:</p>
<p style="position:absolute;top:256px;left:611px;white-space:nowrap" class="ft10">Nº………………</p>
<p style="position:absolute;top:304px;left:137px;white-space:nowrap" class="ft10">Personal&#160;de&#160;Salud @if($laboratorio->ocupacion==1)<input type="checkbox" checked="checked">@endif</p>
<p style="position:absolute;top:304px;left:396px;white-space:nowrap" class="ft10">Personal&#160;de&#160;Laboratorio
                                                                                                @if($laboratorio->ocupacion==2)
                                                                                                <input type="checkbox" checked="checked">
                                                                                                @endif</p>
<p style="position:absolute;top:304px;left:642px;white-space:nowrap" class="ft10">Otro&#160;:……………………………….…………….</p>
<p style="position:absolute;top:322px;left:51px;white-space:nowrap" class="ft10">Antecedente&#160;de&#160;vacunación&#160;&#160;para&#160;influenza&#160;</p>
<p style="position:absolute;top:322px;left:371px;white-space:nowrap" class="ft10">NO
@if($laboratorio->influenza==2)
<input type="checkbox" checked="checked">
@endif</p>
</p>
<p style="position:absolute;top:322px;left:457px;white-space:nowrap" class="ft10">SI
@if($laboratorio->influenza==1)
<input type="checkbox" checked="checked">
@endif</p>
</p>
<p style="position:absolute;top:322px;left:582px;white-space:nowrap" class="ft10">Fecha:... {{$laboratorio->fecha_influenza}}</p>
<p style="position:absolute;top:341px;left:51px;white-space:nowrap" class="ft11"><b>¿Tuvo un viaje a&#160;un lugar de&#160;riesgo dentro o&#160;fuera&#160;del&#160;país&#160;?&#160;&#160;&#160;</b></p>
<p style="position:absolute;top:341px;left:457px;white-space:nowrap" class="ft10">NO
@if($laboratorio->viaje==2)
<input type="checkbox" checked="checked">
@endif</p>

</p>
<p style="position:absolute;top:341px;left:556px;white-space:nowrap" class="ft10">SI
@if($laboratorio->viaje==1)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:359px;left:51px;white-space:nowrap" class="ft10">¿Dónde&#160;(<i>país&#160;y ciudad&#160;</i>)? &#160;&#160;&#160;&#160;:{{$laboratorio->pais_viaje}} Fecha&#160;de&#160;retorno&#160;de&#160;viaje: &#160;&#160;&#160;:{{$laboratorio->fecha_viaje}} .&#160;&#160;&#160;&#160;&#160;Hora&#160;&#160;&#160;: {{$laboratorio->hora_viaje}} </p>
<p style="position:absolute;top:377px;left:51px;white-space:nowrap" class="ft10">&#160;Empresa:……….……………...…………..……&#160;&#160;&#160;&#160;&#160;N°&#160;vuelo:……..………...……. &#160;&#160;&#160;&#160;&#160;N°&#160;asiento:……...………..…</p>
<p style="position:absolute;top:413px;left:114px;white-space:nowrap" class="ft10">NO

@if($laboratorio->contacto_positivo==2)
<input type="checkbox" checked="checked">
@endif

</p>
<p style="position:absolute;top:413px;left:305px;white-space:nowrap" class="ft10">SI

@if($laboratorio->contacto_positivo==1)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:413px;left:396px;white-space:nowrap" class="ft10">Fecha&#160;de&#160;contacto: {{$laboratorio->fecha_contacto_positivo}}  </p>
<p style="position:absolute;top:431px;left:51px;white-space:nowrap" class="ft19">Nombre&#160;y&#160;Apellido&#160;(&#160;del&#160;caso&#160;positivo): {{$contagio->nombre}} Teléfono&#160;del&#160;(caso&#160;positivo):{{$contagio->telefono}} <br/>Lugar&#160;de&#160;contacto&#160;con&#160;el&#160;caso&#160;positivo:<br/>País:………………….…………</p>
<p style="position:absolute;top:463px;left:188px;white-space:nowrap" class="ft10">Departamento/Estado……………….……………..</p>
<p style="position:absolute;top:463px;left:457px;white-space:nowrap" class="ft10">Municipio………………………………….</p>
<p style="position:absolute;top:463px;left:642px;white-space:nowrap" class="ft10">Ciudad&#160;/localidad………………...……………</p>
<p style="position:absolute;top:519px;left:51px;white-space:nowrap" class="ft10">Tos&#160;seca

@if($laboratorio->tos_seca==1)
<input type="checkbox" checked="checked">
@endif

</p>
<p style="position:absolute;top:519px;left:137px;white-space:nowrap" class="ft10">Fiebre

@if($laboratorio->fiebre==1)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:519px;left:228px;white-space:nowrap" class="ft10">Malestar&#160;General
@if($laboratorio->malestar_general==1)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:519px;left:371px;white-space:nowrap" class="ft10">Cefalea
@if($laboratorio->cefalea==1)
<input type="checkbox" checked="checked">
@endif

</p>
<p style="position:absolute;top:519px;left:457px;white-space:nowrap" class="ft10">Dificultad&#160;Respiratoria

@if($laboratorio->dificultad_respiratoria==1)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:519px;left:642px;white-space:nowrap" class="ft10">Mialgias&#160;
@if($laboratorio->mialgias==1)
<input type="checkbox" checked="checked">
@endif

</p>
<p style="position:absolute;top:519px;left:747px;white-space:nowrap" class="ft10">Dolor&#160;de&#160;garganta
@if($laboratorio->dolor_de_garganta==1)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:541px;left:51px;white-space:nowrap" class="ft10">Perdida&#160;y/o&#160;disminución&#160;del&#160;sentido&#160;del&#160;&#160;olfato
@if($laboratorio->perdida_olfato==1)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:541px;left:371px;white-space:nowrap" class="ft10">Perdida&#160;y/o&#160;disminución&#160;del&#160;sentido&#160;del&#160;gusto
@if($laboratorio->perdida_gusto==1)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:541px;left:665px;white-space:nowrap" class="ft10">Asintomático&#160;
@if($laboratorio->asintomatico==1)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:541px;left:780px;white-space:nowrap" class="ft10">Otros&#160;

@if($laboratorio->otros==1)
<input type="checkbox" checked="checked">
@endif

</p>
<p style="position:absolute;top:560px;left:51px;white-space:nowrap" class="ft11"><b>Estado&#160;actual&#160;del&#160;paciente( al&#160;momento del&#160;reporte)</b></p>
<p style="position:absolute;top:576px;left:100px;white-space:nowrap" class="ft10">Leve&#160;
@if($laboratorio->estado_actual==1)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:576px;left:188px;white-space:nowrap" class="ft10">Grave&#160;

@if($laboratorio->estado_actual==2)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:576px;left:334px;white-space:nowrap" class="ft10">Fallecido
@if($laboratorio->estado_actual==3)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:576px;left:488px;white-space:nowrap" class="ft10">Fecha&#160;de&#160;defunción…….…/……..../….……</p>
<p style="position:absolute;top:596px;left:51px;white-space:nowrap" class="ft11"><b>Diagnostico clínico</b></p>
<p style="position:absolute;top:612px;left:111px;white-space:nowrap" class="ft10">IRA&#160;</p>
<p style="position:absolute;top:612px;left:218px;white-space:nowrap" class="ft10">IRAG</p>
<p style="position:absolute;top:612px;left:334px;white-space:nowrap" class="ft10">Neumonía&#160;</p>
<p style="position:absolute;top:612px;left:488px;white-space:nowrap" class="ft10">Otro&#160;especificar……………………………………………..……</p>
<p style="position:absolute;top:649px;left:51px;white-space:nowrap" class="ft10">Fecha&#160;de&#160;aislamiento:{{$laboratorio->fecha_aislamiento}}  &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Lugar&#160;de&#160;Aislamiento: {{$laboratorio->lugar_aislamiento}} </p>
<p style="position:absolute;top:669px;left:51px;white-space:nowrap" class="ft10">Fecha&#160;de&#160;internación: {{$laboratorio->fecha_internacion}} </p>
<p style="position:absolute;top:669px;left:334px;white-space:nowrap" class="ft10">Establecimiento&#160;de&#160;salud&#160;de&#160;Internación: {{$laboratorio->lugar_aislamiento}} </p>
<p style="position:absolute;top:690px;left:51px;white-space:nowrap" class="ft10">Ventilación&#160;mecánica: &#160;&#160;&#160;No
@if($laboratorio->ventilacion_mecanica==2)
<input type="checkbox" checked="checked">
@endif

</p>
<p style="position:absolute;top:690px;left:273px;white-space:nowrap" class="ft10">Si
@if($laboratorio->ventilacion_mecanica==1)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:690px;left:371px;white-space:nowrap" class="ft10">&#160;&#160;&#160;&#160;&#160;Terapia&#160;Intensiva&#160;</p>
<p style="position:absolute;top:690px;left:515px;white-space:nowrap" class="ft10">No&#160;
@if($laboratorio->terapia_intensiva==2)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:690px;left:562px;white-space:nowrap" class="ft10">Si&#160;
@if($laboratorio->terapia_intensiva==1)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:690px;left:636px;white-space:nowrap" ventilacion_mecanica="2t10">Fecha&#160;de&#160;Ingreso&#160;&#160;a&#160;UTI {{$laboratorio->fecha_ingreso_uti}} </p>
<p style="position:absolute;top:724px;left:51px;white-space:nowrap" class="ft10">Presenta&#160;
@if($laboratorio->riesgo==1)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:724px;left:165px;white-space:nowrap" class="ft10">No&#160;presenta
@if($laboratorio->riesgo==2)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:747px;left:51px;white-space:nowrap" class="ft10">Hipertensión&#160;Arterial&#160;
@if($laboratorio->hipertension_arterial==1)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:747px;left:298px;white-space:nowrap" class="ft10">Obesidad
@if($laboratorio->obesidad==1)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:747px;left:396px;white-space:nowrap" class="ft10">Diabetes
@if($laboratorio->diabetes==1)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:747px;left:488px;white-space:nowrap" class="ft10">Embarazo
@if($laboratorio->embarazo==1)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:767px;left:51px;white-space:nowrap" class="ft10">Enfermedades&#160;cardiaca
@if($laboratorio->enfermedad_cardiaca==1)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:767px;left:298px;white-space:nowrap" class="ft10">Enfermedad&#160;respiratoria
@if($laboratorio->enfermedad_respiratoria==1)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:767px;left:513px;white-space:nowrap" class="ft10">Enfermedades&#160;Renal&#160;Crónica&#160;
@if($laboratorio->enfermedad_renal_cronica==1)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:767px;left:747px;white-space:nowrap" class="ft10">Otro………………………………………..
@if($laboratorio->otro_enfermedad==1)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:914px;left:51px;white-space:nowrap" class="ft10">Se&#160;tomó&#160;muestra&#160;para&#160;Laboratorio: &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;</p>
<p style="position:absolute;top:914px;left:334px;white-space:nowrap" class="ft10">NO
@if($laboratorio->muestra_laboratorio==2)
<input type="checkbox" checked="checked">
@endif

</p>
<p style="position:absolute;top:914px;left:396px;white-space:nowrap" class="ft10">SI
@if($laboratorio->muestra_laboratorio==1)
<input type="checkbox" checked="checked">
@endif

</p>
<p style="position:absolute;top:914px;left:488px;white-space:nowrap" class="ft10">lugar&#160;de&#160;toma&#160;de&#160;muestra&#160;: {{$laboratorio->lugar_laboratorio}} </p>
<p style="position:absolute;top:931px;left:51px;white-space:nowrap" class="ft110"><b>Tipo de muestra&#160;tomada:<br/></b>Aspirado
@if($laboratorio->tipo_muestra==1)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:945px;left:273px;white-space:nowrap" class="ft14">Lavado&#160;Bronco&#160;alveolar&#160;
@if($laboratorio->tipo_muestra==2)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:945px;left:582px;white-space:nowrap" class="ft14">Otra&#160;(especificar): …………....................................</p>
<p style="position:absolute;top:963px;left:51px;white-space:nowrap" class="ft14">Hisopado&#160;Nasofaríngeo
@if($laboratorio->tipo_muestra==3)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:963px;left:298px;white-space:nowrap" class="ft14">Hisopado&#160;Combinado
@if($laboratorio->tipo_muestra==4)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:985px;left:51px;white-space:nowrap" class="ft14">Nombre&#160;de&#160;Lab..&#160;que&#160;procesara&#160;la&#160;muestra {{$laboratorio->nombre_laboratorio}} .......................Fecha&#160;de&#160;toma&#160;de&#160;muestra: : {{$laboratorio->fecha_toma_muestra}} ..&#160;Fecha&#160;de&#160;envío : {{$laboratorio->fecha_envio_muestra}}  &#160;</p>
<p style="position:absolute;top:1005px;left:51px;white-space:nowrap" class="ft111">Responsable&#160;de&#160;Toma&#160;de&#160;Muestra&#160;: {{$laboratorio->responsable_muestra}} Firma&#160;y&#160;sello&#160;……………………...………………………<br/>Observaciones&#160;: {{$laboratorio->observaciones}} .</p>
<p style="position:absolute;top:1040px;left:52px;white-space:nowrap" class="ft15"><b>Resultado&#160;de&#160;Laboratorio&#160; &#160;&#160;</b></p>
<p style="position:absolute;top:1040px;left:273px;white-space:nowrap" class="ft15"><b>Positivo</b>

@if($laboratorio->resultado_laboratorio==1)
<input type="checkbox" checked="checked">
@endif

</p>
<p style="position:absolute;top:1040px;left:424px;white-space:nowrap" class="ft15"><b>Negativo</b>
@if($laboratorio->resultado_laboratorio==2)
<input type="checkbox" checked="checked">
@endif
</p>
<p style="position:absolute;top:1040px;left:583px;white-space:nowrap" class="ft15"><b>Fecha : {{$laboratorio->fecha_resultado_laboratorio}}  </b></p>
<p style="position:absolute;top:1070px;left:51px;white-space:nowrap" class="ft13"><b>DATOS&#160;DEL&#160;PERSONAL&#160;QUE&#160;NOTIFICA:</b></p>
<p style="position:absolute;top:1089px;left:51px;white-space:nowrap" class="ft14">Nombre&#160;y&#160;Apellido: {{$laboratorio->nombre_notifica}}  Tel. cel. {{$laboratorio->telefono_notifica}}  </p>
<p style="position:absolute;top:1109px;left:51px;white-space:nowrap" class="ft14">Firma&#160;y&#160;sello: .................................................................................. Sello&#160;del&#160;EESS...........................................</p>
<p style="position:absolute;top:1126px;left:61px;white-space:nowrap" class="ft11"><b>Este&#160;formulario tiene&#160;el&#160;carácter&#160;de declaración jurada&#160;que&#160;realiza&#160;el&#160;equipo de salud,&#160;contiene&#160;información sujeta&#160;a&#160;vigilancia&#160;epidemiológica,&#160;por esta&#160;razón debe&#160;ser&#160;</b></p>
<p style="position:absolute;top:1143px;left:282px;white-space:nowrap" class="ft11"><b>llenada&#160;correctamente&#160;en las secciones&#160;necesarias y&#160;enviadas oportunamente</b></p>
<p style="position:absolute;top:897px;left:434px;white-space:nowrap" class="ft16"><b>8. LABORATORIO</b></p>
<p style="position:absolute;top:396px;left:51px;white-space:nowrap" class="ft11"><b>¿Tuvo contacto con un&#160;caso confirmado&#160;de&#160;COVID-19 en los&#160;14&#160;días previos&#160;al&#160;inicio de síntomas,&#160;&#160;en domicilio &#160;o establecimiento de salud</b></p>
<p style="position:absolute;top:290px;left:382px;white-space:nowrap" class="ft16"><b>3. ANTECEDENTES&#160;EPIDEMIOLOGICOS</b></p>
<p style="position:absolute;top:480px;left:429px;white-space:nowrap" class="ft16"><b>4. DATOS&#160;CLÍNICOS</b></p>
<p style="position:absolute;top:630px;left:326px;white-space:nowrap" class="ft16"><b>5. DATOS&#160;EN CASO&#160;DE&#160;HOSPITALIZACION&#160;&#160;Y/O&#160;AISLAMIENTO</b></p>
<p style="position:absolute;top:42px;left:360px;white-space:nowrap" class="ft17"><b>FICHA&#160;EPIDEMIOLÓGICA&#160;Y&#160;SOLICITUD DE&#160;ESTUDIOS&#160;DE&#160;LABORATORIO &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;</b></p>
<p style="position:absolute;top:64px;left:566px;white-space:nowrap" class="ft17"><b>COVID-19</b></p>
<p style="position:absolute;top:786px;left:178px;white-space:nowrap" class="ft16"><b>7. DATOS&#160;DE&#160;PERSONAS&#160;CON&#160;LAS&#160;QUE&#160;EL&#160;CASO&#160;SOSPECHOSO&#160;ESTUVO&#160;EN CONTACTO&#160;&#160;&#160;&#160;&#160;(desde&#160;el&#160;inicio de los&#160;síntomas)</b></p>
<p style="position:absolute;top:108px;left:358px;white-space:nowrap" class="ft16"><b>1. DATOS&#160;DEL&#160;ESTABLECIMIENTO&#160;NOTIFICADOR</b></p>
<p style="position:absolute;top:185px;left:377px;white-space:nowrap" class="ft16"><b>2. IDENTIFICACION&#160;DEL&#160;CASO/PACIENTE</b></p>
<p style="position:absolute;top:204px;left:51px;white-space:nowrap" class="ft10">Nombre&#160;y&#160;Apellido: {{$paciente->nombre}}.</p>
<p style="position:absolute;top:807px;left:69px;white-space:nowrap" class="ft11"><b>Nombre&#160;y apellidos</b></p>
<p style="position:absolute;top:708px;left:336px;white-space:nowrap" class="ft16"><b>6. ENFERMEDADES&#160;DE&#160;BASE&#160;O&#160;CONDICIONES&#160;DE&#160;RIESGO</b></p>
<p style="position:absolute;top:500px;left:51px;white-space:nowrap" class="ft10">Fecha&#160;de&#160;inicio&#160;de&#160;&#160;síntomas&#160; {{$laboratorio->fecha_inicio_sintomas}}  .&#160;</p>
<p style="position:absolute;top:807px;left:238px;white-space:nowrap" class="ft11"><b>Relación</b></p>
<p style="position:absolute;top:807px;left:351px;white-space:nowrap" class="ft11"><b>Edad</b></p>
<p style="position:absolute;top:807px;left:430px;white-space:nowrap" class="ft11"><b>Teléfono&#160;</b></p>
<p style="position:absolute;top:807px;left:548px;white-space:nowrap" class="ft11"><b>Dirección&#160;</b></p>
<p style="position:absolute;top:807px;left:640px;white-space:nowrap" class="ft11"><b>Fecha&#160;de&#160;contacto</b></p>
<p style="position:absolute;top:807px;left:781px;white-space:nowrap" class="ft11"><b>lugar de&#160;contacto</b></p>
</div>
</body>
</html>


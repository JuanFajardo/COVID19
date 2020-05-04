<html>
<body>
<table>
<tr><td><img src="../public/asset/img/profile-img.jpg" alt="" class="img-fluid rounded-circle"></td><td><p align="center"><strong>CONSENTIMIENTO Y COMPROMISO PARA CUMPLIR CUARENTENA</strong></p> 
<p align="center"><strong>EN EL CONTEXTO DEL COVID-19</strong></p>
</td>
</tr></table>
<p></p>
<p>
Ante la expansión del COVID-19, los países implementan acciones de prevención para evitar el riesgo de introducción, transmisión y propagación de la enfermedad en el territorio nacional. Las medidas de salud pública para lograr estos objetivos incluyen la cuarentena, con el objetivo de disminuir el riesgo de contagio y la diseminación de la enfermedad.
</p>
<p> 
Los países tienen la autoridad legal para aplicar la cuarentena en sus territorios. El Artículo 3 del Reglamento Sanitario Internacional (2005), establece que la misma debe ser totalmente respetuosa de la dignidad, los derechos humanos y las libertades fundamentales de las personas.
</p>
<p> 
La cuarentena de personas es la restricción de movimiento, desplazamiento o actividades
o la separación de personas que no están enfermas, pero que pueden estar expuestas a
un agente infeccioso o a enfermedad, con el objetivo de evitar, disminuir o retrasar la
transmisión, en este caso, del COVID-19. 
En este contexto y teniendo conocimiento de la información precedente:</p>
<p> 
Yo : {!! $paciente->nombre !!}_________________________________________C.I.________ </p>

<p>Domicilio: {!! $paciente->domicilio !!}________________________________Teléfonos:_{!! $paciente->telefono !!}______ </p>
<p></p> 
<p>Doy mi consentimiento y me comprometo a cumplir estrictamente el protocolo de la
cuarentena impuesta por la Autoridad de Salud del Gobierno del Estado Plurinacional de
Bolivia.</p>

<p>En caso de no cumplir o interrumpir, de faltar o transgredir con la cuarentena, asumiré todos
los costos y gastos que se hubieren realizado en el transporte, hospedaje, alimentación y
otros que contemple la cuarentena. Asimismo, de no cumplir con la cuarentena y
comprobarse en forma posterior que tengo el diagnostico de COVID-19, seré pasible a
proceso legal por atentar contra la salud pública.</p> 
<p></p> 
<p></p> 
<p></p> 
<p>Croquis domicilio:                   >>>>>>>>>>>>>>>                                                                  Firma: ___________________</p> 
<img width="600" src="https://maps.googleapis.com/maps/api/staticmap?autoscale=2&center={!! $consentimiento->dom_lat !!},{!! $consentimiento->dom_lon !!}&zoom=18&scale=false&size=600x300&maptype=roadmap&key=AIzaSyAgBFv0lXXtIi4BkhORvmGUlHMupTJFwU0&format=png&visual_refresh=true&markers=size:big%7Ccolor:0xff0000%7Clabel:1%7C{!! $consentimiento->dom_lat !!},{!! $consentimiento->dom_lon !!}" alt="Google Map of {!! $consentimiento->dom_lat !!},{!! $consentimiento->dom_lon !!}">
 
</body>
</html>
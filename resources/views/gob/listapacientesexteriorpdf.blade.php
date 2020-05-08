<html>
<body>
<table>
<tr><td><img src="../public/asset/img/profile-img.jpg" alt="" class="img-fluid rounded-circle"></td><td><p align="center"><strong>TARJETA PARA MONITOREO DE SINTOMAS </strong></p> 
<p align="center">(Esta tarjeta debe ser llenada por ciudadanos Bolivianos y extranjeros que hayan estado en un pais O TERRITORIO QUE REPORTO LA TRANSMISION LOCAL DE COVID-19 en los ultimos 14 dias y actualmente no presente ni fiebre ni tos)</p>
</td>
</tr></table>
<p></p>
         <table border=1 cellspacing=0 cellpadding=2 bordercolor="666633" width="100%">
         	<tr align="center">
         		<th>Nombre</td> <td>Tipo de documento</td><td>Numero de documento</td><td>Nacionalidad</td><td>Telefono o whatsapp</td><td>Correo electronico</td><td>Direcciones previstas donde estara en los ultimos 14 dias :</td><td>Comentarios:</td>
          </r> 
            @foreach($pacientes as $paciente)
            @if($paciente->form_exterior()=='Con formulario')
            <tr>
               <td>{!! $paciente->nombre !!} {!! $paciente->paterno !!} {!! $paciente->materno !!} </td>
               <td>{!! $paciente->tipo_documento() !!}</td>
               <td>{!! $paciente->numero_documento() !!}</td>
               <td>{!! $paciente->nacionalidad !!}</td>
               <td>{!! $paciente->telefono !!}</td>
               <td>{!! $paciente->email() !!}</td>
               <td>{!! $paciente->direcciones_previstas() !!}</td>
               <td>{!! $paciente->comentarios() !!}</td>
            </tr>
            @endif
            @endforeach
         </table>	
</body>
</html>
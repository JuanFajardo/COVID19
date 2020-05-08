<html>
<body>
<table>
<tr><td><img src="../public/asset/img/profile-img.jpg" alt="" class="img-fluid rounded-circle"></td><td><p align="center"><strong>TARJETA PARA MONITOREO DE SINTOMAS </strong></p> 
<p align="center">(Esta tarjeta debe ser llenada por ciudadanos Bolivianos y extranjeros que hayan estado en un pais O TERRITORIO QUE REPORTO LA TRANSMISION LOCAL DE COVID-19 en los ultimos 14 dias y actualmente no presente ni fiebre ni tos)</p>
</td>
</tr></table>
<p></p>
         <table>
         	<tr>
         		<td>Nombre :</td> <td>{!! $paciente->nombre !!}	{!! $paciente->paterno !!} {!! $paciente->materno !!}</td>
          </tr>
          <tr>  
            <td>Tipo de documento : </td><td>{!! $paciente->tipo_documento() !!}</td>
         	</tr>	
          <tr>
            <td>Numero de documento : </td><td>{!! $paciente->numero_documento() !!}</td>
          </tr>
          <tr>
            <td>Nacionalidad : </td><td> {!! $paciente->nacionalidad !!}</td>
          </tr>
          <tr>
            <td>Telefono o whatsapp :</td><td>{!! $paciente->telefono !!}</td>
          </tr>
          <tr>
            <td>Correo electronico:</td><td>{!! $paciente->email() !!}</td>
          </tr>
          <tr>
            <td>Direcciones previstas donde estara en los ultimos 14 dias :</td><td>{!! $paciente->direcciones_previstas() !!}</td>
          </tr>
          <tr>
            <td>Comentarios:</td><td>{!! $paciente->comentarios() !!}</td>
          </tr> 
         </table>	       
     
 
</body>
</html>
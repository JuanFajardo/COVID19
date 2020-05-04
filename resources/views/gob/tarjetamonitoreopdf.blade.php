<html>
<body>
<table>
<tr><td><img src="../public/asset/img/profile-img.jpg" alt="" class="img-fluid rounded-circle"></td><td><p align="center"><strong>TARJETA DE MONITOREO DE SINTOMAS Y SEGUIMIENTO INDIVIDUAL DE CONTACTOS </strong></p> 
<p align="center"><strong>Y CASOS SOSPECHOSOS DE COVID-19</strong></p>
</td>
</tr></table>
<p></p>
         <table>
         	<tr>
         		<td>
         			NOMBRE : {!! $paciente->nombre !!}
         		</td>
            <td>
              EDAD : {!! $paciente->edad !!}
            </td>
         	</tr>	
          <tr>
            <td>
              FECHA INICIO SEGUIMIENTO : {!! $tarjetamonitoreo->fecha_inicio !!}
            </td>
            <td>              
            </td>
          </tr>
          <tr>
            <td>
              LUGAR : (Domicilio/seguimiento telefonico) {!! $paciente->domicilio !!} {!! $paciente->telefono !!}
            </td>
            <td>
              
            </td>
            <tr>
            <td>
              FECHA FIN DEL MONITOREO :  {!! $tarjetamonitoreo->fecha_fin !!}
            </td>
            <td>
              
            </td>
            <tr>
            <td>
              FACTOR DE RIESGO:
            </td>
            <td>
                Mayor de 60 anios : <input class="input100" type="checkbox" id="mayor_60" name="mayor_60" value="Si" class="form-control" @if($tarjetamonitoreo->mayor_60) checked @else @endif>
            </td>
          </tr>
          <tr>
            <td>
            </td>
            <td>
                Comorbilidades :  <input class="input100" type="checkbox" id="comorbilidades" name="comorbilidades" value="Si" class="form-control" @if($tarjetamonitoreo->comorbilidades) checked @else @endif>
            </td>
          </tr> 

         </table>	
           
      <table border="1" border-collapse="collapse" border-spacing="0px" width="100%" >
          <tr align="center">
                  <td><strong>Dia de seguim.</strong></td>
                  <td><strong>Fecha</strong></td>
                  <td><strong>Temperatura</strong></td>
                  <td><strong>Tos</strong></td>
                  <td><strong>Dificultad respiratoria</strong></td>
                  <td width="20"><strong>Responsable</strong></td>                  
          </tr>
          @foreach($dias as $dia)
          <tr align="center"> <td>{!! $dia[0] !!}</td>
               <td>{!! $dia[1] !!}</td>
               <td>{!! $dia[2] !!}</td>
               <td>{!! $dia[3] !!}</td>
               <td>{!! $dia[4] !!}</td>
               <td width="20">{!! $dia[5] !!}</td>
               
           </tr>
          @endforeach

      </table>
      <p>   
                    <span class="label-input100">LUGAR DE REFERENCIA O DERIVACION *</span>
                   {!! $tarjetamonitoreo->lugar_referencia !!}
      </p> 
      <p> 
                    <span class="label-input100">FECHA DE DERIVACION *</span>
                    {!! $tarjetamonitoreo->fecha_derivacion !!}
      </p>
      <p>  
                    <span class="label-input100">NOMBRE DE QUIEN DERIVA *</span>
                    {!! $tarjetamonitoreo->nombre_medico_deriva !!}
      </p>  
 
</body>
</html>
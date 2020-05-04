<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center> <h2> FORMULARIO UNICO DE ENVIO DE  LABORATORIO</h2> </center>
    <h2>TRANSPORTE  DE MUESTRAS PROVINCIAL Y/O INTERDEPARTAMENTAL</h2>
    <table border="1" width="100%">
      <tr>
        <th colspan="2">DATOS DEL REMITENTE</th>
      </tr>
      <tr >
        <th>NOMBRE:</th>
        <td>{{$remitente->nombre}}</td>
      </tr>
      <tr>
        <th>INSTITUCION/LABORATORIO:</th>
        <td>{{$remitente->institucion}}</td>
      </tr>
      <tr>
        <th>DIRECCIÓN:</th>
        <td>{{$remitente->direccion}}</td>
      </tr>
      <tr>
        <th>TELÉFONO:</th>
        <td>{{$remitente->telefono}}</td>
      </tr>
      <tr>
        <th>LOCALIDAD/CIUDAD:</th>
        <td>{{$remitente->localidad}}</td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <th>NOMBRE:</th>
        <td>{{$destinatario->nombre}}</td>
      </tr>
      <tr>
        <th>INSTITUCION/LABORATORIO:</th>
        <td>{{$destinatario->institucion}}</td>
      </tr>
      <tr>
        <th>DIRECCIÓN:</th>
        <td>{{$destinatario->direccion}}</td>
      </tr>
      <tr>
        <th>TELÉFONO:</th>
        <td>{{$destinatario->telefono}}</td>
      </tr>
      <tr>
        <th>LOCALIDAD/CIUDAD:</th>
        <td>{{$destinatario->localidad}}</td>
      </tr>
    </table>

    <table border="1" width="100%">
      <tr>
        <th colspan="3">DESCRIPCÓON DEL ENVÍO</th>
      </tr>
      <tr>
        <th> N° de tubos</th>
        <th> Cantidad Aproximada</th>
        <th> Descripción del envío</th>
      </tr>
      @foreach($detalles as $detalle)
      <tr>
        <td>{{$detalle->nro_tubos}}</td>
        <td>{{$detalle->cantidad}}</td>
        <td>{{$detalle->descripcion}}</td>
      </tr>
      @endforeach
    </table>

    <table border="1" width="100%">
      <tr>
        <th>TEMPERATURA DE TRANSPORTE 2 - 8 °C: {{$dato->temperatura}} °C </th>
        <th>PRUEBAS SOLICITADAS </th>
        <td>{{$dato->prueba}} </td>
      </tr>
    </table>

    <table border="1" width="100%">
      <tr>
        <td> <b>DATOS DE LA PERSONA QUE PREPARO EL ENVÍO</b> </td>
        <th rowspan="2">VoBo<br>Bioseguridad </th>
      </tr>
      <tr>
        <td> <b>FECHA:</b> {{$dato->fecha_envio}} </td>

      </tr>
      <tr>
        <td> <b>NOMBRE:</b> {{$dato->nombre}} </td>
        <th rowspan="3"></th>
      </tr>
      <tr>
        <td> <b>FIRMA:</b> <br><br> </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>

  </body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta de {{$nombre}}</title>
</head>
<body>
<label style="color: transparent">{{date_default_timezone_set("America/Lima")}}</label>
<table style="font-family: 'Roboto Mono',sans-serif;background-color: #0c5460; border: 1px solid #0c5460; color: white;width: 600px; height: 100px;">
    <tbody>
    <tr><td style="font-size: large; text-align: center">Tienes un correo de {{$nombre}}</td></tr>
    </tbody>
</table>
<table style="font-family: 'Roboto Medium',serif; width:600px;background-color: whitesmoke; border: 1px solid #e9e9e9; color: #0b0b0b">
    <tbody>
    <tr>
        <td>Información personal del cliente:</td>
    </tr>
    <tr>
        <td>Nombre:</td>
        <td>{{$nombre}}</td>
    </tr>
    <tr>
        <td>Apellido:</td>
        <td>{{$apellido}}</td>
    </tr>
    <tr>
        <td>Empresa:</td>
        <td>{{$empresa}}</td>
    </tr>
    <tr>
        <td>Email:</td>
        <td>{{$correo}}</td>
    </tr>
    <tr>
        <td>Telefono:</td>
        <td>{{$telefono}}</td>
    </tr>
    </tbody>
</table>
<table style="font-family: 'Roboto Mono Medium',sans-serif; background-color: whitesmoke; border: 1px solid #e9e9e9; width: 600px;">
    <tbody>
    <tr>
        <td><br>
        </td>
    </tr>
    </tbody>
    <tbody>
    <tr>
        <td>Consulta:</td>
    </tr>
    <tr>
        <td>{{$consulta}}<br></td>
    </tr>
    </tbody>
</table>
<table style="font-family: 'Roboto Mono Medium',sans-serif; background-color: #0b0b0b; border: 1px solid #e9e9e9; width: 600px;">
    <tbody>
    <tr style="text-align: center; color: white; font-size:smaller">
        <td>DIAJO SAC © {{date('Y')}}</td>
    </tr>
    <tr style="text-align: center; color: white; font-size:smaller">
        <td>Este correo se envió el {{date('d-m-Y')}} a las {{date('H:i:s')}}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
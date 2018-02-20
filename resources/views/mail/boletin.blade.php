<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Boletin informativo DIAJO SAC</title>
</head>
<body>
<div style="font-family :'Roboto Mono',sans-serif;background-color: darkgray;box-sizing: border-box;" align="center">
    <center>
        <table style="max-width: 700px;">
            <tbody>
            <tr>
                <td><center>
                        <table style="font-size: x-small; max-width: 700px">
                            <tbody>
                            <tr>
                                <td>Los mejores productos de protección personal a tu disposición</td>
                            </tr>
                            <tr>
                                <td>Ingresa a <a href="www.diajosac.com.pe">www.diajosac.com.pe</a> para más contenido</td>
                            </tr>
                            </tbody>
                        </table>
                    </center>
                </td>
            </tr>
            <tr>
                <td>
                    <table style="margin:10px;padding:10px;background-color: floralwhite; box-sizing: border-box; max-width: 600px">
                        <tr>
                            <td><strong style="text-align: start;">DIAJO SAC</strong></td>
                        </tr>
                        <tr>
                            <td><br><br></td>
                        </tr>
                        <tr>
                            <td style="text-align:center; font-size:larger;">¡Las mejores marcas de EPP en un solo lugar!</td>
                        </tr>
                        <tr>
                            <td><img src="imagenficha.jpg" style="height: 300px; width: 600px"></td>
                        </tr>
                        <tr>
                            <td><h4 style="text-align: center">Algunas marcas con las cuales trabajamos</h4></td>
                        </tr>
                        <tr>
                            <td>
                                <center>
                                    <table>
                                        <tbody>
                                        <tr>@foreach($marca as $marcas)
                                            <td style="font-size:smaller;padding-right:50px; background-color: whitesmoke; background-clip: content-box">
                                                <img {{--src="/img/marcas/{{$marcas->imagen}}"--}}src="http://www.clute.com.pe/img/p/75-481-thickbox.jpg" height="100px" width="100px" alt="{{$marcas->nombre}}">
                                            </td>
                                            @endforeach
                                        </tr>
                                        </tbody>
                                    </table>
                                </center>
                            </td>
                        </tr>
                        <tr>
                        <td>
                            <center>
                                <br><br>
                                ¿Quieres ver mas marcas?<br>
                                <form action="www.diajosac.com.pe/marcas">
                                    <input type="submit" style="background: cornflowerblue;padding: 10px; border:1px solid #000;color: #ffffff;" value="Ver más marcas">
                                </form>
                            </center>
                        </td>
                        </tr>
                        <tr>
                            <td><h4 style="text-align: center">Productos que tal vez te interesen!</h4></td>
                        </tr>
                        <tr>
                            <td>
                                <center>
                                    <table>
                                        <tbody>
                                        <tr>@foreach($producto as $productos)
                                            <td style="font-size:smaller;padding-right:50px; background-color: whitesmoke; background-clip: content-box">
                                                <img src="http://www.clute.com.pe/img/p/75-481-thickbox.jpg" width="100px">
                                                <p>{{$productos->nombre}}</p>
                                                <p>{{$productos->marca->nombre}}</p>
                                            </td>
                                            @endforeach
                                        </tr>
                                        </tbody>
                                    </table>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>
                                    <br><br>
                                    ¿No es lo que buscas?<br>
                                    <form action="www.diajosac.com.pe">
                                        <input type="submit" style="background: cornflowerblue;padding: 10px; border:1px solid #000;color: #ffffff;" value="Ver más productos">
                                    </form>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>
                                    <br>   No olvides que puedes contactarnos aqui:
                                    <p>Sr. Ricardo Mendoza Endacochea</p>
                                    <a href="mailto:gerencia@diajosac.com">gerencia@diajosac.com</a>
                                    <br>
                                    <br>
                                    <form action="www.diajosac.com.pe">
                                        <input type="submit" style="background: cornflowerblue;padding: 10px; border:1px solid #000;color: #ffffff;" value="Contáctenos">
                                    </form>
                                </center>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            </tbody>
            <tbody>
            {{--<tr>
                <td style="font-size: x-small">
                    <center>
                        <p>Este mensaje te llego por estar registrado en la base de datos de DIAJO SAC</p>
                        <p>Si quieres desafiliarte dale click <a href="laweasalir">aquí</a></p>
                    </center>
                </td>
            </tr>--}}
            </tbody>
        </table>
    </center>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Paul Frank Pacheco Carpio">

    <title>DIAJO SAC</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="/vendors/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/creative.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/estilos.css">
</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">DIAJO SAC</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contáctenos</a>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop" href="#" >
                        Catálogo
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url("/marcas")}}">Marcas</a>
                        <a class="dropdown-item" href="{{url("/productos")}}">Productos</a>
                        <a class="dropdown-item" href="{{url("/normas")}}">Normativas sobre EEP</a>
                    </div>
                </li>
                @if(\Illuminate\Support\Facades\Auth::check())
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{url("/admin/lista")}}">Continuar sesión</a>
                </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{url("/admin/login")}}">Iniciar sesión</a>
                    </li>
                    @endif
            </ul>
        </div>
    </div>
</nav>

<header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase">
                    <strong>Bienvenidos a DIAJO SAC</strong>
                    <hr class="light">
                </h1>
                <label style="color: transparent">{{date_default_timezone_set("America/Lima")}}</label>
                <br><br>

            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-info mb-5"><strong style="color: white; font-size: 25px">Somos una empresa distribuidora de equipos de protección
                        personal e higiene, con el propósito de brindar soluciones productivas y efectivas en el campo laboral</strong></p>
                <!--<a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>-->
            </div>
        </div>
    </div>
</header>

<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-white">Nuestro propósito</h2>
                <hr class="light my-4">
                <p class="text-faded mb-4 text-section">Brindar soluciones productivas y efectivas a las diferentes dificultades que se presentan
                    en el campo laboral</p>
                <br>
                <a class="btn btn-light" href="/nosotros">Más acerca de nosotros</a>
                <!--<a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>-->
            </div>
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Nuestros Servicios</h2>
                <hr class="my-4">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <img src="/img/servicios/distribucion.png" style="width: 50%">
                    <h3 class="mb-3">Distribución de equipos</h3>
                    <!--<p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>-->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <img src="/img/servicios/capacitacion.png" style="width: 50%">
                    <h3 class="mb-3">Realización de capacitaciones</h3>
                    <!--<p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>-->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <img src="/img/servicios/noise.png" style="width: 50%">
                    <h3 class="mb-3">Medición de ruido</h3>
                    <!--<p class="text-muted mb-0">We update dependencies to keep things fresh.</p>-->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <img src="/img/servicios/laws.png" style="width: 50%">
                    <h3 class="mb-3">Normas legales</h3>
                    <!-- <p class="text-muted mb-0">You have to make your websites with love these days!</p>-->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary" style="color: white" id="contact">
    <div class="container">
        <h2 class="section-heading text-center">Contáctenos</h2>
        <hr class="light my-4">
        <div class="row">
            <div class="col-sm text-center">
                <p><strong>Gerente General</strong><br>
                    Ricardo Mendoza Indacochea
                    <br>
                    Cel: 949-078-228
                    <br>
                    Correo: <a href="mailto:gerencia@diajosac.com" target="_blank">gerencia@diajosac.com</a>
                </p>
            </div>
            <div class="col-sm text-center">
                <p><strong>Gerente de Ventas</strong><br>
                    Jimena Mercado Neumann
                    <br>
                    Cel: 987-246-440
                    <br>
                    Correo: <a href="mailto:ventas@diajosac.com" target="_blank">ventas@diajosac.com</a>

                </p>
            </div>
            <div class="col-sm text-center">
                <p><strong>La Empresa</strong><br>
                    Dirección: Calle Doña Gloria 173 Int. 101
                    Santiago de Surco, Lima
                    <br>
                    Tel:(511) 449-2569
                    <br>
                    R.U.C: 20492055116 </p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
    <div class="row">
            <div class="col-lg-6 mx-auto">
                <h3 class="text-center">Realiza tu consulta:</h3>
                <br>
            <div class="form-control">
                <form id="emailer_form" action="enviar-correo" method="post">
                <p><label for="nombre_usuario">Nombre:</label>
                <input name="nombre_usuario" data-validation="required length alphanumeric" data-validation-allowing=" " data-validation-length="max30" id="nombre_usuario" type="text" class="form-control" placeholder="Ingrese su nombre completo">
                </p>
                <label for="apellido_usuario">Apellidos:</label>
                <p><input name="apellido_usuario" data-validation="required length alphanumeric" data-validation-allowing=" " data-validation-length="max30" id="apellido_usuario" type="text" class="form-control" placeholder="Ingrese sus apellidos">
                </p>
                    <label for="empresa_usuario">Empresa:</label>
                    <p><input name="empresa_usuario" data-validation="required lenght alphanumeric" data-validation-allowing=" " data-validation-length="max30" id="empresa_usuario" type="text" class="form-control" placeholder="Ingrese el nombre de su empresa"></p>
                <label for="email_usuario">Email:</label>
                <p><input name="email_usuario" data-validation="required email" id="email_usuario" type="email" class="form-control" placeholder="Ingrese su correo electrónico">
                </p>
                <label for="telefono_usuario">Teléfono</label>
                <p><input name="telefono_usuario" id="telefono_usuario" data-validation="required number" data-validation-allowing="range[1;9999999999]" type="tel" class="form-control" placeholder="Ingrese su numero de telefono o celular">
                </p>
                <label for="consulta_usuario">Consulta:</label>
                <p><textarea name="consulta_usuario" data-validation="required length" data-validation-length="min20 max100" id="consulta_usuario" type="text" class="form-control"></textarea>
                </p>
                <button id="submit_consulta" type="submit" class="btn btn-info"><i class="fa fa-send"></i> Enviar</button>
                </form>
            </div>
        </div>
        </div>
    </div>
</section>
<!--modal de mrd-->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            {{--<div class="modal-header">
--}}{{--
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
--}}{{--
            </div>--}}
            <div class="modal-body">
                Gracias por su consulta
            </div>
            {{--<div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>--}}
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript -->
<script src="/vendors/jquery/jquery.min.js"></script>
<script src="/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="/vendors/jquery-easing/jquery.easing.min.js"></script>
<script src="/vendors/scrollreveal/scrollreveal.min.js"></script>
<script src="/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Custom scripts for this template -->
<script src="/js/creative.js"></script>
<script src="/js/mapsDIAJO.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<div class="bg-primary container-fluid">
<h3 class="text-center mt-4 text-white"> Nuestra ubicación</h3>
<div id="googleMap" style="width:100%;height: 450px;"></div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHhus-j6mf3am0lWAkkKWzs9UXA5K_cUs&callback=myMap"></script>

<footer class="text-center">DIAJO S.A.C. {{date('Y')}}</footer>

<script>

    var myLanguage = {
        errorTitle: 'Form submission failed!',
        requiredEmail:'Ingrese una dirección de correo',
        requiredField:'Este es un campo requerido',
        requiredFields: 'Tienes que llenar todos los campos',
        badTime: 'You have not given a correct time',
        badEmail: 'No has proporcionado una dirección de correo válida',
        badTelephone: 'No has proporcionado un numero de telefono correcto',
        badSecurityAnswer: 'You have not given a correct answer to the security question',
        badDate: 'No has dado una fecha correcta',
        lengthBadStart: 'The input value must be between ',
        lengthBadEnd: ' carácteres',
        lengthTooLongStart: 'El valor del texto es mas grande que ',
        lengthTooShortStart: 'El valor del texto es mas pequeño que ',
        notConfirmed: 'No ha sido confirmado el valor del texto',
        badDomain: 'Mal dominio',
        badUrl: 'No es una dirección URL válida',
        badCustomVal: 'El texto es incorrecto',
        andSpaces: ' y espacios ',
        badInt: 'el texto ingresado no fue un numero correcto',
        badSecurityNumber: 'Your social security number was incorrect',
        badUKVatAnswer: 'Incorrect UK VAT Number',
        badStrength: 'The password isn\'t strong enough',
        badNumberOfSelectedOptionsStart: 'You have to choose at least ',
        badNumberOfSelectedOptionsEnd: ' answers',
        badAlphaNumeric: 'The input value can only contain alphanumeric characters ',
        badAlphaNumericExtra: ' y ',
        wrongFileSize: 'The file you are trying to upload is too large (max %s)',
        wrongFileType: 'Only files of type %s is allowed',
        groupCheckedRangeStart: 'Please choose between ',
        groupCheckedTooFewStart: 'Please choose at least ',
        groupCheckedTooManyStart: 'Please choose a maximum of ',
        groupCheckedEnd: ' item(s)',
        badCreditCard: 'The credit card number is not correct',
        badCVV: 'The CVV number was not correct',
        wrongFileDim : 'Incorrect image dimensions,',
        imageTooTall : 'the image can not be taller than',
        imageTooWide : 'the image can not be wider than',
        imageTooSmall : 'the image was too small',
        min : 'minimo',
        max : 'maximo',
        imageRatioNotAccepted : 'Image ratio is not accepted'
    };

    $.validate({
        language:myLanguage
    });

    // Restrict presentation length
    $('#presentation').restrictLength( $('#pres-max-length') );

    var form=$('#emailer_form').validate();
    $("#submit_consulta").on('click',function () {
    if(form.valid()===false){
        $("#exampleModalCenter").modal('show');
    }
    })

    /*on('click',function () {
        errors=[];
        if($(this).isValid(lang,conf,false)){
        $("#exampleModalCenter").modal('show');
        }*/


</script>
</body>

</html>

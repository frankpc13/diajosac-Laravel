<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acerca de nosotros - DIAJO SAC</title>
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
<body>

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
                    <a class="nav-link js-scroll-trigger" href="#portfolio">Portafolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contáctenos</a>
                </li>
                <!--<li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#contact">Catálogo</a>
                </li>-->
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
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{url("/admin/login")}}">Iniciar Sesión</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="container-fluid text-white text-center" style="background-color: peru; padding-top: 150px; padding-bottom: 100px">
                <h1 class="text-uppercase">
                    <strong>Acerca de nosotros</strong>
                    <label style="color: transparent">{{date_default_timezone_set("America/Lima")}}</label>
                </h1>
                <hr class="light">
    <br>
</header>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg text-center">
            <h3>¿Quienes Somos?</h3><br>
                <p style="font-size: large">Somos una empresa distribuidora de equipos de protección personal (EPP) e
                    higiene, nuestro propósito es
                    brindar soluciones productivas y efectivas a las diferentes dificultades que se
                    presentan en el campo
                    laboral; priorizando el bienestar del trabajador. </p>
                <p style="font-size: large">Por ello, ofrecemos charlas de capacitación con la finalidad de transmitirle al trabajador los
                    conocimientos básicos sobre el uso correcto de estos equipos de protección; así como también,
                    indicarles su importancia y los accidentes que se pueden prevenir. </p>
            </div>
        </div>
    </div>
</section>
<section style="background-color: #2a88bd;color: white">
    <div class="container">
        <div class="row">
            <div class="col-lg text-center">
                <h3>Nuestra Misión</h3><br>
                <p style="font-size: large">
                    Ser un comercializador especializado en brindar soluciones productivas en cuanto a seguridad e
                    higiene integral de empresas e instituciones. Siendo distribuidores exclusivos de la línea
                    Professional de Kimberly Clark bajo las marcas Jackson Safety, Kleenguard, Wypall. Distinguiéndonos
                    por brindar un servicio oportuno y asesorar a nuestros clientes en la identificación de las mejores
                    soluciones que mitiguen el riesgo de sus operaciones.
                </p>
            </div>
        </div>
    </div>
</section>
<section style="background-color: #1c7430; color: white;">
    <div class="container">
        <div class="row">
            <div class="col-lg">
            <div class="text-center">
                <h3>Nuestros valores:</h3>
                <div style="text-align: center;">
                <ul>
                    <li>Mantener al cliente satisfecho</li>
                    <li>Puntualidad en el servicio</li>
                    <li>Cumplimiento con los plazos de ejecución</li>
                    <li>Trabajo en equipo</li>
                    <li>Respeto por las normas internas</li>
                </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>





<!-- Bootstrap core JavaScript -->
<script src="/vendors/jquery/jquery.min.js"></script>
<script src="/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Plugin JavaScript -->
<script src="/vendors/jquery-easing/jquery.easing.min.js"></script>
<script src="/vendors/scrollreveal/scrollreveal.min.js"></script>
<script src="/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Custom scripts for this template -->
<script src="/js/creative.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHhus-j6mf3am0lWAkkKWzs9UXA5K_cUs&callback=myMap"></script>

<footer class="text-center">DIAJO S.A.C. {{date('Y')}}</footer>
</body>
</html>
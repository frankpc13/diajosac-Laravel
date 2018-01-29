<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Paul Frank Pacheco Carpio  ">

    <title>Nueva Marca - DIAJO SAC</title>

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

    <link rel="stylesheet" href="/css/estilos.css" type="text/css">
    <link rel="stylesheet" href="/vendors/jquery/jquery-ui.css">
    <link rel="stylesheet" href="/vendors/jquery/jquery-ui.theme.css">
    <link rel="stylesheet" href="/vendors/jquery/jquery-ui.structure.css">

    <script src="/vendors/jquery/jquery.min.js"></script>
    <script src="/vendors/jquery/jquery-ui.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/">DIAJO SAC</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/#about">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/#services">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/#portfolio">Portafolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/#contact">Contáctenos</a>
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
                        <a class="dropdown-item" href="/marcas">Marcas</a>
                        <a class="dropdown-item" href="/productos">Productos</a>
                        <a class="dropdown-item" href="/normas">Normativas sobre EEP</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header class="container-fluid text-white text-center productos">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase">
                    <strong>Ingrese su nueva Marca</strong>
                </h1>
            </div>
        </div>
    </div>
</header>
<section>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-control">
                    <form method="POST" enctype="multipart/form-data" action="/admin/create-brand" id="marca-form">
                    <p><label for="nombre-marca">Nombre de la marca:</label>
                    <input type="text" class="form-control" name="nombre-marca" id="nombre-marca"></p>
                    <p><label for="codigo-marca">Código de la marca</label>
                    <input type="text" class="form-control" name="codigo-marca" id="codigo-marca"></p>
                        <p><label for="intro-marca">Descripción</label>
                        <input type="text" class="form-control" name="intro-marca" id="intro-marca"></p>
                        <p><label for="imagen-marca">Imagen:</label>
                        <input class="form-control" name="imagen-marca" id="imagen-marca" type="file" accept="image/*"></p>
                        <button type="submit" class="btn btn-info"><i class="fa fa-upload"></i> Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Bootstrap core JavaScript -->
<script src="/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="/vendors/jquery-easing/jquery.easing.min.js"></script>
<script src="/vendors/scrollreveal/scrollreveal.min.js"></script>
<script src="/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Custom scripts for this template -->
<script src="/js/creative.js"></script>


<footer class="text-center">DIAJO S.A.C. 2018</footer>
</body>
</html>
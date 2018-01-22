<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Paul Frank Pacheco Carpio  ">

    <title>Marcas - DIAJO SAC</title>

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
    <link rel="stylesheet" href="css/estilos.css">
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
                    <strong>Ingrese su nuevo producto</strong>
                </h1>
            </div>
        </div>
    </div>
</header>
<div class="container-fluid">
    <form class="ml-4 mt-4" enctype="multipart/form-data" action="/create" method="POST">
        <div class="form-group row">
            <label for="nombre_producto" class="col-xs-3 col-form-label mr-2">Nombre del producto</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="nombre_producto" name="nombre_producto">
            </div>
        </div>
        <div class="form-group row">
            <label for="imagen_producto" class="col-xs-3 col-form-label mr-2">Imagen del producto</label>
            <div class="col-xs-9">
                <input type="file" accept="image/*" class="form-control" id="imagen_producto" name="imagen_producto">
            </div>
        </div>
        <div class="form-group row">
            <label for="ficha_producto" class="col-xs-3 col-form-label mr-2">Ficha Técnica del producto</label>
            <div class="col-xs-9">
                <input type="file" accept="application/pdf" class="form-control" id="ficha_producto" name="ficha_producto">
            </div>
        </div>
        <div class="form-group row">
            <label for="descripcion_producto" class="col-xs-3 col-form-label mr-2">Descripción del producto</label>
            <div class="col-xs-9">
                <textarea type="text" class="form-control" id="descripcion_producto" name="descripcion_producto"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="marca_producto" class="col-xs-3 col-form-label mr-2">Marca del producto</label>
            <div class="col-xs-9">
                <!--try to use this element for populate with brand name and types product name-->
                <select class="custom-select form-control" id="marca_producto" name="marca_producto" >
                    @foreach($marca as $marcas)
                        <option value="{{$marcas->nombre}}">{{$marcas->nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="tipo_producto" class="col-xs-3 col-form-label mr-2">tipo de producto</label>
            <div class="col-xs-9">
                <!--try to use this element for populate with brand name and types product name-->
                <select class="custom-select form-control" id="tipo_producto" name="tipo_producto">
                    @foreach($tipo as $tipos)
                        <option value="{{$tipos->nombre}}">{{$tipos->nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="codigo_producto" class="col-xs-3 col-form-label mr-2">codigo del producto</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="codigo_producto" name="codigo_producto">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-xs-3 col-xs-9">
                <button type="submit" class="btn btn-default">Registrar</button>
            </div>
        </div>
    </form>
</div>
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
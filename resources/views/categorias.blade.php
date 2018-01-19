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
    <link rel="stylesheet" href="/css/estilos.css">
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{url("/")}}">DIAJO SAC</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{url("/#about")}}">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{url("/#services")}}">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{url("/#portfolio")}}">Portafolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{url("/#contact")}}">Contáctenos</a>
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
            </ul>
        </div>
    </div>
</nav>
<header class="container-fluid text-white text-center productos">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase">
                    <strong>Nuestros mejores productos <br>a su alcance</strong>
                </h1>
            </div>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row list-types">
        <div class="col-lg-3">
            <h2 class="my-4">Tipos de productos</h2>
            <div class="list-group">
                @foreach($tipo as $tipos)
                    <a class="list-group-item" href="{{url("/productos/$tipos->id")}}">{{$tipos->nombre}}</a>
            @endforeach
            <!--<a class="list-group-item" href="#">Chalecos</a>
                <a class="list-group-item" href="#">Chalecos</a>
                <a class="list-group-item" href="#">Chalecos</a>
                <a class="list-group-item" href="#">Chalecos</a>-->
            </div>
        </div>
        <div class="col-lg-9">
            <div id="searchbar" class="input-group col-md-4">
                <input class="form-control rounded" type="search" placeholder="buscar producto" id="example-search-input">
                <span class="input-group-btn">
                    <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-search"></i>
                </button>
                </span>
            </div>
            <div class="row extended">
                @foreach($producto as $productos)
                    <div class="col-md-4 mb-3">
                        <div class="card bg-light card-d h-50">
                            <img class="card-img-top resize-card" src="/images/{{$productos->imagen}}">
                            <div class="card-title">{{$productos->nombre}}</div>
                            <div class="card-body">
                                <p>{{$productos->marca->nombre}}</p>
                                <div class="card-text">dsadasd</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<footer class="text-center">DIAJO S.A.C. 2018</footer>
<!-- Bootstrap core JavaScript -->
<script src="/vendors/jquery/jquery.min.js"></script>
<script src="/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="/vendors/jquery-easing/jquery.easing.min.js"></script>
<script src="/vendors/scrollreveal/scrollreveal.min.js"></script>
<script src="/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Custom scripts for this template -->
<script src="/js/creative.js"></script>
</body>
</html>
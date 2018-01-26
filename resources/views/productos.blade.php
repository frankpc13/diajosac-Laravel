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
    <div class="row lista-tipo">
        <div class="col-lg-3 mb-3">
            <h4 class="my-4">Tipos de productos</h4>
            <a class="list-item marca-title" href="{{url("/productos")}}">Mostrar todo</a>
            <div class="list-group">
                @foreach($tipo as $tipos)
                    <a class="list-group-item marca-title size-list" href="{{url("/productos/tipos/$tipos->nombre")}}">{{$tipos->nombre}}</a>
            @endforeach
            </div>
            <br>
            <h4>Marcas</h4>
            <div class="list-group">
                @foreach($marca as $marcas)
                    <a class="list-group-item marca-title size-list" href="{{url("/productos/marcas/$marcas->nombre")}}">{{$marcas->nombre}}</a>
                    @endforeach
            </div>
        </div>
        <div class="col-lg-9">
            <h4 class="my-4 ml-2">Resultados: {{$resultados}} de {{$total}}</h4>
            <form id="form" method="post" action="">
                <div id="searchbar" class="input-group col-md-4 pl-2">
                    <input class="form-control rounded" type="search" placeholder="buscar producto" name="busca" id="busca">
                    <span class="input-group-btn">
                    <button class="btn btn-outline-secondary" type="submit">
                    <i class="fa fa-search"></i>
                </button>
                </span>
                </div>
            </form>

            <div class="row extended">
                @foreach($producto as $productos)
                    <div class="col-md-3 mb-3">
                        <a href="/productos/detalle/{{$productos->nombre}}" class="marca-title">
                        <div class="card bg-light card-d">
                            <img class="card-img-top resize-card" src="/images/{{$productos->imagen}}">
                            <div class="card-title titlecard">{{$productos->nombre}}</div>
                            <div class="card-body">
                                <p>{{$productos->marca->nombre}}</p>
                                <div class="card-text"></div>
                            </div>
                        </div>
                        </a>
                    </div>

                    @if($loop->last)
                        <div class="col-lg-9 ml-2 mt-4">
                        {{$producto->render("pagination::bootstrap-4")}}
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<footer class="text-center">DIAJO S.A.C. 2018</footer>
<!-- Bootstrap core JavaScript -->
<script src="/vendors/jquery/jquery.min.js"></script>
<script src="/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    $('#form').submit(function () {
        var buscar=$('#busca').val();
        $(this).attr('action',"/productos/buscar/"+buscar);
    });
</script>
<!-- Plugin JavaScript -->
<script src="/vendors/jquery-easing/jquery.easing.min.js"></script>
<script src="/vendors/scrollreveal/scrollreveal.min.js"></script>
<script src="/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Custom scripts for this template -->
<script src="/js/creative.js"></script>
</body>
</html>
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
<header class="text-center login-bg">
    <h3 class="text-uppercase">Administración</h3>
</header>
<section>
    <div class="container login-d">
    <div class="row">
        <div class="col-lg-4">

        </div>
        <div class="form-control col-lg-4">
            <form method="POST" action="/admin/sesion">
                <fieldset class="form-group">
                    <label class="" for="username">Nombre de Usuario</label>
                    <div class="">
                        <input class="form-control" name="username" type="text" id="username">
                    </div>
                </fieldset>
                <fieldset>
                    <label class="" for="password">Contraseña</label>
                    <div class="">
                        <input class="form-control" type="password" name="password" id="password"><br>
                    </div>
                </fieldset>
                <div class="">
                    <button class="btn btn-primary" type="submit">Iniciar Sesión</button>
                </div>
            </form>
        </div>
        <div class="col-md-3 help-box m-4">
            <h4>Recueda que con tu cuenta puedes:</h4>
            <ul>
                <li>Crear productos</li>
                <li>Editar productos</li>
                <li>Eliminar productos</li>
                <li>Añadir Marcas</li>
            </ul>
        </div>
    </div>

</section>
<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">DIAJO SAC 2018</div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="/vendors/jquery/jquery.min.js"></script>
<script src="/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="/vendors/jquery-easing/jquery.easing.min.js"></script>
<script src="/vendors/scrollreveal/scrollreveal.min.js"></script>
<script src="/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
</body>
</html>
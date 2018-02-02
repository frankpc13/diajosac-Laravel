<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Paul Frank Pacheco Carpio  ">

    <title>Edición de marca - DIAJO SAC</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="/vendors/magnific-popup/magnific-popup.css" rel="stylesheet">

    <link rel="stylesheet" href="/vendors/jquery/jquery-ui.css">
    <link rel="stylesheet" href="/vendors/jquery/jquery-ui.theme.css">
    <link rel="stylesheet" href="/vendors/jquery/jquery-ui.structure.css">
    <!-- Custom styles for this template-->
    <link href="/css/sb-admin.css" rel="stylesheet">
    <link href="/css/estilos-admin.css" rel="stylesheet">

    <script src="/vendors/jquery/jquery.min.js"></script>
    <script src="/vendors/jquery/jquery-ui.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top tema-navbar-lista" id="mainNav">
    <a class="navbar-brand" href="index.html">DIAJO SAC</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Mis productoss">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Mis productos</span>
                </a>
            </li>
            <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Mis marcas">
                <a class="nav-link" href="/admin/lista-marcas">
                    <i class="fa fa-fw fa-address-book"></i>
                    <span class="nav-link-text">Mis marcas</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Mis tipos de productos">
                <a class="nav-link" href="tables.html">
                    <i class="fa fa-fw fa-archive"></i>
                    <span class="nav-link-text">Mis tipos de productos</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Cerrar Sesión</a>
            </li>
        </ul>
    </div>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">
<header class="container-fluid text-center">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h3 class="text-uppercase">
                    <strong style="color: #1f648b;">Edite su Marca</strong>
                </h3>
            </div>
        </div>
    </div>
</header>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="form-control">
                    <form method="POST" enctype="multipart/form-data" action="/admin/edit-brand/{{$marca->id}}" id="marca-form">
                        <p><label for="nombre-marca">Nombre de la marca:</label>
                            <input data-validation="length alphanumeric" data-validation-length="3-15" type="text" value="{{$marca->nombre}}" class="form-control" name="nombre-marca" id="nombre-marca"></p>
                        <p><label for="codigo-marca">Código de la marca</label>
                            <input type="text" data-validation="required" data-validation-length="3-15" class="form-control" value="{{$marca->codigo}}" name="codigo-marca" id="codigo-marca"></p>
                        <p><label for="intro-marca">Descripción</label>
                            <textarea type="text" data-validation="required" class="form-control" value="{{$marca->introduccion}}" name="intro-marca" id="intro-marca"></textarea></p>
                        <p><label for="imagen-marca">Imagen:</label>
                            <input class="form-control" data-validation="required" name="imagen-marca" id="imagen-marca" type="file" accept="image/*"></p>
                        <img class="img-thumbnail" width="150" height="150" src="/img/marcas/{{$marca->imagen}}"><br><br>
                        <button type="submit" class="btn btn-info"><i class="fa fa-upload"></i> Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript -->
<script src="/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="/vendors/jquery-easing/jquery.easing.min.js"></script>
<script src="/vendors/scrollreveal/scrollreveal.min.js"></script>
<script src="/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<!-- /.content-wrapper-->
<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small>Copyright © DIAJO SAC 2018</small>
        </div>
    </div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Selecciona "Cerrar Sesión" si quieres terminar tu sesión actual</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="/admin/logout">Cerrar Sesión</a>
            </div>
        </div>
    </div>
</div>
<!-- Custom scripts for all pages-->
<script src="/js/sb-admin.js"></script>
<script>

    var myLanguage = {
        errorTitle: 'Form submission failed!',
        requiredEmail:'Ingrese una dirección de correo',
        requiredField:'Este es un campo requerido',
        requiredFields: 'Tienes que llenar todos los campos',
        badTime: 'No has ingresado el tiempo correctamente',
        badEmail: 'No has proporcionado una dirección de correo válida',
        badTelephone: 'No has proporcionado un numero de telefono correcto',
        badSecurityAnswer: 'You have not given a correct answer to the security question',
        badDate: 'No has dado una fecha correcta',
        lengthBadStart: 'El valor ingresado debe estar entre ',
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
        badAlphaNumeric: 'solo puedes ingresar valores alfanumericos',
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

</script>
</body>
</html>
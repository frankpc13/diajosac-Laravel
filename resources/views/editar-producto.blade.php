<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Paul Frank Pacheco Carpio  ">

    <title>Edición de producto - DIAJO SAC</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="/vendors/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin.css" rel="stylesheet">
    <link href="/css/estilos-admin.css" rel="stylesheet">
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
            <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Mis productoss">
                <a class="nav-link" href="/admin/lista">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Mis productos</span>
                </a>
            </li>
            <li class="nav-item " data-toggle="tooltip" data-placement="right" title="Mis marcas">
                <a class="nav-link" href="/admin/lista-marcas">
                    <i class="fa fa-fw fa-address-book"></i>
                    <span class="nav-link-text">Mis marcas</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Mis tipos de productos">
                <a class="nav-link" href="/admin/lista-tipo">
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
<header class="container-fluid text-center ">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h4 class="text-uppercase">
                        <strong style="color: teal;">Edite su producto</strong>
                    </h4>
                </div>
            </div>
        </div>
        </header>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="form-control mb-4">
                <form enctype="multipart/form-data" action="/admin/editar/{{$producto->id}}" method="POST" id="form-producto">
                    <p>
                        <label for="nombre_producto">Nombre del producto</label>
                        <input type="text" data-validation="length required" data-validation-length="3-60" class="form-control" value="{{$producto->nombre}}" id="nombre_producto" name="nombre_producto">
                    </p>
                    <p>
                        <label for="imagen_producto">Imagen del producto</label>
                        <input type="file" accept="image/*" value="{{$producto->imagen}}" onchange="previewImage(this,[500],20);" class="form-control" id="imagen_producto" name="imagen_producto">
                        <img class="img-thumbnail" src="/images/{{$producto->imagen}}" width="150" height="150">
                    </p>
                    <p>
                        <label for="ficha_producto">Ficha Técnica del producto</label>
                        <input type="file" accept="application/pdf" value="{{$producto->ficha_tecnica}}" class="form-control" id="ficha_producto" name="ficha_producto">
                        <a href="/fichas/{{$producto->ficha_tecnica}}">Ver documento actual</a>
                    </p>
                    <p>
                        <label for="marca_producto">Marca del producto</label>
                        <select class="custom-select form-control" id="marca_producto" name="marca_producto" >
                            <option selected>{{$producto->marca->nombre}}</option>
                            @foreach($marca as $marcas)
                                <option value="{{$marcas->nombre}}">{{$marcas->nombre}}</option>
                            @endforeach
                        </select>
                    </p>
                    <p>
                        <label for="tipo_producto">tipo de producto</label>
                        <select class="custom-select form-control" id="tipo_producto" name="tipo_producto" >
                            <option selected>{{$producto->tipo->nombre}}</option>
                            @foreach($tipo as $tipos)
                                <option value="{{$tipos->nombre}}">{{$tipos->nombre}}</option>
                            @endforeach
                        </select>
                    </p>
                    <p>
                        <label for="descripcion_producto">Descripción del producto</label>
                        <textarea type="text" class="form-control" id="descripcion_producto" name="descripcion_producto">{{$producto->descripcion}}</textarea>
                    </p>
                    <p>
                        <label for="codigo_producto">codigo del producto</label>
                        <input type="text" data-validation="length required" data-validation-length="3-30" class="form-control" value="{{$producto->codigo}}" id="codigo_producto" name="codigo_producto">
                    </p>
                    <button type="submit" class="btn btn-info"><i class="fa fa-upload"></i> Registrar</button>
                </form>
            </div>
        </div>
    </div>

</div>
    </div>
</div>
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
<script src="/js/html5.image.preview.js"></script>
<!-- Bootstrap core JavaScript -->
<script src="/vendors/jquery/jquery.min.js"></script>
<script src="/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="/vendors/jquery-easing/jquery.easing.min.js"></script>
<script src="/vendors/scrollreveal/scrollreveal.min.js"></script>
<script src="/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
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
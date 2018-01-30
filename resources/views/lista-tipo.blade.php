<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Paul Frank Pacheco Carpio">
    <title>Administración - DIAJO SAC</title>
    <!-- Bootstrap core CSS-->
    <link href="/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="/vendors/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="/css/sb-admin.css" rel="stylesheet">
    <link href="/css/estilos-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top tema-navbar-lista" id="mainNav">
    <a class="navbar-brand" href="/">DIAJO SAC</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Mis productoss">
                <a class="nav-link" href="/admin/lista">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Mis productos</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Mis marcas">
                <a class="nav-link" href="/admin/lista-marcas">
                    <i class="fa fa-fw fa-address-book"></i>
                    <span class="nav-link-text">Mis marcas</span>
                </a>
            </li>
            <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Mis tipos de productos">
                <a class="nav-link" href="#">
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
        <div class="col-lg-3">
            <div class="card mb-3">
                <div class="card-header">
                    Añade mas tipos de productos a tu lista
                </div>
                <div class="card-body">
                    <a class="btn btn-success" href="/admin/nuevo-tipo"><i class="fa fa-plus"></i> Crear Tipo de producto</a>
                </div>
            </div>
        </div>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Lista de Tipos de Productos</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Edición</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Edición</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($tipos as $tipo)
                            <tr>
                                <th>{{$tipo->id}}</th>
                                <th>{{$tipo->nombre}}</th>
                                <th><div class="text-center">
                                        <a class="btn btn-info" role="button" href="/admin/editar-tipo/{{$tipo->id}}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                        <button class="btn btn-danger delete" value="{{$tipo->id}}" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-fw fa-eraser"></i> Borrar</button>
                                    </div>
                                </th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid-->
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
    <!-- Eliminar producto Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">¿Quieres eliminar esta tipo de producto?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Importante*: tendrás que eliminar los productos asociados a este tipo para poder eliminarlo, caso contrario
                aparecerá un error</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" id="deleteButton">Eliminar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="/vendors/jquery/jquery.min.js"></script>
    <script src="/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="/vendors/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    {{--
        <script src="/vendors/chart.js/Chart.min.js"></script>
    --}}
    <script src="/vendors/datatables/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable({
                "language": {
                    "lengthMenu": "Mostrando _MENU_ elementos por página",
                    "zeroRecords": "No se encontró nada",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "No se encontró elementos",
                    "infoFiltered": "(filtrado de _MAX_ elementos)",
                    "search":"Buscar:",
                    "paginate": {
                        "first":      "Primero",
                        "last":       "Ultimo",
                        "next":       "Siguente",
                        "previous":   "Anterior"
                    }
                }
            });
        });
    </script>
    <script src="/vendors/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin.js"></script>

    <!-- Custom scripts for this page-->
    <script src="/js/sb-admin-datatables.js"></script>
    <script>
        $(".delete").on("click",function () {
            //el id del producto
            var id=$(this).val();
            //se abre el modal de mrd
            $('#deleteButton').attr("href","/admin/borrar-tipo/"+id);
            $('#deleteModal').modal();
        });
    </script>
</div>
</body>

</html>

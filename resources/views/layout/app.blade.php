@if (session()->has('TUsuario') == true)
@elseif (session()->has('TUsuario') == false)
    <script>
        window.location.href = "{{ route('home') }}";
    </script>;
@endif

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AdminLTE 3 | Dashboard 2</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.13.6/b-2.4.2/sl-1.7.0/datatables.min.css" />
    <link rel="stylesheet" href="Editor-2.2.2/css/editor.dataTables.css">

    <script src="https://cdn.datatables.net/v/dt/jqc-1.12.4/dt-1.13.6/b-2.4.2/sl-1.7.0/datatables.min.js"></script>
    <script src="Editor-2.2.2/js/dataTables.editor.js"></script>
</head>
<style>
    a {
        text-decoration: none !important;
    }
</style>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('salir') }}" class="nav-link">Salir</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('assets/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ session()->get('Usuario') }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        @if (session()->get('TUsuario') == 1)
                            <li class="nav-item">
                                <a href="pages/gallery.html" class="nav-link active">
                                    <i class="nav-icon far fa-user"></i>
                                    <p>
                                        Perfil
                                    </p>
                                </a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('jugadoresView') }}" class="nav-link">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Jugadores
                                        <span class="right badge badge-danger">New</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/widgets.html" class="nav-link">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Equipos
                                        <span class="right badge badge-danger">New</span>
                                    </p>
                                </a>
                            </li>
                    </ul>
                    @endif
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">@yield('title')</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                @yield('titles')
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->
                    @yield('content')
                    <!-- /.row -->
                </div><!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.4
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/js/adminlte.js') }}"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="{{ asset('assets/js/demo.js') }}"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>

    <!-- PAGE SCRIPTS -->
    <script src="{{ asset('dist/js/pages/dashboard2.js') }}"></script>

    <!--DATATABLES-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <!-- ✅ load jQuery ✅ -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- ✅ load DataTables ✅ -->
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" defer></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js" defer></script>

    <script language="javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js">
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js">
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js">
    </script>


    <script>
        $(document).ready(function() {
            var empTable = $('#example').DataTable({
                'processing': true,
                'serviceSide': true,
                pageLength: 10,
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                'buttons': [
                    'copy', 'excel', 'pdf'
                ]
            });
            empTable.buttons().container()
                .appendTo($('.col-sm-6:eq(0)', empTable.table().container()));
        });
        $(document).ready(function() {
            var empTable = $('#example2').DataTable({
                'processing': true,
                'serviceSide': true,
                pageLength: 10,
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
            });
        });
    </script>
    <!-- <script type="text/javascript">
        function click(e) {
            if (document.all) {
                if (event.button == 2 || event.button == 3) {
                    alert("¡Póngase en contacto con el centro de origen! ¡Gracias por su cooperación!");
                    oncontextmenu = 'return false';
                }
            }
            if (document.layers) {
                if (e.which == 3) {
                    oncontextmenu = 'return false';
                }
            }
        }
        if (document.layers) {
            document.captureEvents(Event.MOUSEDOWN);
        }
        document.onmousedown = click;
        document.oncontextmenu = new Function("return false;")
        document.onkeydown = document.onkeyup = document.onkeypress = function() {
            if (window.event.keyCode == 123) {
                window.event.returnValue = false;
                return (false);
            }
        }
    </script> -->
</body>

</html>

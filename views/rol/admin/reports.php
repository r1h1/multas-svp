<?php
  session_start();
  error_reporting(0);
  $varsesion = $_SESSION['usuario'];

  if($varsesion == null || $varsesion = ''){
    echo'<script type="text/javascript">
            window.location.href="../../404";
    </script>';
    die();
  }
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reportería | Municipalidad de San Vicente Pacaya</title>

    <!-- Custom fonts for this template-->
    <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="../../../img/logo.png">

    <!-- Font Awesome Free Icons -->
    <script src="https://kit.fontawesome.com/bac7f444fd.js" crossorigin="anonymous"></script>

    <!-- Sweet Alert Pop Up -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.17/sweetalert2.all.js" integrity="sha512-L0pIRrYrKsfCidtpWhWSrrbyAcSfrvMaezfwnNGns7c7MuToIEZRabX+WmZ6+Dzn8ESNsHz7t/k6vF8aM1fVXg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #2169B5;" id="accordionSidebar">


            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center mt-5">
                <div class="sidebar-brand-text mx-3"><img src="../../../img/logo.png" width="110" height="110" alt=""></div>
            </a>


            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center mt-4 mb-2">
                <div class="sidebar-brand-text mx-3">Muni SVP <br> SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="ingreso-multas" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-car"></i>
                    <span>Añadir una multa</span>
                </a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="consulta-remisiones" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <span>Consulta de multas</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="usuarios" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-users"></i>
                    <span>Usuarios</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="reports" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-file"></i>
                    <span>Opciones de Pago</span>
                </a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Opciones del Sistema</span>
                                <img class="img-profile rounded-circle" src="../../../img/logo.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="../../../business/login/session-out.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar Sesión
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid w-75">

                    <!-- Page Heading -->
                    <div class="mb-4 mt-5">
                        <h1 class="h3 text-gray-800">Opciones de Pago</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4 border-left-danger">
                                <a href="rpts/multas-pendientes-pago" class="nav-link">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">PAGAR MULTAS PENDIENTES DE PAGO</h6>
                                    </div>
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-car" style="font-size: 90px; color: #858796;"></i>
                                        <i class="fa-solid fa-triangle-exclamation" style="font-size: 60px; color: #858796;"></i>
                                    </div>
                                </a>
                            </div>

                            <!-- Illustrations -->
                            <div class="card shadow mb-4 border-left-dark">
                                <a href="rpts/exonerar-multas" class="nav-link">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">EXONERAR MULTAS PENDIENTES DE PAGO</h6>
                                    </div>
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-car" style="font-size: 90px; color: #858796;"></i>
                                        <i class="fa-solid fa-circle-check" style="font-size: 60px; color: #858796;"></i>
                                    </div>
                                </a>
                            </div>

                            <div class="card shadow mb-4 border-left-success">
                                <a href="rpts/multas-pagadas" class="nav-link">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">VER MULTAS PAGADAS O EXONERADAS</h6>
                                    </div>
                                    <div class="card-body text-center">
                                        <i class="fa-solid fa-car" style="font-size: 90px; color: #858796;"></i>
                                        <i class="fa-solid fa-money-bill" style="font-size: 55px; color: #858796;"></i>
                                    </div>
                                </a>
                            </div>


                        </div>


                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>© Todos los Derechos reservados, Municipalidad de San Vicente Pacaya, Escuintla, Guatemala</span>
                        <br> <br>
                        <span>https://www.munisanvicentepacaya.laip.gt/</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="../../../vendor/jquery/jquery.min.js"></script>
    <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../../js/demo/chart-area-demo.js"></script>
    <script src="../../../js/demo/chart-pie-demo.js"></script>
    <script src="../../../js/main.js"></script>

</body>

</html>
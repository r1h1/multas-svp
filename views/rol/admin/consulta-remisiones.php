<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion = '') {
    echo '<script type="text/javascript">
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

    <title>Consulta de Remisiones | Municipalidad de San Vicente Pacaya</title>

    <!-- Custom fonts for this template-->
    <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="../../../css/consulta-remisiones.css">

    <!-- Font Awesome Free Icons -->
    <script src="https://kit.fontawesome.com/bac7f444fd.js" crossorigin="anonymous"></script>

    <!-- JQuery 3.x.x -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Sweet Alert Pop Up -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.17/sweetalert2.all.js" integrity="sha512-L0pIRrYrKsfCidtpWhWSrrbyAcSfrvMaezfwnNGns7c7MuToIEZRabX+WmZ6+Dzn8ESNsHz7t/k6vF8aM1fVXg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="icon" href="../../../img/logo.png">
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
                    <main>
                        <div class="row align-items-center">
                            <div class="col-md-10">
                                <h1 class="h1-estilo text-gray-800">Consulta de Remisiones</h1>
                                <p class="p-estilo">Selecciona el tipo de placa del vehículo, seguidamente ingresa el número de placa.</p>
                            </div>
                        </div>
                    </main>
                    <section class="mt-3 container-sm w-100 mb-5">
                        <form class="row" action="consulta-remisiones" method="GET">
                            <div class="col-md-6 mt-4">
                                <label for="inputE4" class="form-label">Tipo de Placa</label>
                                <select class="form-select" required title="Seleccione el tipo de placa a consultar..." name="tipoPlaca">
                                    <option value="P">P</option>
                                    <option value="C">C</option>
                                    <option value="M">M</option>
                                    <option value="A">A</option>
                                    <option value="U">U</option>
                                    <option value="CD">CD</option>
                                    <option value="MI">MI</option>
                                    <option value="DIS">DIS</option>
                                    <option value="O">O</option>
                                    <option value="CC">CC</option>
                                    <option value="E">E</option>
                                    <option value="EXT">EXT</option>
                                    <option value="TC">TC</option>
                                    <option value="TRC">TRC</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="inputP4" class="form-label">Número de Placa</label>
                                <input type="text" class="form-control" name="numeroPlaca" oninput="javascript: if (this.value.length > this.maxLength) 
                                    this.value = this.value.slice(0, this.maxLength);" style="text-transform:uppercase" maxlength="6" title="Ingrese el número de placa a consultar" placeholder="158hrz" required>
                            </div>

                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-primary py-2 px-5" onclick="mostrarMultas()">Consultar</button>
                            </div>
                        </form>
                    </section>

                    <br>

                    <section class="mt-5 muestra-multas" id="infoMultas">
                        <div>
                            <h1 class="h1-estilo text-gray-800">Remisiones</h1>
                        </div>
                        <p class="h2-estilo text-gray-800">Información del Vehículo</p>
                        <div class="tabla-info-vehiculo table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">PLACA</th>
                                        <th scope="col">MARCA</th>
                                        <th scope="col">COLOR</th>
                                    </tr>
                                </thead>
                                <?php 
                                    include("../../../business/admin/consult-m.php");
                                ?>
            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>


        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
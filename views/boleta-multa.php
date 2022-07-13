<?php

error_reporting(0);
//obtenemos datos del cliente (fecha, hora, ip etc)
date_default_timezone_set('America/Guatemala');
$fechaDeIngreso = date('d-m-Y', time());
$horaIngreso = date('h:i:s a', time());

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="../css/pdfFactura.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>


    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>

    <link rel="icon" href="../img/logo.png">


    <title>Boleta de Pago | Municipalidad San Vicente Pacaya</title>
</head>

<body>

    </div>
    <div id="app" class="col-12 text-center mt-5">

        <img src="../img/logo.png" alt="" width="100">
        <br>
        <h3 class="mt-5">Boleta de Pago | Municipalidad San Vicente Pacaya</h3>
        <br>
        <p class="h6">Fecha de Generación: <?php echo $fechaDeIngreso ?></p>
        <p class="h6">Hora de Generación: <?php echo $horaIngreso ?></p>

        <div class="row my-5 text-center mt-5">
            <table class="table table-borderless factura">
                <thead>
                    <tr>
                        <th>PLACA</th>
                        <th>MARCA</th>
                        <th>MONTO</th>
                        <th>DESCUENTO</th>
                    </tr>
                </thead>
                <?php

                include("../data/conexion-bd.php");

                $sTipoPlaca = $_POST['tipoPc'];
                $sNumeroPlaca = $_POST['numeroPlaca'];

                $sql = "CALL verMultasPorPlaca('$sTipoPlaca','$sNumeroPlaca');";


                $result = mysqli_query($conexion, $sql);
                while (mysqli_next_result($conexion)) {;
                }

                while ($mostrar = mysqli_fetch_array($result)) {

                    $totalAPagar = $mostrar['montoInfraccion'] - $mostrar['montoConDescuento'];
                ?>
                    <tbody>
                        <tr>
                            <td class="fw-bold"><b><?php echo $sTipoPlaca, "-", $sNumeroPlaca; ?></b></td>
                            <td><?php echo $mostrar['marca']; ?></td>
                            <td><span>Q</span><?php echo $mostrar['montoInfraccion']; ?></td>
                            <td><span>Q</span><?php echo $mostrar['montoConDescuento']; ?></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>TOTAL A PAGAR</th>
                            <th><span>Q</span><?php echo $totalAPagar ?></th>
                        </tr>
                    </tfoot>
                <?php
                }
                ?>
            </table>
        </div>

        <div class="row text-center mt-5">
            <div class="col">
                <hr>
                <p class="h6">CUENTA ÚNICA DEL TESORO SAN VICENTE PACAYA, ESCUINTLA No. 3-654-00034-5</p>
            </div>
            <hr>
        </div>
    </div>
</body>

<script type="text/javascript">
    imprimir();

    //VUELVE LA FACTURA PDF
    function imprimir() {
        javascript: window.print();
    }
</script>

</html>
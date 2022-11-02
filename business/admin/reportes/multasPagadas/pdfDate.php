<?php

$sfInicio = $_GET["fi"];
$sfFin = $_GET["ff"];

$sfInicio = date("d-m-Y", strtotime($sfInicio));
$sfFin = date("d-m-Y", strtotime($sfFin));

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

    <link rel="icon" href="../../../../img/logo.png">


    <title>Reporte Multas Pagadas | Municipalidad San Vicente Pacaya</title>
</head>

<body>


    <div class="w-100 mb-2 mt-5">
        <div class="tabla-info-multas-pendientes-pago table-responsive" id="multasEncontradas2">
            <div class="text-center">
                <img src="../../../../img/logo.png" alt="logo" width="120">
                <h1 class="h4 mt-5">Reporte Multas Pagadas</h1>
                <br>
                <p>Fecha de Inicio: <?php echo $sfInicio; ?></p>
                <p class="mb-5">Fecha de Finalización: <?php echo $sfFin; ?></p>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">PLACA</th>
                        <th scope="col">MARCA</th>
                        <th scope="col">COLOR</th>
                        <th scope="col">FECHA</th>
                        <th scope="col">LUGAR</th>
                        <th scope="col">INFRACCION</th>
                        <th scope="col">MONTO</th>
                        <th scope="col">TOTAL</th>
                        <th scope="col">COMPROBANTE DE PAGO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include("../../../../data/conexion-bd.php");

                    if ($sfInicio > $sfFin) {
                        //
                    } else {

                        $sql = "CALL verTodasLasMultasPagadasXFecha('$sfInicio','$sfFin');";


                        $result = mysqli_query($conexion, $sql);

                        while (mysqli_next_result($conexion)) {;
                        }


                        while ($mostrar = mysqli_fetch_array($result)) {

                            $tipop = strtoupper($mostrar['tipoPlaca']);
                            $numerop = strtoupper($mostrar['numeroPlaca']);

                            $totalAPagar = $mostrar['montoInfraccion'] - $mostrar['montoConDescuento'];
                            $idMulta = $mostrar['idMulta'];

                    ?>
                            <tr>
                                <td hidden><?php echo $idMulta; ?></td>
                                <td><?php echo $tipop, "-", $numerop; ?></td>
                                <td><?php echo strtoupper($mostrar['marca']); ?></td>
                                <td><?php echo strtoupper($mostrar['color']); ?></td>
                                <td><?php echo strtoupper($mostrar['fechaMulta']); ?></td>
                                <td><?php echo strtoupper($mostrar['lugarInfraccion']); ?></td>
                                <td><?php echo strtoupper($mostrar['nombreTipoMulta']); ?></td>
                                <td><span>Q</span><?php echo $mostrar['montoInfraccion']; ?></td>
                                <td><span>Q</span><?php echo $totalAPagar; ?></td>
                                <td class="fw-bold"><?php echo $mostrar['numeroComprobantePago']; ?></td>
                            </tr>
                </tbody>
        <?php

                        }
                    }

        ?>
            </table>
        </div>

        <?php

        if (isset($_GET["borrarMulta"])) {
            include("../../../../business/admin/reportes/multasPagadas/delete-m.php");
        }

        ?>

        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="../js/main.js"></script>
        <script>
            window.print();
        </script>
</body>

</html>
<div class="container w-75">
    <section class="mt-5 muestra-multas">
        <p class="h2-estilo fw-bold">Información del Vehículo</p>
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


                include("../data/conexion-bd.php");


                $sNumeroPlaca = $_POST["numeroPlaca"];
                $sNumeroPlaca = strtoupper($sNumeroPlaca);

                $sTipoDePlaca = $_POST["placaTipo"];

                if ($sNumeroPlaca == '') {
                    echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Para ver las multas, debe primero consultar la placa.'
                          })
                    </script>";
                } else {

                    $sql = "CALL verMultasPorPlaca('$sTipoDePlaca','$sNumeroPlaca');";


                    $result = mysqli_query($conexion, $sql);
                    while (mysqli_next_result($conexion)) {;
                    }
                    $numero_filas = mysqli_num_rows($result);

                    if ($numero_filas == 0) {
                        $existeMulta == 0;
                        echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: '¡Felicidades!',
                            text: '$sTipoDePlaca-$sNumeroPlaca no tiene ninguna multa pendiente.'
                          })
                    </script>";
                    } else {
                        $existeMulta == 1;
                        echo "<script>
                        Swal.fire({
                            position: 'top-end',
                            icon: 'info',
                            title: 'Se encontró una multa',
                            showConfirmButton: false,
                            timer: 1000
                          })
                        </script>";
                    }

                    while ($mostrar = mysqli_fetch_array($result)) {

                        $marca = $mostrar['marca'];
                        $color = $mostrar['color'];

                        $marca =  strtoupper($marca);
                        $color =  strtoupper($color);
                    }


                ?>
                    <tbody>
                        <tr>
                            <td class="fw-bold text-decoration-underline"><?php echo $sTipoDePlaca, "-", $sNumeroPlaca; ?></td>
                            <td><?php echo $marca; ?></td>
                            <td><?php echo $color; ?></td>
                        </tr>
                    </tbody>
                <?php

                }

                ?>
            </table>
        </div>
    </section>
    <section class="mt-5 detalle-infraccion">
        <p class="h2-estilo fw-bold">Detalle de las Infracciones</p>
        <div class="tabla-info-vehiculo table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">FECHA</th>
                        <th scope="col">LUGAR</th>
                        <th scope="col">INFRACCIÓN</th>
                        <th scope="col">MONTO</th>
                        <th scope="col">TOTAL A PAGAR</th>
                    </tr>
                </thead>
                <?php


                include("../data/conexion-bd.php");


                $sNumeroPlaca = $_POST["numeroPlaca"];
                $sNumeroPlaca = strtoupper($sNumeroPlaca);

                $sTipoDePlaca = $_POST["placaTipo"];

                if ($sNumeroPlaca == '') {
                    echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Para ver las multas, debe primero consultar la placa.'
                          })
                    </script>";
                } else {

                    $sql = "CALL verMultasPorPlaca('$sTipoDePlaca','$sNumeroPlaca');";


                    $result = mysqli_query($conexion, $sql);
                    while (mysqli_next_result($conexion)) {;
                    }
                    $numero_filas = mysqli_num_rows($result);

                    if ($numero_filas == 0) {
                        echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: '¡Felicidades!',
                            text: '$sTipoDePlaca-$sNumeroPlaca no tiene ninguna multa pendiente.'
                          })
                    </script>";
                    } else {
                        echo "<script>
                        Swal.fire({
                            position: 'top-end',
                            icon: 'info',
                            title: 'Se encontraron multas',
                            showConfirmButton: false,
                            timer: 1000
                          })
                        </script>";
                    }


                    while ($mostrar = mysqli_fetch_array($result)) {

                        $id = $mostrar['idMulta'];
                        $monto = $mostrar['montoInfraccion'];
                        $montoConDescuento = $mostrar['montoConDescuento'];

                        $totalAPagar = $monto - $montoConDescuento;
                        $totalAPagar = number_format($totalAPagar, 2);

                        $marca = $mostrar['marca'];
                        $color = $mostrar['color'];
                        $lugar = $mostrar['lugarInfraccion'];

                        $marca =  strtoupper($marca);
                        $color =  strtoupper($color);
                        $lugar =  strtoupper($lugar);
                        $i = $i + 1;

                ?>
                        <tbody>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $mostrar['fechaMulta']; ?></td>
                                <td><?php echo $lugar; ?></td>
                                <td class="fw-bold text-decoration-underline"><?php echo $mostrar['nombreTipoMulta']; ?></td>
                                <td><span>Q</span><?php echo $mostrar['montoInfraccion']; ?></td>
                                <td><span>Q</span><?php echo $totalAPagar; ?></td>
                            </tr>
                        </tbody>
                <?php

                    }
                }

                clearstatcache();

                ?>
            </table>
            <div class="mt-2">
                <form action="../views/boleta-multa" method="POST" target="_blank">
                    <input type="text" value="<?php echo $sTipoDePlaca; ?>" name="tipoPc" required hidden>
                    <input type="text" value="<?php echo $sNumeroPlaca; ?>" name="numeroPlaca" required hidden>
                    <button type="submit" class="btn btn-success">Generar Boleta</button>
                </form>
            </div>
    </section>
</div>

<footer class="container-fluid p-4" style="background-color: #2169B5;">
    <a href="#"> &copy; Todos los Derechos reservados, Municipalidad de San Vicente Pacaya, Escuintla, Guatemala</a>
    <br>
    <i><a href="https://www.munisanvicentepacaya.laip.gt/" target="_blank">https://www.munisanvicentepacaya.laip.gt/</a></i>
</footer>

<?php

//INSERTA DATOS EN EL LOG PARA SABER LA CONSULTA
$numeroPlacaCompleto = $sTipoDePlaca . $sNumeroPlaca;

date_default_timezone_set('America/Guatemala');
$fechaDeIngreso = date('d-m-Y', time());
$horaIngreso = date('h:i:s a', time());
$soIngreso = php_uname();
$ipIngreso = $_SERVER['REMOTE_ADDR'];

if ($numeroPlacaCompleto == "") {
    //no hace nada
} else {
    $sqlInsertLogConsultaCliente = "CALL insertarLogConsultaCliente('$numeroPlacaCompleto','$fechaDeIngreso','$horaIngreso','$soIngreso','$ipIngreso');";


    $resultLog = mysqli_query($conexion, $sqlInsertLogConsultaCliente);
    while (mysqli_next_result($conexion)) {;
    }
}

clearstatcache();

?>
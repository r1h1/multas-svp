<?php

include("../../../data/conexion-bd.php");


$sNumeroPlaca = $_GET["numeroPlaca"];
$sNumeroPlaca = strtoupper($sNumeroPlaca);

$sTipoDePlaca = $_GET["tipoPlaca"];


if ($sNumeroPlaca == '') {
    //nada
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
            <td class="fw-bold"><?php echo $sTipoDePlaca, "-", $sNumeroPlaca; ?></td>
            <td><?php echo $marca; ?></td>
            <td><?php echo $color; ?></td>
        </tr>
    </tbody>
<?php

}

clearstatcache();

?>
</table>
</div>
</section>
<section class="mt-5 detalle-infraccion" id="detalleMultas">
    <p class="h2-estilo ">Detalle de la infracción</p>
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


            include("../../../data/conexion-bd.php");


            $sNumeroPlaca = $_GET["numeroPlaca"];
            $sNumeroPlaca = strtoupper($sNumeroPlaca);

            $sTipoDePlaca = $_GET["tipoPlaca"];

            if ($sNumeroPlaca == '') {
                //nada
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
                          });
			window.location.href='#detalleMultas';
                        </script>";
                }


                while ($mostrar = mysqli_fetch_array($result)) {

                    $id = $mostrar['idMulta'];
                    $monto = $mostrar['montoInfraccion'];
                    $montoConDescuento = $mostrar['montoConDescuento'];

                    $monto = number_format($monto, 2);
                    $montoConDescuento = number_format($montoConDescuento, 2);

                    $totalAPagar = $mostrar['montoInfraccion']; - $mostrar['montoConDescuento'];
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
                            <td><span>Q</span><?php echo $monto ?></td>
                            <td><span>Q</span><?php echo $totalAPagar; ?></td>
                        </tr>
                    </tbody>
            <?php

                }
            }

            clearstatcache();

            ?>
        </table>
        <form action="../../boleta-multa" method="POST" target="_blank" class="mb-5">
            <input type="text" value="<?php echo $sTipoDePlaca; ?>" name="tipoPc" required hidden>
            <input type="text" value="<?php echo $sNumeroPlaca; ?>" name="numeroPlaca" required hidden>
            <button type="submit" class="btn btn-success">Generar Boleta</button>
            <a href="consulta-remisiones" class="btn btn-warning">Limpiar</a>
        </form>
</section>

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer>
</footer>
<!-- End of Footer -->
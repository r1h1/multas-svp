<div class="w-100 mb-2 mt-5">
    <p class="h2-estilo text-gray-800">Listado de Multas Pendientes de Pago</p>
    <div class="tabla-info-multas-pendientes-pago table-responsive">
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
                    <th scope="col">DESCUENTO</th>
                    <th scope="col">TOTAL</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php

                include("../../../../data/conexion-bd.php");

                $sql = "call verTodasLasMultasPendientesPago();";

                $result = mysqli_query($conexion, $sql);
                while (mysqli_next_result($conexion)) {;
                }

                $numero_filas = mysqli_num_rows($result);

                if ($numero_filas == 0) {
                    echo "<script>
                        Swal.fire({
                            icon: 'info',
                            title: 'No se encontró información'
                          })
                    </script>";
                } else {
                    //
                }

                while ($mostrarmpp = mysqli_fetch_array($result)) {

                    $tipop = strtoupper($mostrarmpp['tipoPlaca']);
                    $numerop = strtoupper($mostrarmpp['numeroPlaca']);

                    $totalAPagar = $mostrarmpp['montoInfraccion'] - $mostrarmpp['montoConDescuento'];
                    $idMulta = $mostrarmpp['idMulta'];

                ?>
                    <tr>
                        <td hidden><?php echo $idMulta; ?></td>
                        <td><?php echo $tipop, "-", $numerop; ?></td>
                        <td><?php echo strtoupper($mostrarmpp['marca']); ?></td>
                        <td><?php echo strtoupper($mostrarmpp['color']); ?></td>
                        <td><?php echo strtoupper($mostrarmpp['fechaMulta']); ?></td>
                        <td><?php echo strtoupper($mostrarmpp['lugarInfraccion']); ?></td>
                        <td><?php echo strtoupper($mostrarmpp['nombreTipoMulta']); ?></td>
                        <td><span>Q</span><?php echo $mostrarmpp['montoInfraccion']; ?></td>
                        <td><span>Q</span><?php echo $mostrarmpp['montoConDescuento']; ?></td>
                        <td><span>Q</span><?php echo $totalAPagar; ?></td>
                        <td><a href="exonerar-multas?exonerarMulta&IDE=<?php echo $idMulta; ?>" class="btn btn-success" name="exonerarMulta">Exonerar</a></td>
                        <td><a href="exonerar-multas?borrarMulta&IDB=<?php echo $idMulta; ?>" class="btn btn-danger" name="borrarMulta">Borrar</a></td>
                    </tr>
            </tbody>
        <?php

                }

        ?>
        </table>
    </div>

    <?php

    if (isset($_GET["exonerarMulta"])) {
        include("../../../../business/admin/reportes/exonerarPagar/pay-m.php");
    }

    if (isset($_GET["borrarMulta"])) {
        include("../../../../business/admin/reportes/exonerarPagar/delete-m.php");
    }

    ?>
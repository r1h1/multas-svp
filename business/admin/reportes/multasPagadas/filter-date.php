<?php

$sfInicio = $_GET["fInicio"];
$sfFin = $_GET["fFin"];

$sfInicio = date("d-m-Y", strtotime($sfInicio));
$sfFin = date("d-m-Y", strtotime($sfFin));

?>
<div class="w-100 mb-2 mt-5">
    <p class="h2-estilo text-gray-800">Listado de Multas Pagadas por Fechas</p>
    <a href="../../../../business/admin/reportes/multasPagadas/pdfDate.php?fi=<?php echo $sfInicio; ?>&ff=<?php echo $sfFin; ?>" 
    target="_blank" class="btn btn-success mt-2 mb-2">Imprimir Reporte</a>
    <div class="tabla-info-multas-pendientes-pago table-responsive" id="multasEncontradas2">
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
                    <th scope="col"></th>
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

                    $numero_filas = mysqli_num_rows($result);

                    if ($numero_filas == 0) {
                        echo "<script>
                    Swal.fire({
                        icon: 'info',
                        title: 'No se encontró información',
                        showConfirmButton: false,
                        timer: 1200
                      });
                </script>";
                    } else {
                        echo "<script>
                    Swal.fire({
                        icon: 'info',
                        title: 'Se encontraron $numero_filas multa/s.',
                        showConfirmButton: false,
                        timer: 1000
                      });
                    </script>";
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
                            <td id="btnBorrar2"><a href="multas-pagadas?borrarMulta&IDB=<?php echo $idMulta; ?>" class="btn btn-danger" name="borrarMulta">Borrar</a></td>
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

    
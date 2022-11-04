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
                        <td><span>Q</span><?php echo $totalAPagar; ?></td>
                        <td>
                            <form action="../../../boleta-multa" method="POST" target="_blank">
                                <input type="text" value="<?php echo $tipop; ?>" name="tipoPc" required hidden>
                                <input type="text" value="<?php echo $numerop; ?>" name="numeroPlaca" required hidden>
                                <button type="submit" class="btn btn-secondary">Generar Boleta</button>
                            </form>
                        </td>

                        <!-- Modal pagar multa -->
                        <div class="modal fade" id="pagarUnaMulta" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Pago de Multa</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="GET">
                                            <div class="col-md-12 mt-4">
                                                <?php

                                                $comprobante = $_GET['comprobantePago'];

                                                ?>
                                                <label for="inputP4" class="form-label">Comprobante de Pago</label>
                                                <?php

                                                if ($comprobante == "") {
                                                ?>
                                                    <input type="text" class="form-control" name="comprobantePago" oninput="javascript: if (this.value.length > this.maxLength) 
                                                this.value = this.value.slice(0, this.maxLength);" style="text-transform:uppercase" maxlength="20" placeholder="XXXXXXXXXX" required>
                                                    <button type="submit" class="btn btn-success mt-2">Guardar para Pagar</button>
                                                <?php
                                                } else {
                                                ?>
                                                    <input type="text" class="form-control" name="comprobantePago" value="<?php echo $comprobante; ?>" readonly required>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </form>
                                        <div class="col-md-12 mt-2 mb-3">

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- vacio -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php

                        if ($comprobante == "") {
                        ?>
                            <td><button type="submit" class="btn btn-success" data-toggle="modal" data-target="#pagarUnaMulta">Pagar</button></td>
                            <td><a href="multas-pendientes-pago?borrarMulta&IDB=<?php echo $idMulta; ?>" class="btn btn-danger" name="borrarMulta">Borrar</a></td>
                        <?php
                        } else {
                        ?>
                            <td><a href="multas-pendientes-pago?pagarMulta&ID=<?php echo $idMulta; ?>&comprobantePago=<?php echo $comprobante; ?>" class="btn btn-warning" name="pagarMulta">Finalizar Pago</a></td>
                            <td><a href="multas-pendientes-pago?borrarMulta&IDB=<?php echo $idMulta; ?>" class="btn btn-danger" name="borrarMulta">Borrar</a></td>
                        <?php
                        }

                        ?>
                    </tr>
            </tbody>
        <?php

                }

        ?>
        </table>
    </div>

    <?php

    if (isset($_GET["pagarMulta"])) {
        include("../../../../business/admin/reportes/pendientePagos/pay-m.php");
    }

    if (isset($_GET["borrarMulta"])) {
        include("../../../../business/admin/reportes/pendientePagos/delete-m.php");
    }
    ?>
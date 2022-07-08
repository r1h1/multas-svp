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

                $sNumeroPlaca = $_GET["numeroPlaca"];
                $sNumeroPlaca = strtoupper($sNumeroPlaca);

                $sTipoDePlaca = $_GET["tipoPlaca"];


                $sql = "CALL verMultasPorPlaca('$sTipoDePlaca','$sNumeroPlaca');";


                $result = mysqli_query($conexion, $sql);
                while (mysqli_next_result($conexion)) {;}

                while ($mostrar = mysqli_fetch_array($result)) {

                    $tipop = strtoupper($mostrar['tipoPlaca']);
                    $numerop = strtoupper($mostrar['numeroPlaca']);

                    $totalAPagar = $mostrar['montoInfraccion'] - $mostrar['montoConDescuento'];

                ?>
                    <tr>
                        <td><?php echo $tipop, "-", $numerop; ?></td>
                        <td><?php echo strtoupper($mostrar['marca']); ?></td>
                        <td><?php echo strtoupper($mostrar['color']); ?></td>
                        <td><?php echo strtoupper($mostrar['fechaMulta']); ?></td>
                        <td><?php echo strtoupper($mostrar['lugarInfraccion']); ?></td>
                        <td><?php echo strtoupper($mostrar['nombreTipoMulta']); ?></td>
                        <td><?php echo $mostrar['montoInfraccion']; ?></td>
                        <td><?php echo $mostrar['montoConDescuento']; ?></td>
                        <td><?php echo $totalAPagar; ?></td>
                        <td><button class="btn btn-secondary" type="submit">Generar Boleta</button></td>
                        <td><button class="btn btn-success" type="submit">Pagar</button></td>
                        <td><button class="btn btn-danger" type="submit">Borrar</button></td>
                    </tr>
            </tbody>
        <?php

                }

        ?>
        </table>
    </div>
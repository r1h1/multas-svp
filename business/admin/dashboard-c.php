<?php


include("../../../data/conexion-bd.php");


$totalMultasRegistradas = "CALL verTodasLasMultasRegistradas();";

$resultadoMultasRegistradas = mysqli_query($conexion, $totalMultasRegistradas);
while (mysqli_next_result($conexion)) {;
}

while ($verMultasRegistradas = mysqli_fetch_array($resultadoMultasRegistradas)) {

?>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-secondary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                            Total de Multas registradas</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php echo $verMultasRegistradas['TOTAL_MULTAS_REGISTRADAS']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
clearstatcache();
?>

<?php

include("../../../data/conexion-bd.php");

$totalMultasPendientesDePago = "CALL totalMultasPendientesPago();";

$resultadoMultasPendientesDePago = mysqli_query($conexion, $totalMultasPendientesDePago);
while (mysqli_next_result($conexion)) {;
}

while ($verMultasPendientesPago = mysqli_fetch_array($resultadoMultasPendientesDePago)) {

?>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                            Multas pendientes de pago</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php echo $verMultasPendientesPago['TOTAL_MULTAS_PENDIENTES_PAGO'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
clearstatcache();
?>

<?php

$totalMultasPagadas = "call totalDeMultasPagadas();";

$resultadoTotalMultasPagadas = mysqli_query($conexion, $totalMultasPagadas);
while (mysqli_next_result($conexion)) {;
}

while ($verMultasPagadas = mysqli_fetch_array($resultadoTotalMultasPagadas)) {
?>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                            Multas Pagadas</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php echo $verMultasPagadas['TOTAL_MULTAS_PAGADAS']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
clearstatcache();
?>

<?php

$totalDineroRecaudado = "call totalDeDineroRecaudado();";

$resultadoDineroRecaudado = mysqli_query($conexion, $totalDineroRecaudado);
while (mysqli_next_result($conexion)) {;
}

while ($verDineroRecaudado = mysqli_fetch_array($resultadoDineroRecaudado)) {

    $dinero = $verDineroRecaudado['TOTAL_DINERO_RECAUDADO'];

    if ($dinero == null) {
        $dinero = 0;
    } else {
        $dinero = $verDineroRecaudado['TOTAL_DINERO_RECAUDADO'];
    }
?>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                            Dinero Recaudado</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><span>Q</span>
                            <?php echo $dinero; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
clearstatcache();
?>
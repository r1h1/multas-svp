<?php

include("../../../data/conexion-bd.php");


$sNumeroPlaca = $_GET["numeroPlaca"];
$sNumeroPlaca = strtoupper($sNumeroPlaca);

$sTipoDePlaca = $_GET["tipoPlaca"];


$sql = "CALL verMultasPorPlaca('$sTipoDePlaca','$sNumeroPlaca');";


$result = mysqli_query($conexion, $sql);
while (mysqli_next_result($conexion)) {;
}
$numero_filas = mysqli_num_rows($result);

if ($numero_filas > 0) {
    echo "<script>
    Swal.fire({
        position: 'top-end',
        icon: 'info',
        title: 'Se encontró una multa',
        showConfirmButton: false,
        timer: 1000
      });
    window.location.href='#detalleMultas';
    
    </script>";
}


while ($mostrar = mysqli_fetch_array($result)) {

    $monto = $mostrar['montoInfraccion'];
    $montoConDescuento = $mostrar['montoConDescuento'];

    $totalAPagar = $monto - $montoConDescuento;

    $marca = $mostrar['marca'];
    $color = $mostrar['color'];
    $lugar = $mostrar['lugarInfraccion'];

    $marca =  strtoupper($marca);
    $color =  strtoupper($color);
    $lugar =  strtoupper($lugar);

?>
    <tbody>
        <tr>
            <td class="fw-bold"><?php echo $sTipoDePlaca, "-", $sNumeroPlaca; ?></td>
            <td><?php echo $marca; ?></td>
            <td><?php echo $color; ?></td>
        </tr>
    </tbody>
</table>
</div>
</section>
<section class="mt-5 detalle-infraccion" id="detalleMultas">
<p class="h2-estilo ">Detalle de la infracción</p>
<div class="tabla-info-vehiculo table-responsive">
<table class="table table-bordered">
<thead>
    <tr>
        <th scope="col">FECHA</th>
        <th scope="col">LUGAR</th>
        <th scope="col">INFRACCIÓN</th>
        <th scope="col">MONTO</th>
        <th scope="col">DESCUENTO</th>
        <th scope="col">TOTAL A PAGAR</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td><?php echo $mostrar['fechaMulta']; ?></td>
        <td><?php echo $lugar; ?></td>
        <td class="fw-bold text-decoration-underline"><?php echo $mostrar['nombreTipoMulta']; ?></td>
        <td><span>Q</span><?php echo $mostrar['montoInfraccion']; ?></td>
        <td><span>Q</span><?php echo $mostrar['montoConDescuento']; ?></td>
        <td><span>Q</span><?php echo $totalAPagar; ?></td>
    </tr>
</tbody>
<?php

}

clearstatcache();

?>
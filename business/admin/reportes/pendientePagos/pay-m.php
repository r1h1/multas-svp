<?php

include("../../../../data/conexion-bd.php");

$sIdMulta = $_GET['ID'];

$sComprobante = $_GET['comprobantePago'];

$sql = "call pagarUnaMulta('$sIdMulta','$sComprobante');";

$result = mysqli_query($conexion, $sql);
while (mysqli_next_result($conexion)) {;
}

if ($result == 1) {
    echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Operación Exitosa',
            confirmButtonText: 'Ok',
          }).then((result) => {
            if (result.isConfirmed) {
                recargar()
            }
          })
        </script>";
} else {
    echo "<script>
        Swal.fire({
          icon: 'error',
          title: 'Error no manejado, falló operación'
        })
        </script>";
}

clearstatcache();

?>

<script>
    function recargar() {
        window.location.href = 'multas-pendientes-pago';
    }
</script>
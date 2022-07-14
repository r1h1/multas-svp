<?php

    error_reporting(0);
    include("../../../../data/conexion-bd.php");

    $id = $_GET['IDE'];

    $sql = "call exonerarUnaMulta('$id');";

    $result = mysqli_query($conexion, $sql);
    while (mysqli_next_result($conexion)) {;
    }

    if($result == 1){
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
    }
    else{
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
    function recargar(){
        window.location.href='exonerar-multas';
    }
</script>
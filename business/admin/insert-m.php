<?php

    include("../../data/conexion-bd.php");


    date_default_timezone_set('America/Guatemala');
    $fechaDeIngreso = date('d-m-Y', time());
    $mesIngreso = date('m', time());


    $stipoplaca = $_POST['tipoPlaca'];
    $snumeroplaca = $_POST['numeroPlaca'];
    $smarca = $_POST['marca'];
    $scolor = $_POST['color'];
    $slugarinfraccion = $_POST['lugarInfraccion'];
    $sidtipomultafk = $_POST['tipoInfraccion'];
    $sfechamulta = $fechaDeIngreso;
    $smesmulta = $mesIngreso;
    $sestadomulta = "PENDIENTE";
    $snumeroComprobantePago = "NO EXISTE COMPROBANTE DE PAGO";


    $smarca = strtoupper($smarca);
    $snumeroplaca = strtoupper($snumeroplaca);
    $scolor = strtoupper($scolor);
    $slugarinfraccion = strtoupper($slugarinfraccion);


    $query = "CALL insertarMultas('$stipoplaca','$snumeroplaca','$smarca','$scolor','$slugarinfraccion','$sidtipomultafk','$sfechamulta',
                                    '$smesmulta','$sestadomulta','$snumeroComprobantePago');";


    $result = mysqli_query($conexion, $query);
    while (mysqli_next_result($conexion)) {;}

    if($result == 1){
            echo'<script type="text/javascript">
                alert("Registrado correctamente");
                window.location.href="../../views/rol/admin/ingreso-multas";
            </script>';
    }
    else{
        echo'<script type="text/javascript">
                alert("Error al registrar");
                window.location.href="../../views/rol/admin/ingreso-multas";
            </script>';
    }

    clearstatcache();

?>
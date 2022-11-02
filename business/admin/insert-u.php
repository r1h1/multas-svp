<?php

    include("../../data/conexion-bd.php");


    $snombrecompleto = $_POST['nombrecompleto'];
    $scuinit = $_POST['cuinit'];
    $susuario = $_POST['usuario'];
    $srol = $_POST['rol'];

    
    $snombrecompleto = strtoupper($snombrecompleto);
    $susuario = strtolower($susuario);
    $srol = strtolower($srol);


    $query = "CALL insertarUsuarioSistema('$snombrecompleto','$scuinit','$susuario','$srol');";


    $result = mysqli_query($conexion, $query);
    while (mysqli_next_result($conexion)) {;}


    if($result == 1){
            echo'<script type="text/javascript">
                alert("Registrado correctamente");
                window.location.href="../../views/rol/admin/usuarios";
            </script>';
    }
    else{
        echo'<script type="text/javascript">
                alert("Error al registrar");
                window.location.href="../../views/rol/admin/usuarios";
            </script>';
    }

    clearstatcache();

?>
<?php

include("../../data/conexion-bd.php");

$sUsuario = $_POST['usuario'];
$sClave = $_POST['clave'];


$sql = "CALL logueoSistemaMultasSvp('$sUsuario','$sClave');";
$resultado = mysqli_query($conexion, $sql);
$filas = mysqli_num_rows($resultado);


while ($mostrar =  mysqli_fetch_array($resultado)) {
    $permiso = $mostrar['rolUsuarioRegistrado'];
}


//SI LOS DATOS COINCIDEN, SE REDIRIGE AL DASHBOARD
if ($filas > 0) {

    //INICIAMOS SESIÓN Y ALMACENAMOS
    session_start();
    $_SESSION["usuario"] = $sUsuario;

    if ($permiso == 'admin') {
        header("location:../../views/rol/admin/dashboard");
    } else if ($permiso == 'policia') {
        header("location:../../views/rol/policia/ingreso-multas");
    } else {
        header("location:../../views/rol/login");
    }
}


//SI LOS DATOS NO COINCIDEN, NO SE REDIRIGE AL DASHBOARD
else {
    header("location:../../views/rol/login");
}

//LIBERAR MEMORIA DE LOS DATOS
mysqli_free_result($resultado);

?>
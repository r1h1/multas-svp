<?php

//nombre del servidor
$server = 'localhost';

//usuario acceso server
$usuario = 'root';

//contraseña acceso server
$contrasena = '';

//nombre base de datos
$baseDeDatos = 'svp_software_multas';

//conexion
$conexion = mysqli_connect($server, $usuario, $contrasena, $baseDeDatos);

//error si no hay conexiones abiertas
if (!$conexion) {
    die("No hay conexiones existentes: " . mysqli_connect_error());
}


?>
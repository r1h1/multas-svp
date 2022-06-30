<?php

//nombre del servidor
$server = 'localhost';

//usuario acceso server
$usuario = 'root';

//contraseña acceso server
$contraseña = '';

//nombre base de datos
$baseDeDatos = 'multasvp';

//conexion
$conexion = mysqli_connect($dbserver, $dbuser_name, $dbpassword, $dbnombre_bdd);


//error si no hay conexiones abiertas
if (!$conexion) {
    die("No hay conexiones existentes: " . mysqli_connect_error());
}


?>
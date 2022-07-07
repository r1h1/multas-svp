<?php

session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = ''){
  echo'<script type="text/javascript">
          window.location.href="../../404";
  </script>';
  die();
}

    session_start();
    session_destroy();
    
    header("location:../../views/rol/login");

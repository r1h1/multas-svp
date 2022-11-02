<?php

error_reporting(0);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="es_ES" />
    <meta property="og:type" content="article" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/resultado-multas.css">

    <!-- Font Awesome Free Icons -->
    <script src="https://kit.fontawesome.com/bac7f444fd.js" crossorigin="anonymous"></script>

    <!-- JQuery 3.x.x -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Sweet Alert Pop Up -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.17/sweetalert2.all.js" integrity="sha512-L0pIRrYrKsfCidtpWhWSrrbyAcSfrvMaezfwnNGns7c7MuToIEZRabX+WmZ6+Dzn8ESNsHz7t/k6vF8aM1fVXg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="icon" href="../img/logo.png">

    <title>Consulta tus Multas | Municipalidad San Vicente Pacaya</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2169B5;">
            <div class="container-fluid">
                <a class="navbar-brand">
                    <img src="../img/logo.png" alt="" width="120" height="120" class="d-inline-block align-text-top m-2">
                </a>
                <div>
                    <ul class="navbar-nav ms-auto m-4">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" alt="facebook-logo" href="https://www.facebook.com/SanVicentePacayaMunicipalidad" target="_blank" title="Nuestro Facebook"><i class="fa-brands fa-facebook fa-xl" style="color: #ffffff;"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" alt="twitter-logo" href="https://twitter.com/muniportales" target="_blank" title="Nuestro Twitter"><i class="fa-brands fa-twitter fa-xl" style="color: #ffffff;"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active " aria-current="page" alt="sitio-web-logo" href="https://www.munisanvicentepacaya.laip.gt/" target="_blank" title="Accede a nuestro Sitio Web"><i class="fa-solid fa-earth-americas fa-xl" alt="Sitio Web" style="color: #ffffff;"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <?php

    include("../business/visitante/response-multas.php");

    ?>



    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
</body>

</html>
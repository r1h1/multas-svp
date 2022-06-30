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

    <div class="container w-75">
        <main>
            <div class="mt-5">
                <h1 class="h1-estilo">Remisiones</h1>
            </div>
        </main>
        <section class="mt-5 muestra-multas">
            <p class="h2-estilo">Información del Vehículo</p>
            <div class="tabla-info-vehiculo table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">PLACA</th>
                            <th scope="col">MARCA</th>
                            <th scope="col">COLOR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-bold"></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <section class="mt-5 detalle-infraccion">
            <p class="h2-estilo">Detalle de la infracción</p>
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
                            <th scope="col">FOTOGRAFÍA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <div class="row mt-4 mb-4">
                    <div class="col">
                        <p>TOTAL Q.</p>
                    </div>
                    <div class="col">
                        <p class="fw-bold">0.00</p>
                    </div>
                    <div class="col">
                        <a href="#" class="btn btn-success">Generar Boleta</a>
                    </div>
                </div>
        </section>
    </div>
    <footer class="container-fluid p-4" style="background-color: #2169B5;">
        <a href="#"> &copy; Todos los Derechos reservados, Municipalidad de San Vicente Pacaya, Escuintla, Guatemala</a>
        <br>
        <i><a href="https://www.munisanvicentepacaya.laip.gt/" target="_blank">https://www.munisanvicentepacaya.laip.gt/</a></i>
    </footer>



    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
</body>

</html>
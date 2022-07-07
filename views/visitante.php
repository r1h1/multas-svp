<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="es_ES" />
    <meta property="og:type" content="article" />
    <meta name="description" content="Multas para San Vicente Pacaya, consultar multas Guatemala, tipo de placa y numero de placa.">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/visitante.css">

    <!-- Font Awesome Free Icons -->
    <script src="https://kit.fontawesome.com/bac7f444fd.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
            <div class="row align-items-center">
                <div class="col-md-2 text-center">
                    <i class="fa-solid fa-car carrito-logo" style="color: #FED500"></i>
                </div>
                <div class="col-md-10">
                    <h1 class="m-4 h1-estilo fw-bold">Consulta de Remisiones</h1>
                    <p class="m-4 p-estilo">Selecciona el tipo de placa del vehículo, seguidamente ingresa el número de placa.</p>
                </div>
            </div>
        </main>
        <section class="mt-3 container-sm w-100">
            <form class="row" action="resultado-multas" method="POST">
                <div class="col-md-6 mt-4">
                    <label class="form-label">Tipo de Placa</label>
                    <select class="form-select" name="placaTipo" required>
                        <option value="P">P</option>
                        <option value="C">C</option>
                        <option value="M">M</option>
                        <option value="A">A</option>
                        <option value="U">U</option>
                        <option value="CD">CD</option>
                        <option value="MI">MI</option>
                        <option value="DIS">DIS</option>
                        <option value="O">O</option>
                        <option value="CC">CC</option>
                        <option value="E">E</option>
                        <option value="EXT">EXT</option>
                        <option value="TC">TC</option>
                        <option value="TRC">TRC</option>
                    </select>
                </div>
                <div class="col-md-6 mt-4">
                    <label for="inputP4" class="form-label">Número de Placa</label>
                    <input type="text" class="form-control" name="numeroPlaca" 
                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" 
                    style="text-transform:uppercase" maxlength="6" title="Ingrese el número de placa a consultar" placeholder="INGRESA TU PLACA AQUÍ" required>
                </div>

                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary py-2 px-5">Consultar Remisiones</button>
                </div>
            </form>
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
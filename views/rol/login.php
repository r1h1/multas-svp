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
    <link rel="stylesheet" href="../../css/login.css">

    <!-- Font Awesome Free Icons -->
    <script src="https://kit.fontawesome.com/bac7f444fd.js" crossorigin="anonymous"></script>

    <!-- JQuery 3.x.x -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Sweet Alert Pop Up -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.17/sweetalert2.all.js" integrity="sha512-L0pIRrYrKsfCidtpWhWSrrbyAcSfrvMaezfwnNGns7c7MuToIEZRabX+WmZ6+Dzn8ESNsHz7t/k6vF8aM1fVXg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="icon" href="../../img/logo.png">

    <title>Consulta tus Multas | Municipalidad San Vicente Pacaya</title>
</head>

<body>

    <header>
        <nav></nav>
    </header>

    <div class="container w-75">
        <section class="login-form">
            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-5 col-lg-5 col-xl-4 align-items-center">
                        <img src="../../img/logo.png" class="img-fluid" id="logoLogin" alt="Sample image">
                    </div>
                    <div class="col-md-7 col-lg-5 col-xl-6 offset-xl-1 mt-4 mb-5">
                        <form action="../../business/login/validate-credentials" method="POST">

                            <div class="form-outline mb-5 text-center">
                                <p class="h1-estilo fw-bold">Sistema de Multas</p>
                                <p class="p-estilo">Inicia sesión para continuar.</p>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Usuario <span style="color: red;">*</span></label>
                                <input type="text" name="usuario" class="form-control" placeholder="Ingresa tu usuario aquí" 
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" 
                                    maxlength="8" style="border-radius: 10px; text-transform:lowercase;" required />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <label class="form-label" for="form3Example4">CUI / NIT</label>
                                <input type="password" name="clave" class="form-control" placeholder="Ingresa tu CUI / NIT aquí" 
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" 
                                    maxlength="13" style="border-radius: 10px;" required />
                            </div>

                            <div class="text-center text-lg-start mt-4 pt-2 mb-5">
                                <button type="submit" class="btn btn-primary mt-2" style="padding-left: 2.5rem; padding-right: 2.5rem;">Ingresar</button>
                                <a href="login" class="btn btn-dark mt-2">Regresar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer>
    </footer>



    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
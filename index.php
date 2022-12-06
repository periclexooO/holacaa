<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cable Laser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!-- ChatBot -->
    <script>
        window.addEventListener('mouseover', initLandbot, { once: true });
        window.addEventListener('touchstart', initLandbot, { once: true });
        var myLandbot;
        function initLandbot() {
            if (!myLandbot) {
                var s = document.createElement('script');s.type = 'text/javascript';s.async = true;
                s.addEventListener('load', function() {
                    var myLandbot = new Landbot.Livechat({
                        configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-1406830-G3Q1EXN8KHASSU1O/index.json',
                    });
                });
                s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.js';
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            }
        }
    </script>
</head>

<body>
    <!--Comienzo de Header-->
    <header class="sticky-top container-fluid bg-white">
        <nav class="navbar navbar-expand-md container-md">
            <div class="container-fluid py-2">
                <a class="navbar-brand" href="index.php">
                    <img src=".\imagenes\LogoPequeno.png" alt="Logo" width="150" height="70">
                </a>
                <!--ESTE BOTON PERMITE EL COLAPSO-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="servicios.php">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nosotros.php">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">Contáctanos</a>
                        </li>
                    </ul>
                    <!-- Boton que llama al modal a través de su ID -->
                    <div class="text-center md-mt-4">
                        <button class="btn btn-outline-primary me-auto" type="button" data-bs-toggle="modal"
                            data-bs-target="#modalContacto">Te llamamos</button>
                    </div>


                </div>
            </div>
        </nav>
    </header>
    <!--Fin de Header-->

    <!--Comienzo de Seccion principal-->
    <section class="container-md mt-md-4 bg-ligth">
        <div class="row">
            <div class="col-sm-12 col-md-6 text-md-start text-center">
                <p class="mb-3 fw-bold fs-5 ">Cable e internet</p>
                <h1 class="display-5 mb-4 "> Migra a cable Laser Peru y obtén un 50% de dscto en los 3 primeros meses
                </h1>
                <p class="mb-5">Gracias a nuestros servicios de cable e internet mantente conectado</p>
                <!-- Boton que llama al modal a través de su ID -->
                <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal"
                    data-bs-target="#modalContacto">Te llamamos</button>
            </div>
            <div class="col-sm-12 col-md-6 d-none d-sm-none d-md-block">
                <img src=".\imagenes\banner2.svg" alt="" width="" height="" class="float-end">
            </div>
        </div>

    </section>
    <!--Fin de Seccion principal-->

    <!--Comienzo de seccion promociones-->
    <section class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Básico</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">S/.100<small class="text-muted fw-light">/mo</small>
                        </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>100 Mbps</li>
                            <li>modem</li>
                            <li>repetidor</li>
                            <li>soporte 24/7</li>
                        </ul>
                        <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#modalContacto">Contratar</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Intermedio</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">S/.120<small class="text-muted fw-light">/mo</small>
                        </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>300 Mbps</li>
                            <li>modem</li>
                            <li>repetidor</li>
                            <li>soporte 24/7</li>
                        </ul>
                        <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#modalContacto">Contratar</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm border-primary">
                    <div class="card-header py-3 text-bg-primary border-primary">
                        <h4 class="my-0 fw-normal">Plus</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">S/.150<small class="text-muted fw-light">/mo</small>
                        </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>500 Mbps</li>
                            <li>modem</li>
                            <li>repetidor</li>
                            <li>soporte 24/7</li>
                        </ul>
                        <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#modalContacto">Contratar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Fin de seccion promociones-->

    <!--Comienzo seccion video-->
    <section class="container-md mt-md-5 bg-ligth">
        <div class="row">
            <div class="col-sm-12 col-md-6 text-md-start text-center align-self-center">
                <h1 class="display-5 mb-3 text-primary fw-semibold"> Disfruta de tus series</h1>
                <p class="mb-5 fs-3">Cámbiate a Cable laser y olvidate de la lentitud. Gracias a nuestra fibra optica
                    ahora podrás disfrutar de tus contenidos sin esperar a que tu video o juego cargue</p>

            </div>
            <div class="col-sm-12 col-md-6">
                <div class="embed-responsive embed-responsive-21by9">

                    <iframe class="embed-responsive-item" width="100%" height="350px"
                        src="https://www.youtube.com/embed/Uhfzyfe7nT0?controls=0" allowfullscreen="true"
                        style="border-radius: 20px;"></iframe>
                </div>
            </div>
        </div>

    </section>
    <!--Fin seccion video-->

    <!--Comienzo footer-->
    <footer>
        <div class="mt-5 text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
             
            ©2022 <a class="text-reset fw-bold" href="https://#">Cable Laser</a> | Todos los derechos reservados
        </div>
    </footer>





    <!-- Inicio de contenido de Modal -->
    <div class="modal fade" id="modalContacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ingresa tus datos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form  method="post" action="guardarDatos.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputNombres" class="form-label" >Nombres</label>
                            <input type="text" class="form-control" id="nombres"
                                aria-describedby="emailHelp" name="nombres">
                            <div id="emailHelp" class="form-text">Nunca compartiremos su información personal con nadie</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">celular</label>
                            <input type="text" class="form-control" id="celular" name="celular">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">aceptar terminos y condiciones</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Fin de contenido de Modal -->



    <!-- JavaScript para bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>


</body>

</html>
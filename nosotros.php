<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleNosotros.css">
    <title>pagina web</title>
</head>

<body>
    <!--Comienzo de Header-->
    <header class="sticky-top">
        <div class="container-lg">
            <nav class="navbar navbar-expand-lg bg-ligth ">
                <div class="container-fluid py-2">
                    <a class="navbar-brand" href="index.php">
                        <img src=".\imagenes\LogoPequeno.png" alt="Bootstrap" width="150" height="70">
                    </a>
                    <!--ESTE BOTON PERMITE EL COLAPSO-->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto mb-lg-0 fs-5 fw-bolder">
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
                                <a class="nav-link" href="Contactos.php">Contactanos</a>
                            </li>
                        </ul>
                        <!-- Boton que llama al modal a través de su ID -->
                        <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#modalContacto">Te llamamos</button>

                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--Fin de Header-->


    <nav class="main-nav"> </nav>

    <center>
        <div class="banner__ content">Lo mejor de nosotros a tu servicio</div>

        <section>
            <main class="main">
                <section class="group group --color ">

                    <div class="container">
                        <font size="5">
                            <h2 class="main__title">SOBRE NOSOTROS</h2>
                            <P class="main__txt"><strong>Cable Laser es el operaror 100% peruano que brinda servicios en
                                    el sector de telecomunicaciones, ofreciendo a nuestos usuarios lo mejor en
                                    tecnologia, cobertura, planes y promociones.<str< /P>

                                        <section class="group our-team">

                                        </section>
            </main>
            <footer class="main-footer">
                <div class="container container --flex">
                    <div class="column column --33">
                        <h2 class="column__title">Descripcion de la empresa</h2>
                        <div class="container container --flex">
                            <div class="column column --33">
                                <h3 class="our-team__title">VISION</h3>
                                <img src="data:image/jpeg;base64,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"
                                    alt="" class="our-team__img">
                                <p class="our-team__txt">Ser la empresa líder en el mercado de telecomunicaciones, a
                                    través de nuestro servicio de calidad. Teniendo como meta la satisfacción de
                                    nuestros clientes, con constante innovación excelencia de los servicios ofrecidos,
                                    generados por la capacidad corporativa de la empresa CABLE LASER.</p>

                            </div>
                            <div class="column column --33">
                                <h3 class="our-team__title">MISION</h3>
                                <img src="https://guiaosc.org/wp-content/uploads/2018/01/misionicono.png"
                                    alt="our-team _img ">
                                <p class="our-team__txt">Priorizar un trato personalizado en telecomunicaciones con
                                    todos nuestro clientes, que nos permitan dar solución a sus necesidades y con un
                                    valor agregado en el servicio para obtener reconocimiento y mantener nuestra
                                    política de mejora continua </p>
                            </div>
        </section>

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
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con
                                    nadie
                                    más.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">celular</label>
                                <input type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">aceptar terminos y
                                    condiciones</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- Fin de contenido de Modal -->
</body>

</html>
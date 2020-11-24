<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coursera</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../main.css">
    <link rel="stylesheet" href="../mainAlexander.css">
    <link rel="shorcut icon" href="../img/icon-blue-16x16.png">
</head>

<body>
    <?php
        include("headerSession.php");
    ?>
    <main class="is-main">
        <div id="recomendados">
            <div class="row" id="row-recomendados">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                        <a href="index" role="tab" aria-controls="#"
                            aria-selected="false">
                            <div class="nav-link">Mis Cursos</div>
                        </a>
                        <a href="Ultimo" role="tab" aria-controls="#" aria-selected="false">
                            <div class="nav-link">&nbsp;&nbsp; Última vez activo</div>
                        </a>
                        <a href="Inactivo" role="tab" aria-controls="#" aria-selected="false">
                            <div class="nav-link">&nbsp;&nbsp; Inactivo</div>
                        </a>
                        <a href="Completados" role="tab" aria-controls="#"
                            aria-selected="false">
                            <div class="nav-link">&nbsp;&nbsp; Completados</div>
                        </a>
                        <a href="Actualizaciones" role="tab" aria-controls="#"
                            aria-selected="false">
                            <div class="nav-link">Actualizaciones</div>
                        </a>
                        <a href="Logros" role="tab" aria-controls="#" aria-selected="false">
                            <div class="nav-link">Logros</div>
                        </a>
                        <div class="nav-link active">Recomendaciones</div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
                    <div id = "contenentenedor-cursos">
                        <style>
                            .cursos-div{
                                border: 1px solid #0000004d;
                                padding:1% 0%;
                            }
                            .div-curso-imagen{
                                background-color: red;
                                width: 100%;
                                height: 250px;
                            }
                            .div-curso-imagen img{
                                width: 100%;
                                height: 100%;
                            }
                            .contenedor-curso{
                                margin-top:1%;
                                border: 1px solid #0000004d;
                            }
                        </style>
                        <div id = "cursos-div">
                            
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                </div>
            </div>
        </div>
    </main>
    <footer class="p-xl-1 p-lg-1 p-md-1 p-sm-3 p-3">
        <div class="container-fluid page-footer">
            <div class="footer-margin">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <div class="mb-4 mb-sm-4 mb-md-4 mb-lg-4 mb-xl-4">
                            <img src="../img/Logo_130x20.png" id="footer-logo">
                        </div>
                        <div class="mb-3 mb-sm-3 mb-md-3 mb-lg-3 mb-xl-3">
                            Coursera brinda acceso universal a la mejor educación del mundo, al asociarse con las
                            mejores universidades
                            y organizaciones, para ofrecer cursos en línea.
                        </div>
                        <div class="mb-3 mb-sm-3 mb-md-3 mb-lg-3 mb-xl-3">
                            <span>© 2019 Coursera Inc. Todos los derechos reservados.</span>
                        </div>
                        <div>
                            <img src="../img/landingPage/download_on_the_app_store_badge_es.svg">
                            <img src="../img/landingPage/es-generic-rgb-wo-45.png">
                        </div>
                    </div>
                    <div class="container-fluid col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8" id="no-margin">
                        <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-2">
                            <ul id="listasFooter" class="list-unstyled">
                                <li>
                                    <h3>Coursera</h3>
                                </li>
                                <li><a href="">Acerca de</a></li>
                                <li><a href="">Liderazgo</a></li>
                                <li><a href="">Empleo</a></li>
                                <li><a href="">Catalogo</a></li>
                                <li><a href="">Certificados</a></li>
                                <li><a href="">Grados</a></li>
                                <li><a href="">For Enterprise</a></li>
                                <li><a href="">For goverment</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-2">
                            <ul id="listasFooter" class="list-unstyled">
                                <li>
                                    <h3>Comunidad</h3>
                                </li>
                                <li><a href="">Learners</a></li>
                                <li><a href="">Partners</a></li>
                                <li><a href="">Developers</a></li>
                                <li><a href="">Beta testers</a></li>
                                <li><a href="">Traslators</a></li>
                            </ul>
                            <a href=""></a>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-2">
                            <ul id="listasFooter" class="list-unstyled">
                                <li>
                                    <h3>Conectar</h3>
                                </li>
                                <li><a href="">Blog</a></li>
                                <li><a href="">Facebook</a></li>
                                <li><a href="">Linkedln</a></li>
                                <li><a href="">Twitter</a></li>
                                <li><a href="">Google+</a></li>
                                <li><a href="">Blog de Tecnologia</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-2">
                            <ul id="listasFooter" class="list-unstyled">
                                <li>
                                    <h3>Mas</h3>
                                </li>
                                <li><a href="">Terminos</a></li>
                                <li><a href="">Privacidad</a></li>
                                <li><a href="">Ayuda</a></li>
                                <li><a href="">Accesibilidad</a></li>
                                <li><a href="">Prensa</a></li>
                                <li><a href="">Contato</a></li>
                                <li><a href="">Directorios</a></li>
                                <li><a href="">Afiliados</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src = "../js/jquery.js"></script>
    <script src = "../js/bootstrap.min.js"></script>
    <script src = "JS/eventosDeUsuario.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
</body>
</html>
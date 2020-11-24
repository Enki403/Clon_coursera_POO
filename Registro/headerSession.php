<?php
    session_start();
    if(isset($_SESSION['direccionImagen'])){
        $Perfil =     
        '
            <div class = "foto-perfil">
                <img src="'.$_SESSION['direccionImagen'].'">
            </div>
        ';
    }else{
        $Perfil = '<i class="fas fa-user-alt icon-user"></i>';
    }
    if(isset($_SESSION['nombre'])){
        echo 
        '
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="../Registro/"><img src="../img/Logo_130x20.png" alt=""></a>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-nav" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" >
                                    Explorar
                            </a>
                        </li>
                        <li class="nav-item">
                            <form class="form-inline my-2 my-lg-0">
                              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search" style="height: 1.35em;"></i></button>
                            </form>
                        </li>
                    </ul>
                    <div class="div-usuario">
                        <a id="anchord-enterprise" href="../PaginasSuperficiales/Paginas/forEnterprise.html">For enterprise</a>
                        <div class="dropdown identificador-usuario">
                            <button class="dropdown-btnUsuario" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            '.$Perfil.'
                            </button>
                            <span>
                            '
                            .$_SESSION['nombre'].
                            '
                            </span>
                            <p style="margin-top:5%"></p>            
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="index">Mis Cursos</a>
                                <a class="dropdown-item" href="perfil">Perfil</a>
                                <a class="dropdown-item" href="#">Mis Compras</a>
                                <a class="dropdown-item" href="ajustes.php">Ajustes</a>
                                <a class="dropdown-item" href="#">Centro de Ayuda</a>
                                <a class="dropdown-item btn-cerrar" href="#">Cerrar Sesion</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>    
        ';
    }else{
        header("location:/Coursera-Poo/index.html");
    }
?>


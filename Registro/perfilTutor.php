<?php
  session_start();
  if(!isset($_SESSION['nombreTutor'])){
    header('location:loginTutor.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../mainAlexander.css">
  <link href="../css1/resume.min.css" rel="stylesheet">
  <style>
input[type=button], input[submit], input[type=reset]  {
background-color: #56baed;
border: none;
color: white;
padding: 15px 80px;
text-align: center;
text-decoration: none;
display: inline-block;
text-transform: uppercase;
font-size: 13px;
-webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
-webkit-border-radius: 5px 5px 5px 5px;
border-radius: 5px 5px 5px 5px;
margin: 5px 20px 40px 20px;
-webkit-transition: all 0.3s ease-in-out;
-moz-transition: all 0.3s ease-in-out;
-ms-transition: all 0.3s ease-in-out;
-o-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
}

input[type=button]:hover, input[submit]:hover, input[type=reset]:hover  {
background-color: #39ace7;
}

input[type=button]:active, input[submit]:active, input[type=reset]:active  {
-moz-transform: scale(0.95);
-webkit-transform: scale(0.95);
-o-transform: scale(0.95);
-ms-transform: scale(0.95);
transform: scale(0.95);
}

input[type=text],input[type=password] {
background-color: #f6f6f6;
border: none;
color: #0d0d0d;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 5px;
width: 85%;
border: 2px solid #f6f6f6;
-webkit-transition: all 0.5s ease-in-out;
-moz-transition: all 0.5s ease-in-out;
-ms-transition: all 0.5s ease-in-out;
-o-transition: all 0.5s ease-in-out;
transition: all 0.5s ease-in-out;
-webkit-border-radius: 5px 5px 5px 5px;
border-radius: 5px 5px 5px 5px;
}

input[type=text]:focus {
background-color: #fff;
border-bottom: 2px solid #5fbae9;
}

input[type=text]:placeholder {
color: #cccccc;
}



/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
-webkit-animation-name: fadeInDown;
animation-name: fadeInDown;
-webkit-animation-duration: 1s;
animation-duration: 1s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
0% {
  opacity: 0;
  -webkit-transform: translate3d(0, -100%, 0);
  transform: translate3d(0, -100%, 0);
}
100% {
  opacity: 1;
  -webkit-transform: none;
  transform: none;
}
}

@keyframes fadeInDown {
0% {
  opacity: 0;
  -webkit-transform: translate3d(0, -100%, 0);
  transform: translate3d(0, -100%, 0);
}
100% {
  opacity: 1;
  -webkit-transform: none;
  transform: none;
}
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
opacity:0;
-webkit-animation:fadeIn ease-in 1;
-moz-animation:fadeIn ease-in 1;
animation:fadeIn ease-in 1;

-webkit-animation-fill-mode:forwards;
-moz-animation-fill-mode:forwards;
animation-fill-mode:forwards;

-webkit-animation-duration:1s;
-moz-animation-duration:1s;
animation-duration:1s;
}

.fadeIn.first {
-webkit-animation-delay: 0.4s;
-moz-animation-delay: 0.4s;
animation-delay: 0.4s;
}

.fadeIn.second {
-webkit-animation-delay: 0.6s;
-moz-animation-delay: 0.6s;
animation-delay: 0.6s;
}

.fadeIn.third {
-webkit-animation-delay: 0.8s;
-moz-animation-delay: 0.8s;
animation-delay: 0.8s;
}

.fadeIn.fourth {
-webkit-animation-delay: 1s;
-moz-animation-delay: 1s;
animation-delay: 1s;
}

.underlineHover:after {
display: block;
left: 0;
bottom: -10px;
width: 0;
height: 2px;
background-color: #56baed;
content: "";
transition: width 0.2s;
}

.underlineHover:hover {
color: #0d0d0d;
}

.underlineHover:hover:after{
width: 100%;
}



/* OTHERS */

*:focus {
  outline: none;
} 

#icon {
width:60%;
}
body {
	font-family: "Poppins", sans-serif;
	height: 100vh;
  }
  
  a {
	color: #92badd;
	display:inline-block;
	text-decoration: none;
	font-weight: 400;
  }
  
  h2 {
	text-align: center;
	font-size: 16px;
	font-weight: 600;
	text-transform: uppercase;
	display:inline-block;
	margin: 40px 8px 10px 8px; 
	color: #cccccc;
  }
  
  
  
  /* STRUCTURE */
  
  .wrapper {
	display: flex;
	align-items: center;
	flex-direction: column; 
	justify-content: center;
	width: 100%;
	min-height: 100%;
	padding: 20px;
  }
  
  #formContent {
	-webkit-border-radius: 10px 10px 10px 10px;
	border-radius: 10px 10px 10px 10px;
	background: #fff;
	padding: 30px;
	width: 90%;
	max-width: 450px;
	position: relative;
	padding: 0px;
	-webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
	box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
	text-align: center;
  }
  
  #formFooter {
	background-color: #f6f6f6;
	border-top: 1px solid #dce8f1;
	padding: 25px;
	text-align: center;
	-webkit-border-radius: 0 0 10px 10px;
	border-radius: 0 0 10px 10px;
  }
  
  
  
  /* TABS */
  
  h2.inactive {
	color: #cccccc;
  }
  
  h2.active {
	color: #0d0d0d;
  border-bottom: 2px solid #5fbae9;
  }
  .form-agregar-recurso *{
    display:block;
    margin-top:1em;
  }
</style>
</head>

<body id="page-top">
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">
        <?php
          session_start();
          echo $_SESSION['nombreTutor'];
        ?>
      </span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#Perfil">Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#Agregar-Curso">Agregar Curso</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#Agregar-Recurso">Agregar Recurso</a>
        </li>
        <li class="nav-item">
          <button type = "button" class="nav-link js-scroll-trigger" id = "btn-cerrar-tutor">Cerrar Sesion</button>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="Perfil">
      <div class="w-100">
        <h1 class="mb-0">
          <?php
          $nombreTutor = explode(' ',$_SESSION['nombreTutor']);
          echo $nombreTutor[0];
          if (isset($nombreTutor[1])) {
            echo '<span class="text-primary"> '.$nombreTutor[1].'</span>';
          }
          ?>
        </h1> 

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="Agregar-Curso">
      <div class="w-100">
        <h2 class="mb-5">Agregar Curso</h2>
        <div class = "container-fluid">
            <div class = "col-12">
                <div class = "formulario-agregar-curso">
                    <div class = "formulario-curso">
                        <form>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Titulo del curso</label>
                                <div class="col-sm-10">
                                  <input class="form-control" id="nombre-curso" placeholder="Ingrese el titulo del curso">
                                  <div class ="error-curso" id = "nombre-vacio-curso">
                                      <span>El nombre esta vacio</span>
                                  </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Descripcion del curso</label>
                                <div class="col-sm-10">
                                    <textarea id = "descripcion-Curso" cols="30" rows="10"></textarea>
                                    <div class ="error-curso" id = "descripcion-vacio-curso">
                                        <span>La descripcion esta vacia</span>
                                    </div>  
                                </div>
                            </div>
                            <fieldset class="form-group">
                            </fieldset>
                            <div class="form-group row">
                              <div class="col-sm-10">
                                <button type = "button" id = "agregar-Cursos" class="btn btn-primary">Agregar Curso</button>
                              </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="Agregar-Recurso">
      <div class="w-100">
        <h2 class="mb-5">Agregar Recursos</h2>
        <div class = 'form-agregar-recurso'>
          <form id = 'agregaRecurso' enctype="multipart/form-data">
              <input type="file" name = 'archivo' id ='archivo' >
              <select id="cursos-tutor">
                <option value="-1">Selecione un curso</option>
              </select>
              <button type = 'button' class = 'class="btn btn-primary' id = 'btn-Recurso'>Agregar Recurso</button>  
          </form>
        </div>
    </section>
  </div>
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../js1/resume.min.js"></script>
  <script src = "js/forBussines.js"></script>
  <script src="js/cursos.js"></script>
  <script></script>
</body>
</html>

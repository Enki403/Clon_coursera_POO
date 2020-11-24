<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Coursera-Perfil</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../main.css">
		<link rel="stylesheet" href="../mainAlexander.css">
		<link rel="shorcut icon" href="../img/icon-blue-16x16.png">
	</head>
	<body>
		<!--inicio header-->
		<?php include("headerSession.php");?>
		<!--fin header-->
		<main id="perfil">
			<div class="row">
				<div class="horizontal-nav2 col-12">
					<ul class="nav nav-pills nav-fill">
						<li class="nav-item">
							<a class="nav-link active" id="v-pills-cuenta-tab" data-toggle="pill" href="#v-pills-cuenta" role="tab" aria-controls="v-pills-cuenta" aria-selected="true">Cuenta</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="v-pills-email-tab" data-toggle="pill" href="#v-pills-email" role="tab" aria-controls="v-pills-email" aria-selected="true">Preferencias de E-mail</a>
						</li>
					</ul>
				</div>
				<div class="horizontal-nav col-12">
					<ul class="nav nav-pills nav-fill">
						<li class="nav-item">
							<a class="nav-link active" id="v-pills-cuenta-tab" data-toggle="pill" href="#v-pills-cuenta" role="tab" aria-controls="v-pills-cuenta" aria-selected="true"><i class="fas fa-user-circle fa-2x"></i>&nbsp;Cuenta</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="v-pills-email-tab" data-toggle="pill" href="#v-pills-email" role="tab" aria-controls="v-pills-email" aria-selected="true"><i class="fas fa-envelope fa-2x"></i>&nbsp;Preferencias de E-mail</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-3 vertical-nav" id="opciones">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-cuenta-tab" data-toggle="pill" href="#v-pills-cuenta" role="tab" aria-controls="v-pills-cuenta" aria-selected="true"><i class="fas fa-user-circle fa-2x"></i>&nbsp;Cuenta</a>
						<a class="nav-link" id="v-pills-email-tab" href="#v-pills-email" aria-controls="v-pills-email" aria-selected="true">&nbsp;</a>
						<a class="nav-link" id="v-pills-email-tab" data-toggle="pill" href="#v-pills-email" role="tab" aria-controls="v-pills-email" aria-selected="true"><i class="fas fa-envelope fa-2x"></i>&nbsp;Preferencias de E-mail</a>
					</div>
				</div>
				<div class="col-9 contenido-nav" id="opciones-respuesta">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-cuenta" role="tabpanel" aria-labelledby="v-pills-cuenta-tab">
							<i>
								<h3>Cuenta</h3>
							</i>
							<form>
								<div class="form-group row">
									<label for="inputNombre" class="col-2 col-form-label">Nombre</label>
									<div class="col-8">
										<input type="text" class="form-control" id="inputNombre" placeholder="Nombre" value="<?php echo $_SESSION['nombre']?>">
									</div>
								</div>
								<div class="form-group row">
									<label  class="col-2 col-form-label">Email</label>
									<div class="col-8">
										<input type="text" class="form-control" value="<?php echo $_SESSION['correo']?>" disabled>
									</div>
								</div>
								<button type="button" class="btn btn-outline-primary" onclick="actualizarNombre()">Guardar</button>
							</form>
							<hr>
							<form>
                                <i><h3>Contraseña</h3></i>
								<div class="form-group row">
									<label for="inputViejaContra" class="col-2 col-form-label">Actual Contraseña</label>
									<div class="col-8">
										<input type="password" class="form-control" id="inputViejaContra" placeholder="Antigua Contraseña">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputNuevaContra" class="col-2 col-form-label">Actual Contraseña</label>
									<div class="col-8">
										<input type="password" class="form-control" id="inputNuevaContra" placeholder="Nueva Contraseña">
									</div>
                                </div>
                                <div class="form-group row">
									<label for="inputComproContra" class="col-2 col-form-label">Comprobar Contraseña</label>
									<div class="col-8">
										<input type="password" class="form-control" id="inputComproContra" placeholder="Nueva Contraseña">
									</div>
								</div>
								<button type="button" class="btn btn-outline-primary" onclick="actualizarContra();">Guardar</button>
                            </form>
                            <hr>
							<form>
                                <i><h3>Borrar Cuenta <span class="opaco">(Una vez borrada la cuenta, no se puede recuperar.)</span></h3></i>
								<div class="form-group row">
									<label for="inputBorrar" class="col-2 col-form-label">Contraseña</label>
									<div class="col-8">
										<input type="password" class="form-control" id="inputBorrar" placeholder="Ingresar contraseña como confirmacion.">
									</div>
								</div>
								<button type="button" class="btn boton-danger" onclick="borrarCuenta();">Borrar</button>
							</form>
						</div>
						<div class="tab-pane fade" id="v-pills-email" role="tabpanel" aria-labelledby="v-pills-email-tab">
							<i>
								<h3>Preferencias de E-mail</h3>
                            </i>
							<form>
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-2 col-form-label">Email</label>
									<div class="col-8">
                                        <input type="text" class="form-control" id="inputEmail" placeholder="<?php echo $_SESSION['correo']?>" disabled>
									</div>
								</div>
                                <div class="form-group row">
                                    <label for="inputContra" class="col-2 col-form-label">Contraseña</label>
                                    <div class="col-8">
                                        <input type="password" class="form-control" id="inputContra" placeholder="Verificar con Contraseña" disabled>
                                        <!-- deshabilitado por potencial error critico -->
                                    </div>
                                </div>
								<button type="button" class="btn btn-outline-primary" onclick="cambiarCorreo()">Cambiar</button>
							</form>
							<p></p>
						</div>
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
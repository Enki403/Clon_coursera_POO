<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../main.css">
    <link rel="stylesheet" href="../mainAlexander.css">
    <link rel="shorcut icon" href="../img/icon-blue-16x16.png">
</head>
    <?php
        include("headerSession.php");
    ?>
<body>
    <main id = "main-ajustes">
        <div class = "contenedor-main">
            <div>
                <div class = "container-fluid row titulo-ajustes">
                    <div class="col-6">
                            <h1>Editar mi perfil</h1>
                    </div>
                    <div class="col-6">
                        <a class = "btn-azul" href="perfil">Ver perfil</a>
                    </div>
                </div>
            </div>
            <div class = "container-fluid">
                <div class = "segundo-titulo">
                    <h2>Introduccion</h2>
                    <p>Permite que la comunidad de Coursera de otros estudiantes e instructores te reconozcan.</p>
                </div>
                <div class = "divs-formularios" id = "input-guardar">

                </div>
            </div>
            <div class = "container-fluid">
                <div class = "segundo-titulo">
                    <h2>Experiencia laboral y educación</h2>
                    <p>Cuéntanos tu experiencia y educación para obtener una experiencia de aprendizaje personalizada con recomendaciones de cursos.</p>
                </div>
                <div class = "divs-formularios">
                    <form>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Situacion Laboral</label>
                            <div class="col-sm-10">
                                <select class="custom-select">
                                <option value="-1" data-reactid="266">Selecciona tu estado actual</option>
                                <option value="1" data-reactid="267">Empleado de jornada completa (35&nbsp;horas o más por semana)</option>
                                <option value="2" data-reactid="268">Empleado de jornada parcial (menos de 35&nbsp;horas por semana)</option>
                                <option value="3" data-reactid="269">Autónomo de jornada completa (35&nbsp;horas o más por semana)</option>
                                <option value="4" data-reactid="270">Autónomo de jornada parcial (menos de 35&nbsp;horas por semana)</option>
                                <option value="5" data-reactid="271">Ama de casa, cuidado de un familiar o en una licencia de maternidad/paternidad</option>
                                <option value="6" data-reactid="272">Desempleado y buscando trabajo</option>
                                <option value="7" data-reactid="273">Desempleado y sin buscar trabajo</option>
                                <option value="8" data-reactid="274">Jubilado</option>
                                <option value="9" data-reactid="275">Incapacitado para trabajar</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Industria</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Si eres un empleado cuentanos en que empresa trabajas">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Empleador</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Si eres un empleado, cuentanos donde trabajas">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Profesion</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Si eres un empleado, cuentanos cual es tu profesion">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nivel de Experiencia</label>
                            <div class="col-sm-10">
                                <select class="custom-select" id="nivel-experiencia">
                                <option selected="" value="-1" data-reactid="303">Selecciona tu nivel de experiencia relevante</option>
                                <option value="1" data-reactid="304">Pasante/Aprendiz</option>
                                <option value="2" data-reactid="305">Nivel básico/inicial (de 0 a 2 años de experiencia)</option>
                                <option value="3" data-reactid="306">Nivel intermedio (más de 2 años de experiencia)</option>
                                <option value="4" data-reactid="307">Líder/Gerente</option>
                                <option value="5" data-reactid="308">Gerente sénior/Director</option>
                                <option value="6" data-reactid="309">Ejecutivo</option><option value="7" data-reactid="310">No aplica</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="inlineCheckbox1">¿Es tu empleador actual?&nbsp</label>
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Titulo mas alto</label>
                            <div class="col-sm-10">
                                <select class="custom-select">
                                <option selected="" value="-1" data-reactid="326">Selecciona tu nivel educativo más alto</option>
                                <option value="1" data-reactid="327">Inferior a diploma de secundario (o equivalente)</option>
                                <option value="4" data-reactid="328">Diploma de secundario (o equivalente)</option>
                                <option value="5" data-reactid="329">Alguna facultad, pero sin título</option>
                                <option value="6" data-reactid="330">Título de asociado (p. ej.: Grado asociado en artes, Grado asociado en ciencias)</option>
                                <option value="8" data-reactid="331">Licenciatura (p. ej.: licenciatura en letras o artes, licenciatura en ciencias)</option>
                                <option value="9" data-reactid="332">Maestría (p. ej.: máster en bellas artes, máster en ciencia, máster en ingeniería, máster en educación, máster en trabajo social, máster en administración de empresas)</option>
                                <option value="10" data-reactid="333">Título de escuela profesional (p. ej.: doctor en medicina, doctor en cirugía dental, doctor veterinario, licenciado en derecho, doctor en derecho)
                                </option><option value="11" data-reactid="334">Doctorado (p. ej.: doctor, doctor en educación)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Universidad</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder= "Ejemplo:Universidad de Nueva York">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Campo o especializacion</label>
                            <div class="col-sm-10">
                                <select class = "custom-select" id="">
                                    <option value="-1" data-reactid="347">Ejemplo: Empresa</option>
                                    <option value="1" data-reactid="348">Negocios</option>
                                    <option selected="" value="2" data-reactid="349">Ciencias de la Computación</option>
                                    <option value="3" data-reactid="350">Ingeniería</option>
                                    <option value="4" data-reactid="351">Matemáticas y estadísticas</option>
                                    <option value="5" data-reactid="352">Ciencias físicas</option>
                                    <option value="6" data-reactid="353">Ciencias biológicas</option>
                                    <option value="7" data-reactid="354">Profesiones médicas</option>
                                    <option value="8" data-reactid="355">Profesiones legales</option>
                                    <option value="9" data-reactid="356">Educación</option>
                                    <option value="10" data-reactid="357">Ciencias sociales</option>
                                    <option value="11" data-reactid="358">artes y humanidades</option>
                                    <option value="12" data-reactid="359">Otro</option>
                                    <option value="13" data-reactid="360">NA</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-check form-check-inline" id = "checkbox-estudiante">
                            <label class="form-check-label" for="inlineCheckbox1">¿Eres estudiante?&nbsp</label>
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        </div>
                        <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Campo o especializacion</label>
                                <div class="col-sm-10">
                                    <select class = "custom-select" id="">
                                        <option selected="" value="10">Solo yo.</option>
                                        <option value="100" data-reactid="376">La comunidad de Coursera</option>
                                        <option value="1000" data-reactid="377">Cualquiera a través de la Web.</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class = "container-fluid">
                    <div class = "segundo-titulo">
                        <h2>Objetivos profesionales</h2>
                        <p>Cuéntanos qué quieres hacer con tu carrera profesional para encontrar nuevas oportunidades</p>
                    </div>
                    <div class = "divs-formularios">
                        <label for="oportunidades-trabajo">¿Estás abierto a nuevas oportunidades de trabajo?</label>
                        <form>
                            <div id = "oportunidades-trabajo">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                  <label class="form-check-label" for="inlineRadio1">Si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                  <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Ubicacion</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder= "Indica la ciudad, el estado o el pais al que deseas ir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Habilidades deseadas</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder = "Cuentanos sobre las habilidades que desea obtener(p. ej:aprendizaje automatico)">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Profesion de preferencia</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder = "Cuentanos sobre las habilidades que desea obtener(p. ej:aprendizaje automatico)">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Industria</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder = "Indica la industria en la que estas interesado">
                                        <label id = "Agregar-profesion"><i class="fas fa-plus"></i>Agregar profesion de preferencia</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Privacidad de los objetivos profesionales</label>
                                    <div class="col-sm-10">
                                        <select id="">
                                            <option value = "">Solo yo</option>
                                            <option value = "">La comunidad de corusera</option>
                                            <option value = "">Cualquiera a travez de la red</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class = "container-fluid">
                    <div class = "segundo-titulo">
                        <h2>Detalles acerca de ti</h2>
                        <p>Preséntate a la comunidad de Coursera. Conéctate con estudiantes como tú para ampliar tu red.</p>
                    </div>
                    <div class = "divs-formularios">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Acerca de mi</label>
                            <div class="col-sm-10">
                                <textarea id="" cols="50" rows="3" placeholder="Hablanos sobre ti, cuentanos que haces, cuales son tus intereses y que esperas al obtener estos cursos"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Acerca de mi</label>
                            <div class="col-sm-10">
                                <input class = "form-control" type="text" placeholder = "cuentanos en la ciudad, el estado o el pais en el que vives">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Habilidades principales</label>
                            <div class="col-sm-10">
                                <input class = "form-control" type="text" placeholder = "Cuentanos sobre tus habilidades principales (p. ej., aprendizaje automatico)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Genero</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1value="option1">
                                  <label class="form-check-label" for="inlineRadio1">Genero</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2value="option2">
                                  <label class="form-check-label" for="inlineRadio2">Masculino</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Otro</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Prefiero no decirlo</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Privacidad de detalles</label>
                            <div class="col-sm-10">
                                <select id="">
                                    <option value="yo">Solo yo</option>
                                    <option value="comunidad-coursera">Comunidad de Coursera</option>
                                    <option value="cualquiera">Cualquiera a travez de la web</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class = "div-pie">
                        <div class="mx-auto div-parrafo-pie">
                            <p>
                                Nota: las publicaciones en los foros de debate y los envíos para revisión de compañeros siempre mostrarántu nombre e imagen de perfil a otros estudiantes en tus cursos. Las calificaciones de cursos y lasrevisiones que envíes pueden mostrar tu imagen de perfil a cualquier persona que vea el catálogo deCoursera. Lee nuestra la Política de Privacidad para obtener más información.
                            </p>
                            <button id = "btn-guardar-cambios">Guardar los cambios</button>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="JS/eventosDeUsuario.js"></script>
    <script src="JS/ajustes.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
</body>
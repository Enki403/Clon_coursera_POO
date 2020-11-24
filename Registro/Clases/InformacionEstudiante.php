<?php
    
    include("informacion.php");    
    class estudiante extends infoPrincipal{
        public function __construct(
            $nombre, 
            $correo,
            $contrasenia
        ){
            $this->nombre= $nombre;
            $this->correo = $correo;
            $this->contrasenia = $contrasenia;
        }

        public function informacionJson(){
            $a['nombre'] = $this->$nombre;
            $a['correo'] = $this->$correo;
            $a['ocupacion'] = $this->$ocupacion;
            $a['experienciaLaboral'] = $this->$experienciaLaboral;
            $a['educacion'] = $this->$nombre;
            $a['contrasenia'] = $this->$contrasenia;
        }
        public function registrarAlumno(){
            include("conexion.php");     
            $tabla = "usuarios";
            $conexion->query("INSERT INTO $tabla (Nombre_usuario,contrasenia,correo,idImagenesUsuarios) VALUES ('$this->nombre','$this->contrasenia','$this->correo',0)");
            if($conexion->error and mysqli_errno($conexion) == '1062'){
                echo 1062;
            }else {
                session_start();
                $separar = explode(" ",$this->nombre);
                $_SESSION['nombre'] = $separar[0];
                $_SESSION['correo'] = $this->correo;
                $_SESSION['contrasenia'] = $this->contrasenia;
                mysqli_close($conexion);
                echo "Registro/Inactivo.php";
            }
        }
        public function cerrarSesion(){
            session_unset();
            session_destroy();
            echo '../index.html';
           }
        public function iniciarSesion(){
            //Para esta consulta solo esta ocupando contrasenia, nombreUsuario y ahora que vamos a traer la direccio de imagen
            include("conexion.php");
            $tabla = "usuarios";
            $resultado = mysqli_query($conexion,"SELECT contrasenia, Nombre_usuario, idImagenesUsuarios FROM usuarios WHERE correo = '$this->correo'");
            //$resultado = mysqli_query($conexion,"SELECT Nombre_usuario,contrasenia,direccionImagen FROM usuarios INNER JOIN imagenesusuarios ON usuarios.idImagenesUsuarios = imagenesusuarios.idImagenesUsuarios WHERE correo = '$this->correo'");
            $consulta = mysqli_fetch_array($resultado);
            if(!isset($consulta['contrasenia'])){
                echo 'No existe un cuenta electronico asociado a esta correo';
            }else{
                if ($this->contrasenia === ""){
                    echo 'vacia';
                }else{
                    if($consulta['contrasenia'] != $this->contrasenia){
                        echo 'contrasenia incorrecta';
                    }else{
                        session_start();
                        $this->nombre = $consulta['Nombre_usuario'];
                        $separar = explode(" ",$this->nombre);
                        $_SESSION['nombre'] = $separar[0];
                        $_SESSION['correo'] = $this->correo;
                        $_SESSION['contrasenia'] = $this->contrasenia;
                        if($consulta['idImagenesUsuarios'] != NULL){
                            $consultaPerfil = mysqli_query($conexion,"SELECT direccionImagen FROM usuarios INNER JOIN imagenesusuarios ON usuarios.idImagenesUsuarios = imagenesusuarios.idImagenesUsuarios WHERE correo = '$this->correo'");
                            $resultadoPerfil = mysqli_fetch_array($consultaPerfil);
                            $_SESSION['direccionImagen'] = $resultadoPerfil['direccionImagen'];
                        }
                        echo 'Registro';
                    }
                }
            }
        }
        public function imagenGuardada(){
            include("conexion.php");
            $consulta = mysqli_query($conexion,"SELECT idImagenesUsuarios FROM usuarios where correo = '$this->correo'");
            $resultado = mysqli_fetch_array($consulta);
            if ($resultado['idImagenesUsuarios'] == NULL) {
                $respuesta = array();
                $respuesta['respuesta'] = FALSE;
                echo json_encode($respuesta);
            }else{
                $respuesta = array();
                $consultaDireccion = mysqli_query($conexion,"SELECT imagenesusuarios.direccionImagen FROM usuarios INNER JOIN imagenesusuarios ON usuarios.idImagenesUsuarios = imagenesusuarios.idImagenesUsuarios WHERE correo = '$this->correo'");
                $respuestaDireccion = mysqli_fetch_array($consultaDireccion);
                $respuesta['direccionImagen'] = $respuestaDireccion['direccionImagen'];
                $respuesta['respuesta'] = TRUE;
                echo json_encode($respuesta);
            }
        }
        public function ActualizarImagen($archivo){
            include("conexion.php");
            if($archivo['name'] != "" and $archivo['size'] != 0){ 
                if (($archivo['size']/1024)/1024 > 10) {
                    echo 'La imagen que se subio es muy grande';
                }else{
                    $permitidos = array("image/jpg","image/png","image/jpeg");
                    if (in_array($archivo['type'],$permitidos)){
                        $consulta = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo = '$this->correo'");  
                        $resultadoConsulta = mysqli_fetch_array($consulta);
                        $direccionBD = "dataUsuarios/".$this->correo.'/img/'.$archivo['name'];
                        $direccionAbsoluta = "c:/wamp64/www/Coursera-POO/Registro/".$direccionBD;
                        if($resultadoConsulta['idImagenesUsuarios'] == NULL){
                            $conexion->query("INSERT INTO imagenesusuarios(direccionImagen) VALUES ('$direccionBD')");
                            echo $conexion->error;
                            echo 'Esta parte';
                            $consultaImagen = mysqli_query($conexion,"SELECT * FROM imagenesusuarios WHERE direccionImagen = '$direccionBD'");
                            $resultadoImagen = mysqli_fetch_array($consultaImagen);
                            $conexion->query("UPDATE usuarios SET idImagenesUsuarios = $resultadoImagen[idImagenesUsuarios] WHERE correo = '$this->correo'");
                            session_start();
                            $_SESSION['direccionImagen'] = $direccionBD;
                            if(!file_exists('../dataUsuarios')){
                                mkdir('../dataUsuarios',0700);
                                mkdir('../dataUsuarios/'.$this->correo,0700);
                                mkdir('../dataUsuarios/'.$this->correo.'/img/');
                                move_uploaded_file($archivo['tmp_name'],$direccionAbsoluta);
                            }else{
                                if(!file_exists('../dataUsuarios/'.$this->correo)){
                                    mkdir('../dataUsuarios/'.$this->correo,0700);
                                    mkdir('../dataUsuarios/'.$this->correo.'/img/');
                                    move_uploaded_file($archivo['tmp_name'],$direccionAbsoluta);
                                }else{
                                    if (!file_exists('../dataUsuarios/'.$this->correo.'/img/')) {
                                        mkdir('../dataUsuarios/'.$this->correo.'/img/');
                                        move_uploaded_file($archivo['tmp_name'],$direccionAbsoluta);
                                    }else{
                                        move_uploaded_file($archivo['tmp_name'],$direccionAbsoluta);
                                    }
                                }
                            }
                        }else{
                            $consultaExistente = mysqli_query($conexion,"SELECT direccionImagen, usuarios.idImagenesUsuarios from usuarios INNER JOIN imagenesusuarios ON usuarios.idImagenesUsuarios = imagenesusuarios.idImagenesUsuarios WHERE correo = '$this->correo'");
                            $resultadoExistente = mysqli_fetch_array($consultaExistente);   
                            unlink("../".$resultadoExistente['direccionImagen']);
                            $conexion->query("UPDATE imagenesusuarios SET direccionImagen = '$direccionBD' WHERE idImagenesUsuarios = $resultadoExistente[idImagenesUsuarios]");
                            move_uploaded_file($archivo['tmp_name'],$direccionAbsoluta);
                            session_start();
                            $_SESSION['direccionImagen'] = $direccionBD;
                        }
                    }else{
                        echo $archivo['type'];
                        echo 'Este tipo de archivos no se puede poner de foto de perfil';
                    }
                }
            }else{
                echo 'no se subio niguna foto';
            }            
        }
        public function eliminarImagen(){
            include("conexion.php");
                 
            $consulta = mysqli_query($conexion,"SELECT usuarios.idImagenesUsuarios, imagenesusuarios.direccionImagen FROM usuarios INNER JOIN imagenesusuarios ON usuarios.idImagenesUsuarios = imagenesusuarios.idImagenesUsuarios WHERE correo = '$this->correo'");
            $resultado = mysqli_fetch_array($consulta);
            $conexion->query("DELETE FROM imagenesusuarios WHERE idImagenesUsuarios = $resultado[idImagenesUsuarios]");
            echo $conexion->error;
            echo '--------------------------------------';
            $conexion->query("UPDATE usuarios SET idImagenesUsuarios = NULL WHERE correo = '$this->correo'");
            echo $conexion->error;
            unset($_SESSION['direccionImagen']);
            unlink("../".$resultado['direccionImagen']);

        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            include("conexion.php");     
            $tabla = "usuarios";
            $conexion->query("UPDATE $tabla SET Nombre_usuario = '$nombre' WHERE correo = '$this->correo';");
            //echo "UPDATE $tabla SET Nombre_usuario = '$nombre' WHERE Nombre_usuario = '$this->nombre'";
            $this->nombre = $nombre;
            $_SESSION['nombre'] = $nombre;
        }


        public function getCorreo(){
            return $this->correo;
        }

        public function setCorreo($cor){
            include("conexion.php");     
            $tabla = "usuarios";
            $conexion->query("UPDATE $tabla SET correo = '$cor' WHERE correo = '$this->correo';");
            //echo "UPDATE $tabla SET contrasenia = '$contrasenia' WHERE contrasenia = '$this->contrasenia';";
            $this->correo = $cor;
            $_SESSION['correo'] = $cor;
        }
        
        public function getContrasenia(){
            return $this->contrasenia;
        }
        public function setContrasenia($contra){
            include("conexion.php");     
            $tabla = "usuarios";
            $conexion->query("UPDATE $tabla SET contrasenia = '$contra' WHERE correo = '$this->correo';");
            //echo "UPDATE $tabla SET contrasenia = '$contrasenia' WHERE contrasenia = '$this->contrasenia';";
            $this->contrasenia = $contra;
            $_SESSION['contrasenia'] = $contra;   
        }

        public function borrarCuenta(){
            include("conexion.php");     
            $tabla = "usuarios";
            $conexion->query("DELETE FROM $tabla WHERE correo = '$this->correo';");
            //echo "UPDATE $tabla SET contrasenia = '$contrasenia' WHERE contrasenia = '$this->contrasenia';";
        }
        public function enlistarCursosUsuarios(){
            include("conexionForBussiness.php");
            $consulta = mysqli_query($conexion,"SELECT nombreCurso,descripcionCurso,tutor FROM cursos");
            for ($i=0; $i < mysqli_num_rows($consulta) ; $i++) {    
                $resultado = mysqli_fetch_array($consulta);
                $cursos[] = $resultado; 
            }
            echo json_encode($cursos);
        }
    }
?>

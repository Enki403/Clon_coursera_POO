<?php
    include('../Clases/informacionEstudiante.php'); 
    switch ($_GET['acciones']) {
        case 'registrar':
            $alumno = new estudiante($_POST['nombre'],$_POST['correo'],$_POST['contrasenia']); 
            $alumno->registrarAlumno();
            break;
        case 'cerrarSesion':
            session_start();
            $alumno = new estudiante($_SESSION['nombre'],$_SESSION['correo'],$_SESSION['contrasenia']);
            $alumno->cerrarSesion();
            break;
        case 'iniciarSesion':
            $alumno = new estudiante(null,$_POST['correo'],$_POST['contrasenia']);
            $alumno->iniciarSesion();
            break;
        case 'actualizarImagen':
            session_start();
            $alumno = new estudiante($_SESSION['nombre'],$_SESSION['correo'],$_SESSION['contrasenia']);
            $alumno->ActualizarImagen($_FILES['archivo']);
            break;
        case 'imagenGuardada':    
            session_start();
            $alumno = new estudiante($_SESSION['nombre'],$_SESSION['correo'],$_SESSION['contrasenia']);
            $alumno->imagenGuardada();
            break;
        case 'eliminarImagen':
            session_start();
            $alumno = new estudiante($_SESSION['nombre'],$_SESSION['correo'],$_SESSION['contrasenia']);
            $alumno->eliminarImagen();
            break;
        case 'cambiarNombre':
            session_start();
            $alumno = new estudiante($_SESSION['nombre'],$_SESSION['correo'],$_SESSION['contrasenia']);
            $alumno->setNombre($_POST["nuevo"]);
            break;
        case 'cambiarContra':
            session_start();
            $alumno = new estudiante($_SESSION['nombre'],$_SESSION['correo'],$_SESSION['contrasenia']);
            if($_POST["contra"]==$_SESSION['contrasenia']){
                $alumno->setContrasenia($_POST["nuevo"]);
                echo '{"status":"exito"}';
            }else{
                echo '{"status":"fallido"}';
            }
            break;
        case 'borrarCuenta':
            session_start();
            $alumno = new estudiante($_SESSION['nombre'],$_SESSION['correo'],$_SESSION['contrasenia']);
            if($_POST["contra"]==$_SESSION['contrasenia']){
                $alumno->borrarCuenta();
                echo '{"status":"exito"}';
            }else{
                echo '{"status":"fallido"}';
            }
            break;
        case 'cambiarEmail':
            session_start();
            $alumno = new estudiante($_SESSION['nombre'],$_SESSION['correo'],$_SESSION['contrasenia']);
            if($_POST["contra"]==$_SESSION['contrasenia']){
                $alumno->setCorreo($_POST["nuevo"]);
                echo '{"status":"exito"}';
            }else{
                echo '{"status":"fallido"}';
            }
            break;
        case 'enlistarCursosUsuarios':
            session_start();
            $alumno = new estudiante($_SESSION['nombre'],$_SESSION['correo'],$_SESSION['contrasenia']);
            $alumno->enlistarCursosUsuarios();
            break;
        }
?>
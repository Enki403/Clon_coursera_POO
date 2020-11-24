<?php
    include('../Clases/InformacionBussines.php');
    switch ($_GET['acciones']) {
        case 'guardarTutor':
            $tutor = new forBussiness($_POST['nombre'],$_POST['correo'],$_POST['contrasenia']
        );
            $tutor->registrarTutor(
                $_POST['trabajo'],
                $_POST['organizacion'],
                $_POST['goverment'],
                $_POST['nonprofit'],
                $_POST['phone'],
                $_POST['pais'],
                $_POST['alumnos'],
                $_POST['describe']
            );  
            break;
        case 'iniciarSesion':
            $tutor = new forBussiness(null,$_POST['correo'],$_POST['contrasenia']);
            $tutor->iniciarSesion();
            break;
        case 'cerrarSesionTutor':
            session_start();
            $tutor = new forBussiness($_SESSION['nombreTutor'],$_SESSION['correoTutor'],$_SESSION['contraseniaTutor']);
            $tutor->cerrarSesion();
            break;
    }
?>
<?php
    include('../Clases/informacionCursos.php');
    switch ($_GET['acciones']) {
        case 'agregarCursos':
            $cursos = new cursos($_POST['nombreCurso']);
            $cursos->AgregarCurso($_POST['descripcionCurso']);
            break;
        case 'agregarRecurso':
            $cursos = new cursos(null);
            $cursos->agregarRecurso($_FILES['archivo'],$_GET['idCurso']);
            break;
        case 'enlistarCursos':
            $cursos = new cursos(null);
            $cursos->enlistarCursos();
            break;
        default:
        
            break;
    }
?>
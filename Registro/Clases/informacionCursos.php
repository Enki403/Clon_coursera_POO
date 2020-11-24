<?php
    class cursos{
        
        private $nombreCurso;
        private $descripcionCurso;
        private $idCurso;
        private $nombreTutor;
        
        public function __construct(
            $nombreCurso
        ){
            $this->nombreCurso = $nombreCurso;            
        }

        public function AgregarCurso($descripcionCurso){
            include("conexionForBussiness.php");
            echo $this->nombreCurso;
            echo $this->nombreTutor;
            echo $this->descripcionCurso;
            session_start();
            $resultado = mysqli_query($conexion,"SELECT idforEnterprise FROM forenterprise WHERE correo = '$_SESSION[correoTutor]'"); 
            $consulta = mysqli_fetch_array($resultado);
            if($this->nombreCurso != NULL && $descripcionCurso != NULL){
                $conexion->query("INSERT INTO cursos(idforEnterprise,nombreCurso,descripcionCurso,tutor) VALUES($consulta[idforEnterprise],'$this->nombreCurso','$descripcionCurso','$_SESSION[nombreTutor]')");
                echo $conexion->error;
            }
        }
        public function agregarRecurso($archivo,$idCurso){
            include("conexionForBussiness.php"); 
            if($archivo['type'] = 'aplication/pdf'){
                session_start();
                $direccionBD = "dataCursos/".$_SESSION['correoTutor'].'/archivos/'.$archivo['name'];
                $direccionAbsoluta = "c:/wamp64/www/Coursera-POO/Registro/".$direccionBD;
                if(!file_exists("../dataCursos")){
                    mkdir("../dataCursos");
                    mkdir("../dataCursos/".$_SESSION['correoTutor']);
                    mkdir("../dataCursos/".$_SESSION['correoTutor']."/archivos");
                    move_uploaded_file($archivo['tmp_name'],$direccionAbsoluta);
                    $conexion->query("INSERT INTO archivoscursos(direccionArchivo,idCursos,nombreArchivo) VALUES ('$direccionBD',$idCurso,'$archivo[name]')");
                    $conexion->error;
                }else{
                    if(!file_exists("../dataCursos/".$_SESSION['correoTutor'])){
                        mkdir("../dataCursos/".$_SESSION['correoTutor']);
                        mkdir("../dataCursos/".$_SESSION['correoTutor']."/archivos");
                        move_uploaded_file($archivo['tmp_name'],$direccionAbsoluta);
                    }else{
                        if(!file_exists("../dataCursos/".$_SESSION['correoTutor']."/archivos")){
                            mkdir("../dataCursos/".$_SESSION['correoTutor']."/archivos");
                            move_uploaded_file($archivo['tmp_name'],$direccionAbsoluta);    
                        }else{
                            move_uploaded_file($archivo['tmp_name'],$direccionAbsoluta);
                        }
                    }
                } 
            }
        }
        public function enlistarCursos(){
            include("conexionForBussiness.php");
            session_start();
            $consulta = mysqli_query($conexion,"SELECT idforEnterprise FROM forenterprise where correo = '$_SESSION[correoTutor]'");
            $resultado = mysqli_fetch_array($consulta);
            $consultaCursos = mysqli_query($conexion,"SELECT cursos.nombreCurso,cursos.idCurso FROM forenterprise INNER JOIN cursos ON forenterprise.idforEnterprise = cursos.idforEnterprise WHERE forenterprise.idforEnterprise = $resultado[idforEnterprise]");
            $arregloCursos = array();
            for($i = 0; $i < mysqli_num_rows($consultaCursos); $i++){
                $resultadoCursos = mysqli_fetch_array($consultaCursos);
                $arregloCursos[] = $resultadoCursos;
                $arregloCursos['tamanioArreglo'] = mysqli_num_rows($consultaCursos);
            }
            echo json_encode($arregloCursos);
        }
    }
?>
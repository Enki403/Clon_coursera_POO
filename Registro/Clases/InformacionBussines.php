<?php

    include('informacion.php');
    class forBussiness extends infoPrincipal{
        
        public function __construct(
            $nombre,
            $correo,
            $contrasenia
        ){
            parent::__construct(
                $nombre,
                $correo,
                $contrasenia
            );
        }
        public function registrarTutor($titulo,$organizacion,$goverment,$nonprofit,$phone,$pais,$alumno,$describe){
            include('conexionForBussiness.php');
            if($titulo != NULL && $organizacion != NULL && $phone != NULL && $pais != NULL && $alumno != NULL && $describe != NULL){
                $conexion->query("INSERT INTO forenterprise(nombre,contrasenia,titulo,nombreOrganizacion,goverment,nonprofit,numeroTelefono,pais,compania,learners,descripcion,correo,num_telefono) VALUES 
                ('$this->nombre',
                '$this->contrasenia',
                '$titulo',
                '$organizacion',
                '$goverment',
                '$nonprofit',
                '$phone',
                '$pais',
                '$organizacion',
                '$alumno',
                '$describe',
                '$this->correo',
                '$phone')");
                echo $conexion->error;
                session_start();
                $_SESSION['nombreTutor'] = $this->nombre;
                $_SESSION['correoTutor'] = $this->correo;
                $_SESSION['contraseniaTutor'] = $this->contrasenia;
                echo 'perfilTutor.php';
            }else{
                echo 'No se guardo la informacion por que algun valor viene vacio';
            }
        }
        public function iniciarSesion(){
            include('conexionForBussiness.php');
            $consulta = mysqli_query($conexion,"SELECT correo, contrasenia,nombre FROM forenterprise where correo = '$this->correo'");
            $resultado = mysqli_fetch_array($consulta);
            if(!isset($resultado['correo'])){
                $respuesta['resultado'] = false;
                echo json_encode($respuesta);                
            }else{
                if($resultado['contrasenia'] != $this->contrasenia){
                    $respuesta['resultado'] = false;
                    echo json_encode($respuesta);
                }else{
                    session_start();
                    $_SESSION['nombreTutor'] = $resultado['nombre'];
                    $_SESSION['correoTutor'] = $resultado['correo'];
                    $_SESSION['contraseniaTutor'] = $resultado['nombre'];
                    $respuesta['resultado'] = true;
                    $respuesta['direccion'] = 'perfilTutor.php';
                    echo json_encode($respuesta);
                }
            }
        }
        public function cerrarSesion(){
            session_unset();
            session_destroy();
            echo 'loginTutor.php';
        }   
    }
?>
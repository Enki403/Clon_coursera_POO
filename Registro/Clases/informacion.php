<?php
    class infoPrincipal{
            protected $nombre;
            protected $correo;
            protected $contrasenia;
            protected $ocupacion;
            protected $experienciaLaboral;
            protected $educacion;

            public function __construct(
                $nombre,
                $correo,
                $contrasenia
            ){
            $this->nombre = $nombre;
            $this->correo = $correo;
            $this->contrasenia = $contrasenia;
            }
            public function getNombre(){
                return $this->nombre;
            }
            public function setNombre($nombre){
                $this->nombre = $nombre;
            }
            public function getemail(){
                return $this->correo;
            }
            public function setemail($correo){
                $this->correo = $correo;
            }
            public function getTrabajo(){
                return $this->trabajo;
            }
            public function setTrabajo($trabajo){
                $this->trabajo = $trabajo;
            }            
            public function getExperienciaLaboral(){
                return $this->experienciaLaboral;
            }
            public function setExperienciaLaboral($experienciaLaboral){
                $this->experienciaLaboral = $experienciaLaboral;
            }
            public function getEducacion(){
                return $this->educacion;
            }
            public function setEducacion($educacion){
                $this->educacion = $educacion;
            }
            public function setContrasenia($contrasenia){
                $this->contrasenia = $contrasenia;
            }
            public function getContrasenia(){
                return $this->contrasenia;
            }
        }
?>
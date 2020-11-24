<?php
    $usuario = "forBussiness";
    $contrasenia = "forBussiness123";
    $server = "localhost";
    $bd = "coursera";
    $conexion = mysqli_connect($server,$usuario,$contrasenia,$bd) or die('No se pudo realizar la conexion');
    return $conexion;  
?>
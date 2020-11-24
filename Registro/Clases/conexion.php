<?php
    $usuario = "usuario";
    $contrasenia = "usuarios123";
    $server = "localhost";
    $bd = "coursera";
    $conexion = mysqli_connect($server,$usuario,$contrasenia,$bd) or die('No se pudo realizar la conexion');
    $resultado = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo = 'AlexanderTejedaBarahona10@gmail.com'"));
    return $conexion;
    
?>
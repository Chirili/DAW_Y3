<?php

$conexion = new PDO('mysql:host=localhost;dbname=ejemplo', 'root', '');


$resultado = $conexion->query('select * FROM alumnos');

$registro = $resultado->fetch(PDO::FETCH_NUM);
print_r($registro);
    
$conexion = null;
?>
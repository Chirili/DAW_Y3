<?php

$conexion = new PDO('mysql:host=localhost;dbname=ejemplo', 'root', '');

$resultado = $conexion->query('select * FROM alumnos');

$conexion = null;
?>

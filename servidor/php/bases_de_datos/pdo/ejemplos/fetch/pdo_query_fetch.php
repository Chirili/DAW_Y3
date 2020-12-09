<?php

$conexion = new PDO('mysql:host=localhost;dbname=ejemplo', 'root', '');

$resultado = $conexion->query('select * FROM alumnos');

while ($registro = $resultado->fetch()) {
    print "<p>Nombre: ".$registro['nombre']."</p>";
}
$conexion = null;
?>
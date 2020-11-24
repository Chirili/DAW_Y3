<?php
// utilizando llamadas a funciones
$conexion = mysqli_connect('localhost', 'root', '', 'ejemplo');
$error = mysqli_connect_errno($conexion);
if( $error != null){
print "<p>Error $error conectando a la base de datos:". mysqli_connect_error($conexion)."</p>";
exit();
}

$resultado = mysqli_query($conexion, "SELECT * from Alumnos");
$row = mysqli_fetch_assoc($resultado);
print_r($row);

// Sirve para liberar los resultados de memoria
$resultado->free();

$conexion->close();
?>
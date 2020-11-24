<?php
$conexion = new mysqli('localhost', 'root', '', 'ejemplo');

if ($conexion->connect_errno != null) {
  print "<p>Error $error conectando a la base de datos: $conexion->connect_error</p>";
  exit;
}

// Mostramos el nombre de la BBDD actual
$correcto = $conexion->real_query("SELECT * from Alumnos");
if ($correcto){
	$resultado = $conexion->use_result();
	$row = $resultado->fetch_array();
}

print_r($row);

$conexion->close();
?>
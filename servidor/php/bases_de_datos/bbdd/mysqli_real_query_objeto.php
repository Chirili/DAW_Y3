<?php
$conexion = new mysqli('localhost', 'root', '', 'ejemplo');

if ($conexion->connect_errno != null) {
  print "<p>Error $error conectando a la base de datos: $conexion->connect_error</p>";
  exit;
}

// Siempre devuelve true o false
$correcto = $conexion->real_query("SELECT * from Alumnos");
print "<p>$correcto</p>";
if ($correcto){
	$resultado = $conexion->store_result();
	$row = $resultado->fetch_array();
}


print_r($row);

$conexion->close();
?>
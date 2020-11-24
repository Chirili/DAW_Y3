<?php
$conexion = new mysqli('localhost', 'root', '', 'ejemplo');

if ($conexion->connect_errno != null) {
  print "<p>Error $error conectando a la base de datos: $conexion->connect_error</p>";
  exit;
}

$resultado = $conexion->query("SELECT * from Alumnos");
$row = $resultado->fetch_array(MYSQLI_NUM); // Valor por defecto MYSQLI_BOTH
print_r($row);

while ($row != null) {
	print "<p>Nombre: " . $row["nombre"];
	$row = $resultado->fetch_array();
}


// Sirve para liberar los resultados de memoria
$resultado->free();

$conexion->close();
?>
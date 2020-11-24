<?php
$conexion = new mysqli('localhost', 'root', '', 'ejemplo');

if ($conexion->connect_errno != null) {
  print "<p>Error $error conectando a la base de datos: $conexion->connect_error</p>";
  exit;
}

$resultado = $conexion->query("SELECT * from Alumnos");
$row = $resultado->fetch_array();
print "<p>Registros de datos: " . $conexion->affected_rows . "</p>";
// Sirve para liberar los resultados de memoria
$resultado->free();

$conexion->close();
?>

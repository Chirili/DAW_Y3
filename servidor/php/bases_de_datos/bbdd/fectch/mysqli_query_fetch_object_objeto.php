<?php
$conexion = new mysqli('localhost', 'root', '', 'ejemplo');

if ($conexion->connect_errno != null) {
  print "<p>Error $error conectando a la base de datos: $conexion->connect_error</p>";
  exit;
}

// Mostramos el nombre de la BBDD actual
$resultado = $conexion->query("SELECT * from Alumnos");
$row = $resultado->fetch_object();

print_r($row);
print "<p>". $row->nombre."</p>";
// Sirve para liberar los resultados de memoria
$resultado->free();

$conexion->close();
?>
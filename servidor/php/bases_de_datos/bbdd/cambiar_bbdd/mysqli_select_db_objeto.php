<?php
$conexion = mysqli_connect('localhost', 'root', '', 'ejemplo');

if ($conexion->connect_errno != null) {
  print "<p>Error $error conectando a la base de datos: $conexion->connect_error</p>";
  exit;
}

if ($resultado = $conexion->query( "SELECT DATABASE()")) {
  $row = $resultado->fetch_array();
  print "<p>Base de datos: " . $row[0] . "</p>";
  // Sirve para liberar los resultados de memoria
 $resultado->free();
}

$conexion->select_db("test");

// Mostramos el nombre de la BBDD actual
if ($resultado = $conexion->query( "SELECT DATABASE()")) {
  $row = $resultado->fetch_array();
  print "<p>Base de datos: " . $row[0] . "</p>";
  // Sirve para liberar los resultados de memoria
 $resultado->free();
}

$conexion->close();
?>

<?php
// utilizando llamadas a funciones
$conexion = mysqli_connect('localhost', 'root', '', 'ejemplo');

if (mysqli_connect_errno()) {
  print "Error al conectrar a MySQL: " . mysqli_connect_error();
  exit;
}

// Mostramos el nombre de la BBDD actual
if ($resultado = mysqli_query($conexion, "SELECT DATABASE()")) {
  $row = mysqli_fetch_array($resultado);
  print "<p>Base de datos: " . $row[0] . "</p>";
  // Sirve para liberar los resultados de memoria
  mysqli_free_result($resultado);
}

mysqli_select_db($conexion,"test");

// Mostramos el nombre de la BBDD actual
if ($resultado = mysqli_query($conexion, "SELECT DATABASE()")) {
  $row = mysqli_fetch_array($resultado);
  print "<p>Base de datos: " . $row[0] . "</p>";
  // Sirve para liberar los resultados de memoria
  mysqli_free_result($resultado);
}

mysqli_close($conexion);
?>

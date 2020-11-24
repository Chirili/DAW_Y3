<?php
$conexion = new mysqli('localhost', 'root', '', 'ejemplo');

if ($conexion->connect_errno != null) {
  print "<p>Error $error conectando a la base de datos: $conexion->connect_error</p>";
  exit;
}

// Mostramos el nombre de la BBDD actual
$resultado = $conexion->query("SELECT * from Alumnos");
$rows = $resultado->fetch_all(MYSQLI_NUM); // Valor por defecto
//$rows = $resultado->fetch_all(MYSQLI_ASSOC);

print_r($rows);

foreach ($rows as $row) {
	print_r ($row);
	foreach ($row as $clave => $valor) {
		print "<p> $clave: $valor </p>";
	}
}
// Sirve para liberar los resultados de memoria
$resultado->free();

$conexion->close();
?>
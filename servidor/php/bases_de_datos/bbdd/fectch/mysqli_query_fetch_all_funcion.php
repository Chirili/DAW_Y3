<?php
// utilizando llamadas a funciones
$conexion = mysqli_connect('localhost', 'root', '', 'ejemplo');
$error = mysqli_connect_errno($conexion);
if( $error != null){
print "<p>Error $error conectando a la base de datos:". mysqli_connect_error($conexion)."</p>";
exit();
}

$resultado = mysqli_query($conexion, "SELECT * from Alumnos");

$rows = mysqli_fetch_all($resultado,MYSQLI_ASSOC);

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
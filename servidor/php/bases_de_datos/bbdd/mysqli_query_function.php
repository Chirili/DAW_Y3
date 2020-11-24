<?php
// utilizando llamadas a funciones
$conexion = mysqli_connect('localhost', 'root', '', 'ejemplo');
$error = mysqli_connect_errno($conexion);
if( $error != null){
print "<p>Error $error conectando a la base de datos:". mysqli_connect_error($conexion)."</p>";
exit();
}

$resultado = mysqli_query($conexion, "SELECT * from Alumnos");
//$row = mysqli_fetch_array($resultado);
//print_r($row);

while ($row = mysqli_fetch_array($resultado)) {
	print "<p> Nombre: " . $row["nombre"] . "</p>";
}

// Sirve para liberar los resultados de memoria
mysqli_free_result($resultado);

mysqli_close($conexion);
?>
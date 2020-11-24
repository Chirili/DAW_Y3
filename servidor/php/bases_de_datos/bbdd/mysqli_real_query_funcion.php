<?php
// utilizando llamadas a funciones
$conexion = mysqli_connect('localhost', 'root', '', 'ejemplo');
$error = mysqli_connect_errno($conexion);
if( $error != null){
print "<p>Error $error conectando a la base de datos:". mysqli_connect_error($conexion)."</p>";
exit();
}

// Siempre devuelvetrue o false
$correcto = mysqli_real_query($conexion,"SELECT * from Alumnos");
if ($correcto){
	$resultado = mysqli_store_result ($conexion);
	$row = mysqli_fetch_array($resultado);
}

print_r($row);

mysqli_close($conexion);
?>
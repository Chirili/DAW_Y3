<?php
@ $conexion = new mysqli('localhost', 'root', '', 'prueba2');
$error = $conexion->connect_errno;

if( $error != null){
	print "<p>Error $error conectando a la base de datos: $conexion->connect_error</p>";
	exit();
}
?>

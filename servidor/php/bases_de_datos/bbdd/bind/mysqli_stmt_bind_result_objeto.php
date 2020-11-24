<?php
$conexion = new mysqli('localhost', 'root', '', 'ejemplo');

if ($conexion->connect_errno != null) {
  print "<p>Error $error conectando a la base de datos: $conexion->connect_error</p>";
  exit;
}

$consulta = $conexion->stmt_init();
$consulta->prepare("select * from alumnos");
$consulta->execute();

$consulta->bind_result($codigo, $nombre, $apellidos, $email, $codigocurso);

while ($consulta->fetch()){
	print "<p>Nombre: $nombre</p>";
	print "<p>Apellidos: $apellidos</p>";
	print "<p>Email: $email</p>";
}

$consulta->close();

$conexion->close();
?>
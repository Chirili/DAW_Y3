<?php
$conexion = new mysqli('localhost', 'root', '', 'ejemplo');

if ($conexion->connect_errno != null) {
  print "<p>Error $error conectando a la base de datos: $conexion->connect_error</p>";
  exit;
}

$consulta = $conexion->stmt_init();
$consulta->prepare("insert into alumnos (nombre, apellidos, email, codigocurso) values (?,?,?,?)");
$nombre = 'Nombre';
$apellidos = 'Apellidos';
$email = 'email@email.com';
$codigocurso = 1;

$consulta->bind_param('sssi', $nombre, $apellidos, $email, $codigocurso);
$consulta->execute();
$consulta->close();

$conexion->close();
?>
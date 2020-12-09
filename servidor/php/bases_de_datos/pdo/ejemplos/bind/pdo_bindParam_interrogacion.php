<?php

$conexion = new PDO('mysql:host=localhost;dbname=ejemplo', 'root', '');

$consulta = $conexion->prepare("insert into alumnos (nombre, apellidos, email, codigocurso) values (?,?,?,?)");

$nombre = 'Marta';
$apellidos = 'Palos';
$email = 'marta.palos@email.com';
$codigocurso = 1;

$consulta->bindParam(1, $nombre);
$consulta->bindParam(2, $apellidos);
$consulta->bindParam(3, $email);
$consulta->bindParam(4, $codigocurso);

$consulta->execute();

$conexion = null;
?>
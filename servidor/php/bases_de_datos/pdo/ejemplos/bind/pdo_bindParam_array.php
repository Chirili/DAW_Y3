<?php

$conexion = new PDO('mysql:host=localhost;dbname=ejemplo', 'root', '');

$consulta = $conexion->prepare("insert into alumnos (nombre, apellidos, email, codigocurso) values (:nombre, :apellidos, :email, :codigocurso)");

$nombre = 'Luz';
$apellidos = 'Baena';
$email = 'luz.baena@email.com';
$codigocurso = 1;

$consulta->bindParam(':nombre', $nombre);
$consulta->bindParam(':apellidos', $apellidos);
$consulta->bindParam(':email', $email);
$consulta->bindParam(':codigocurso', $codigocurso);

$consulta->execute(array(':nombre'=>$nombre, ':apellidos'=>$apellidos, ':email'=>$email , ':codigocurso'=>$codigocurso));

$conexion = null;
?>

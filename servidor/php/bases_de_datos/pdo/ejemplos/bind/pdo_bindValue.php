<?php

$conexion = new PDO('mysql:host=localhost;dbname=ejemplo', 'root', '');

$consulta = $conexion->prepare("insert into alumnos (nombre, apellidos, email, codigocurso) values (:nombre, :apellidos, :email, :codigocurso)");

$nombre = 'Carlos';
$apellidos = 'Martín';
$email = 'carlos.martin@email.com';
$codigocurso = 1;

$consulta->bindValue(':nombre', $nombre);// Se enlaza a la variable $nombre

$consulta->bindValue(':apellidos', $apellidos);
$consulta->bindValue(':email', $email);
$consulta->bindValue(':codigocurso', $codigocurso);

// Si ahora cambiamos el valor de $nombre:
$nombre = 'Ángela';

$consulta->execute(); // Se insertará el alumno con el nombre Carlos

$conexion = null;
?>
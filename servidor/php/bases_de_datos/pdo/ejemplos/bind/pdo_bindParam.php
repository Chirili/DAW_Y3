<?php

$conexion = new PDO('mysql:host=localhost;dbname=ejemplo', 'root', '');

$consulta = $conexion->prepare("insert into alumnos (nombre, apellidos, email, codigocurso) values (:nombre, :apellidos, :email, :codigocurso)");

$nombre = 'Pedro';
$apellidos = 'Alonso';
$email = 'pedro.alonso@email.com';
$codigocurso = 1;

$consulta->bindParam(':nombre', $nombre);// Se enlaza a la variable $nombre

$consulta->bindParam(':apellidos', $apellidos);
$consulta->bindParam(':email', $email);
$consulta->bindParam(':codigocurso', $codigocurso);

// Si ahora cambiamos el valor de $nombre:
$nombre = 'María';

$consulta->execute(); // Se insertará el alumno con el nombre María

$conexion = null;
?>
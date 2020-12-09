<?php

$conexion = new PDO('mysql:host=localhost;dbname=ejemplo', 'root', '');


$resultado = $conexion->query('select * FROM alumnos');

$resultado->bindColumn(1, $codigo);
$resultado->bindColumn(2, $nombre);
$resultado->bindColumn(3, $apellidos);
$resultado->bindColumn(4, $email);
$resultado->bindColumn(, $codigocurso);
$registro = $resultado->fetch(PDO::FETCH_BOUND);
print "<p>Código: $pepe</p>";
while ($registro = $resultado->fetch(PDO::FETCH_BOUND)) {
	print "<p>Código: $codigo</p>";
	print "<p>Nombre: $nombre</p>";
	print "<p>Apellidos: $apellidos</p>";
	print "<p>Email: $email</p>";
	print "<p>Códigocurso: $codigocurso</p>";
}
    
$conexion = null;
?>
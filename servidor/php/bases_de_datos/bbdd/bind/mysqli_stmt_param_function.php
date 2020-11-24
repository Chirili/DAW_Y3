<?php
// utilizando llamadas a funciones
$conexion = mysqli_connect('localhost', 'root', '', 'ejemplo');
$error = mysqli_connect_errno($conexion);
if( $error != null){
print "<p>Error $error conectando a la base de datos:". mysqli_connect_error($conexion)."</p>";
exit();
}


$consulta = mysqli_stmt_init($conexion);
mysqli_stmt_prepare($consulta,"insert into alumnos (nombre, apellidos, email, codigocurso) values (?,?,?,?)");
$nombre = 'Nombre';
$apellidos = 'Apellidos';
$email = 'email@email.com';
$codigocurso = 1;
mysqli_stmt_bind_param($consulta,'sssi', $nombre, $apellidos, $email, $codigocurso);
mysqli_stmt_execute($consulta);


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
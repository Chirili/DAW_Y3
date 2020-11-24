<?php
// utilizando llamadas a funciones
$conexion = mysqli_connect('localhost', 'root', '', 'ejemplo');
$error = mysqli_connect_errno($conexion);
if( $error != null){
print "<p>Error $error conectando a la base de datos:". mysqli_connect_error($conexion)."</p>";
exit();
}


$consulta = mysqli_stmt_init($conexion);
mysqli_stmt_prepare($consulta,"select * from alumnos");
mysqli_stmt_execute($consulta);

mysqli_stmt_bind_result($consulta, $codigo, $nombre, $apellidos, $email, $codigocurso);

while (mysqli_stmt_fetch($consulta)){
	print "<p>Nombre: $nombre</p>";
	print "<p>Apellidos: $apellidos</p>";
	print "<p>Email: $email</p>";
}

mysqli_close($conexion);
?>
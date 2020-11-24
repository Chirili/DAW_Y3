<?php
@ $conexion = mysqli_connect('localhost', 'root', '', 'prueba2');
$error = mysqli_connect_errno($conexion);
if( $error != null){
print "<p>Error $error conectando a la base de datos:". mysqli_connect_error($conexion)."</p>";
exit();
}
?>

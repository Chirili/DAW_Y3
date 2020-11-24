<?php
// utilizando llamadas a funciones
$conexion = mysqli_connect('localhost', 'root', '', 'ejemplo');

print "<p>".$conexion->server_info."</p>";
?>
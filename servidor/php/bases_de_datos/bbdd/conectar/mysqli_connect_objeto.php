<?php
// utilizando el método connect
$conexion = new mysqli ();
$conexion->connect('localhost', 'root', '', 'ejemplo');

print "<p>".$conexion->server_info."</p>";
?>

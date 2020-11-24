<?php
// utilizando constructores y métodos de la programación orientada a objetos
$conexion = new mysqli ('localhost', 'root', '', 'ejemplo');
print "<p>".$conexion->server_info."</p>";
 
// utilizando llamadas a funciones
$conexion = mysqli_connect ('localhost', 'root', '', 'ejemplo');
print "<p>".mysqli_get_server_info($conexion)."</p>";
?>

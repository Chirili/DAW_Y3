<?php

$datos = $_REQUEST;
print_r($datos);
print "<p>A ".$datos['nombre'] ."le gusta jugar a ". $datos["ajedrez"]."</p>";

?>
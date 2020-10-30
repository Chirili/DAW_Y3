<?php
$datos = $_REQUEST;
print "A " .$datos["nombre"]." le gusta practicar ".array_count_values($datos)["on"]." deportes";
?>
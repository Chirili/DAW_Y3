<?php
include_once('../repository.php');

$numeroAlumnos = countStudents($conexion);
print"Numero de alumnos: <a href=../list_students>$numeroAlumnos[0]<a/>";
?>
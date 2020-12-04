<?php

$conexion = new PDO('mysql:host=localhost;dbname=ejemplo', 'root', '');

// PDO::exec() devuelve el número de filas modificadas o borradas por la sentencia SQL ejecutada. Si no hay filas afectadas, PDO::exec() devuelve 0.

// consultas de acción, como INSERT, DELETE o UPDATE
$registros = $conexion->exec('DELETE FROM alumnos WHERE codigo=6');
print "<p>Se han borrado $registros registros.</p>";

$conexion = null;
?>

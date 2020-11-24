<?php
// mysqli_report — Habilita o deshabilita las funciones internas de reporte
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// utilizando constructores y métodos de la programación orientada a objetos
try {
	$conexion = new mysqli ('localhost', 'root', '', 'ejemplo');
	print "<p>Conectado a la BBDD</p>";
}catch (mysqli_sql_exception $e) {
    print "<p>Error: No puede conectarse con la base de datos.</p>";
    print "<p>Error: ".$e->getMessage()."</p>";
    exit();
}
?>
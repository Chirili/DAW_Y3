<?php
	try{
		$mysql = 'mysql:host=localhost;dbname=ejemplo';
		$usuario = 'root';
		$contrasena = '';
		$conexion = new PDO($mysql, $usuario, $contrasena);
		$version = $conexion->getAttribute(PDO::ATTR_SERVER_VERSION);
		print "Versión: $version";
	}catch (PDOException $e){
    	print "<p>" .$e->getMessage()."</p>";
	}
?>
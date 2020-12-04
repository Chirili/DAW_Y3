<?php
	try{
		$mysql = 'mysql:host=localhost;dbname=ejemplo';
		$usuario = 'root';
		$contrasena = '';
		$conexion = new PDO($mysql, $usuario, $contrasena);
		print "<p>Conectado a la BBDD</p>";
	}catch (PDOException $e){
    	print "<p>" .$e->getMessage()."</p>";
	}
?>
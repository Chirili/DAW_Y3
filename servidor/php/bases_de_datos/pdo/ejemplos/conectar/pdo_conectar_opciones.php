<?php
	try{
		$mysql = 'mysql:host=localhost;dbname=ejemplo';
		$usuario = 'root';
		$contrasena = '';
		$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
		$conexion = new PDO($mysql, $usuario, $contrasena, $opciones);
		print "<p>Conectado a la BBDD</p>";
	}catch (PDOException $e){
    	print "<p>" .$e->getMessage()."</p>";
	}
?>

<?php
include_once('repository.php');
print_r($_REQUEST);
if(empty($_REQUEST["nombre"]) || empty($_REQUEST["apellidos"]) || empty($_REQUEST["email"]) || $_REQUEST["curso"] == -1){
    header('Location:index.php');
}
insertAlumno($conexion,$_REQUEST["nombre"],$_REQUEST["apellidos"],$_REQUEST["email"],$_REQUEST["curso"]);

?>
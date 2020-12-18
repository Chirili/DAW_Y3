<?php
  require_once("funciones.php");
  if(!empty($_REQUEST["empleados"])){
    foreach($_REQUEST["empleados"] as $empleado){
      borrarEmpleado($conexion,$empleado);
    }
    header("Location:ejercicio-04-01.php");
  }

  print "<p>Ejercicio incompleto</p>";


?>
<?php
  require_once("funciones.php");

  if(empty($_REQUEST["presupuesto"]) || $_REQUEST["presupuesto"] < 0){
    header("Location:ejercicio-03-02.php",true,307);
    exit();
  }

  actualizarPresupuesto($conexion,$_REQUEST["nombre"],$_REQUEST["presupuesto"]);
  header("Location:ejercicio-03-01.php");
?> 
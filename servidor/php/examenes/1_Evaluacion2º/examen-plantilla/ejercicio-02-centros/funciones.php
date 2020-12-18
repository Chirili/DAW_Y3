<?php
$conexion = new mysqli('localhost','root','','dwes_dic2020');

function getCentros($conexion,$callBack){
    $consulta = $conexion->stmt_init();
    $consulta -> prepare("select * from centros");
    $consulta->execute();
    $consulta->bind_result($id,$nombre,$direccion);
    while($consulta->fetch()){
        $callBack([$id,$nombre,$direccion]);
    }
    $consulta->close();
}
function getDepartamentos($conexion,$idCentro,$callBack){
    $centro = $idCentro;

    $consulta = $conexion->stmt_init();
    $consulta -> prepare("select * from departamentos where centro = ?");

    $consulta->bind_param('i',$centro);
    $consulta->execute();

    $consulta->bind_result($id,$nombre,$presupuesto,$centro);
    while($consulta->fetch()){
        $callBack([$id,$nombre,$presupuesto]);
    }

    $consulta->close();
}
function contarEmpleados($conexion,$idDepartamento){
    $consulta = $conexion->stmt_init();
    $consulta -> prepare("select count(*) from empleados where departamento = $idDepartamento");
    $consulta -> execute();
    $consulta->bind_result($empleados);
    $consulta->fetch();
    $numEmpleados = $empleados;
    $consulta->close();
    return $numEmpleados;
}
function getEmpleados($conexion,$idDepartamento,$callBack){
    $depar = $idDepartamento;

    $consulta = $conexion->stmt_init();
    $consulta -> prepare("select * from empleados where departamento = ?");

    $consulta->bind_param('i',$depar);
    $consulta->execute();

    $consulta->bind_result($id,$nombre,$apellidos,$salario,$hijos,$departamentos,$nacionalidad);
    while($consulta->fetch()){
        $callBack([$id,$nombre,$apellidos,$salario,$hijos,$nacionalidad],$conexion);
    }
    $consulta->close();
}
function getNacionalidad($conexion,$idNacionalidad){
    $consulta = $conexion->stmt_init();
    $consulta -> prepare("select nacionalidad from paises where id = $idNacionalidad");
    $consulta -> execute();
    $consulta->bind_result($nacionalidad);
    $consulta->fetch();
    $aux = $nacionalidad;
    $consulta->close();
    return $aux;
}
?>
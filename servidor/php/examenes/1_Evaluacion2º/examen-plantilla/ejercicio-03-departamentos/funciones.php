<?php
if(!$conexion = new PDO('mysql:host=localhost;dbname=dwes_dic2020',"root","")){
    print "Error al conectarse a la base de datos";
}
$consulta = $conexion->query("SELECT * from departamentos");
function getDepartamentosOrderBy($conexion,$callBack,$orderBy=""){
    $consulta = $conexion->query("SELECT * from departamentos ORDER BY nombre");
    if(!empty($orderBy)){
        $consulta = $conexion->query("SELECT * FROM departamentos ORDER BY $orderBy");
    }
    while($data = $consulta->fetch(PDO::FETCH_ASSOC)){
        $callBack($data,$conexion);
    }
}
function getNombreCentro($conexion,$idCentro){
    $consulta = $conexion->prepare("SELECT nombre from centros where id = ?");
    $consulta->execute(array($idCentro));
    return $consulta->fetch(PDO::FETCH_ASSOC);
}
function getDepartamento($conexion,$idDepartamento){
    $consulta = $conexion->prepare("SELECT * from departamentos where id = ?");
    $consulta->execute(array($idDepartamento));
    return $consulta->fetch(PDO::FETCH_ASSOC);
}
function getCentros($conexion,$callBack){
    $consulta = $conexion->query("SELECT * from centros");
    while($data = $consulta->fetch(PDO::FETCH_ASSOC)){
        $callBack($data);
    }
}
function actualizarPresupuesto($conexion,$nombre,$presupuesto){
    $consulta = $conexion -> prepare("UPDATE departamentos SET presupuesto = ? WHERE nombre = ?");
    $consulta -> execute(array($presupuesto,$nombre));
}   
?>

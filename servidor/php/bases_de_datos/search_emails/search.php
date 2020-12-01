<?php
$email = $_REQUEST["correo"];
$nombre = $_REQUEST["nombre"];
$conexion = new PDO("mysql:host=localhost;dbname=ejemplo","root","");

if(!empty(($_REQUEST["nombre"]))&&!empty($_REQUEST["correo"])){
    $consulta = $conexion->prepare("select * from alumnos where email like ? or nombre like ?");
    $consulta->execute(array('%'.$email.'%','%'.$_REQUEST["nombre"].'%'));
}else{
    $consulta = $conexion->prepare((!empty($_REQUEST["nombre"]))?"select * from alumnos where nombre like ?":"select * from alumnos where email like ?");
    $consulta->execute(array('%'.((!empty($_REQUEST["nombre"]))?$_REQUEST["nombre"]:$_REQUEST["correo"]).'%'));
}
if(!empty($_REQUEST["nombre"]) && !empty($_REQUEST["correo"]) && isset($_REQUEST["borrar"])){
    $consulta = $conexion->prepare("DELETE FROM alumnos WHERE email=? AND nombre=?");
    $consulta->execute(array($_REQUEST["correo"],$_REQUEST["nombre"]));
    header("Location:form.php");
}

$datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
if(count($datos)> 0){
print "<table>";
print "<thead>";
print "<tr>";
foreach(array_keys($datos[0]) as $campo){
    print "<th>";
    print $campo;
    print "</th>";
}
print "</tr>";
print "</thead>";
print "<tbody>";
foreach($datos as $fila){
    print "<tr>";
    foreach($fila as $dato){
        print "<td>";
        print $dato;
        print "</td>";
    }
    print "</tr>";
}
print "</tbody>";
print "</table>";
}else{
    print "<h1>No se ha encontrado ningun email que contenga $email</h1>";
}
?>
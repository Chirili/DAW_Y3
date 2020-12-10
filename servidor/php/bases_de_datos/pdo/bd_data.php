<?php
$conexion = new PDO('mysql:host=localhost;dbname=ejemplo','root','');
function getRoles($conexion){
    return $conexion->query("SELECT * FROM roles")->fetchAll(PDO::FETCH_ASSOC);
}
function getUsers($conexion){
    return $conexion->query("SELECT * FROM usuarios")->fetchAll(PDO::FETCH_ASSOC);
}
function insertRole($conexion,$roleName){
    $conexion->prepare("INSERT INTO roles(nombre) VALUES(?)")->execute(array($roleName));
}
function insertUser($conexion,$user){
    $consulta = $conexion->prepare("INSERT INTO usuarios(nombre,password,rol,fecha_alta) VALUES(?,?,?,?)");
    $consulta->execute(array($user["username"],$user["password"],$user["rol"],date('Y-m-d H:i:s')));
}
?>
<?php
$conexion = new PDO('mysql:host=localhost;dbname=ejemplo','root','',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
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
function getCourses($conexion){
    return $conexion->query("SELECT * FROM cursos")->fetchAll(PDO::FETCH_ASSOC);
}
function insertCourse($conexion,$courseName){
    $conexion->prepare('INSERT INTO cursos(nombre) VALUES(?)')->execute(array($courseName));
}
function getStudents($conexion){
    return $conexion->query("SELECT * FROM alumnos")->fetchAll(PDO::FETCH_ASSOC);
}
function getCourseName($conexion,$courseCod){
    $consulta = $conexion->prepare('SELECT nombre FROM cursos WHERE codigo = ?');
    $consulta ->execute(array($courseCod));
    return $consulta->fetch();
}
function insertStudent($conexion,$student){
    $conexion->prepare("INSERT INTO alumnos(nombre,apellidos,email,codigo_curso) VALUES(?,?,?,?)")->execute(array($student["nombre"],$student["apellidos"],$student["email"],$student["curso"]));
}
?>
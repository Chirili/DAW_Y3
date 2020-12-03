<?php

$conexion = new PDO('mysql:host=localhost;dbname=ejemplo',"root","");
$prueba = $conexion->query("select * from cursos");
$prueba->fetchAll(PDO::FETCH_ASSOC);
function getCursos($conexion){
    $consulta = $conexion->query("SELECT * FROM cursos");
    return $consulta->fetchAll(PDO::FETCH_ASSOC);
}
function insertAlumno($conexion,$nombre,$apellido,$email,$curso){
    $consulta = $conexion->prepare("INSERT INTO alumnos(nombre,apellidos,email,codigo_curso) VALUES(?,?,?,?)");
    $consulta->execute(array($nombre,$apellido,$email,$curso));
}
function listStudentsWithName($conexion){
    $consulta = $conexion->query("SELECT a.codigo, a.nombre, a.apellidos, a.email,cursos.nombre as 'curso' FROM alumnos a RIGHT JOIN cursos ON cursos.codigo=a.codigo_curso");
    return $consulta->fetchAll(PDO::FETCH_ASSOC);
}
function countStudents($conexion){
    $consulta = $conexion->query("SELECT COUNT(*) FROM alumnos");
    return $consulta->fetch(PDO::FETCH_COLUMN);
}
function getStudentByID($conexion,$id){
    $consulta = $conexion->prepare("SELECT * FROM alumnos WHERE codigo=?");
    $consulta->execute(array($id));
    return $consulta->fetch(PDO::FETCH_ASSOC);
}
function getStudentsByCourseID($conexion,$id){
    $consulta = $conexion->prepare('SELECT * FROM alumnos WHERE codigo_curso=?');
    $consulta->execute(array($id));
    return $consulta->fetchAll(PDO::FETCH_ASSOC);
}
function updateStudentCourse($conexion,$studentID,$course){
    $consulta = $conexion->prepare("UPDATE alumnos SET codigo_curso=? WHERE codigo=?");
    $consulta->execute(array($course,$studentID));
}
function getCountStudentsCourses($conexion){
    $consulta = $conexion->query('SELECT cursos.codigo,cursos.nombre,COUNT(*) AS numero_alumnos FROM alumnos RIGHT JOIN cursos on cursos.codigo=alumnos.codigo_curso GROUP BY alumnos.codigo_curso');
    return $consulta->fetchAll(PDO::FETCH_ASSOC);
}
?>
<?php
include_once('../repository.php');
print"<h2>Datos cursos</h2>";
foreach(getCountStudentsCourses($conexion) as $curso){
    print "<p>Nombre del curso: $curso[nombre]</p>";
    print "<p>Numero de participantes: $curso[numero_alumnos]</p>";
    print"<p>Nombre y apellidos: ";
    foreach(getStudentsByCourseID($conexion,$curso["codigo"]) as $student){
        
        print "$student[nombre] $student[apellidos] - ";
    }
    print"</p>";
    print"<hr>";
}
?>


<?php
include_once('../repository.php');

foreach (listStudentsWithName($conexion) as $student) {
    print"<p>Nombre del alumno:$student[nombre], Apellidos:$student[apellidos], Email: $student[email],Curso:<a href=form.php?student=$student[codigo]&codigo=$student[curso]>$student[curso]</a></p>";
}
?>
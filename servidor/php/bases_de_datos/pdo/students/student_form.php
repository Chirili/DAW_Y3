<?php
include_once('../bd_data.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="insert_student.php" method="POST">
    Introduce el nombre del alumno: <?=(isset($_REQUEST["studentName"])) ? "<input type=text name=studentName value=$_REQUEST[studentName]>":"<input type=text name=studentName>"?><br>
    Introduce los apellidos del alumno:<?=(isset($_REQUEST["studentSurname"])) ? "<input type=text name=studentSurname value=$_REQUEST[studentSurname]>":"<input type=text name=studentSurname>"?><br>
    Introduce el email del alumno:<?=(isset($_REQUEST["studentEmail"])) ? "<input type=text name=studentEmail value=$_REQUEST[studentEmail]>":"<input type=text name=studentEmail>"?><br>
    Selecciona el curso en el que quieres matricularlo: 
    <select name="course">
        <?php
        foreach(getCourses($conexion) as $course){
            if(isset($_REQUEST["course"]) && $_REQUEST["course"] == $course["codigo"]){
                print "<option value=$course[codigo] selected>$course[nombre]</option>";
            }else{
                print "<option value=$course[codigo]>$course[nombre]</option>";
            }
        }
        ?>
    </select><br>
    <button type="submit">Crear Alumno</button>
</form>
</body>
</html>
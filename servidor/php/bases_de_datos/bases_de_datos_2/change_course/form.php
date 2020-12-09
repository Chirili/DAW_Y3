<?php
include_once('../repository.php');
$student = getStudentByID($conexion,$_REQUEST["student"]);
if(isset($_REQUEST["modificar"])){
    $cursos = getCursos($conexion);
    foreach($cursos as $curso){
        if($curso["codigo"] == $_REQUEST["curso"]){
            updateStudentCourse($conexion,$_REQUEST["student"],$_REQUEST["curso"]);
            header('Location:index.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <p>Nombre del alumno: <?=$student["nombre"]?></p>
    <p>Apellidos del alumno: <?=$student["apellidos"]?></p>
    <p>Email del alumno: <?=$student["email"]?></p>
    Cambiar curso del alumno<select name="curso" id="">
        <?php
            include_once('repository.php');
            foreach(getCursos($conexion) as $curso){
                if($curso["nombre"] == $_REQUEST["codigo"]){
                    print "<option value=$curso[codigo] selected>$curso[nombre]</option>";
                }else{
                    print "<option value=$curso[codigo]>$curso[nombre]</option>";
                }
            }
        ?>
    </select>
    <button type="submit" name="modificar">Cambiar</button>
    </form>
</body>
</html>
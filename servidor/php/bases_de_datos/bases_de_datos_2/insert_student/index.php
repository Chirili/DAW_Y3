<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="POST">
        Introduce el nombre: <input type="text" name="nombre"><br>
        Introduce le apellido: <input type="text" name="apellidos"><br>
        Introduce el email: <input type="text" name="email"><br>
        Curso: 
        <select name="curso" id="">
        <option value="-1">Selecciona el curso</option>
        <?php
            include_once('repository.php');
            foreach(getCursos($conexion) as $curso){
                print "<option value=$curso[codigo]>$curso[nombre]</option>";
            }
        ?>
        </select><br>
        <button type="submit">Enviar</button>

    </form>
</body>
</html>
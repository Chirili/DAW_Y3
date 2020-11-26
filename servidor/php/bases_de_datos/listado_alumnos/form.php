<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="index.php" method="POST">
   <?php
    if(count($_POST)> 0){
        $conexion = new PDO("mysql:host=localhost;dbname=ejemplo", 'root', '');
        $consulta = $conexion->prepare("select * from alumnos where codigo=?");
        $consulta->execute(array(array_key_first($_REQUEST)));
        $datos = $consulta->fetch(PDO::FETCH_ASSOC);
    }
   ?>
        Introduce el nombre: <input type="text" name="nombre" value=<?=(!isset($datos))?"":$datos["nombre"]?>><br>
        Introduce los apellidos: <input type="text" name="apellidos" value=<?=(!isset($datos))?"":$datos["apellidos"]?>><br>
        Introduce el email: <input type="text" name="email" value=<?=(!isset($datos))?"":$datos["email"]?>><br>
        Introduce el codigo de curso: <input type="text" name="cod_curso"value=<?=(!isset($datos))?"":$datos["codigo_curso"]?>><br>
        <?=(count($_POST)>0) ? "<button name=edit[".array_key_first($_POST)."] typ=submit>Editar alumno</button>" : "<button name=add type=submit>Añadir alumno</button>"?>
   </form> 
</body>
</html>
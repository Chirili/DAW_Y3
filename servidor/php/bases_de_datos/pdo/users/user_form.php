<?php
include_once("../bd_data.php");
session_name("users");
session_start();
print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert_user.php" method="POST">
    Introduce el nombre de usuario:
    <?=(!isset($_SESSION["errors"]["username"]))?"<input type=text name=username>":"<input type=text name=username value=$_SESSION[username]>"?>
    <?=(!isset($_SESSION["errors"]["username"])) ? "": "La longitud del nombre de usuario no es correcto"?>
    <br>
    Introduce la contraseña: 
    <?=(!isset($_SESSION["errors"]["password"]))?"<input type=password name=password>":"<input type=password name=password value=$_SESSION[password]>"?>
    <?=(!isset($_SESSION["errors"]["password"])) ? "": "La longitud de la contraseña no es correcta"?><br>
    Elige el rol del usuario:
    <select name="rolSelected">
        <?php
            foreach(getRoles($conexion) as $rol){
                print "<option value=$rol[role_id]>";
                print $rol["nombre"];
                print "</option>";
            }
        session_destroy();
        ?>
    </select>
    <button type="submit">Crear usuario</button>
    </form>
</body>
</html>
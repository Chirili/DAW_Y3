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
    <table>
        <thead>
            <tr>
                <th>
                    Login
                </th>
                <th>
                    Rol
                </th>
                <th>
                    Fecha de Alta
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach(getUsers($conexion) as $user){
                print "<td>";
                print $user["nombre"];
                print "</td>";
                print "<td>";
                print $user["rol"];
                print "</td>";
                print "<td>";
                print $user["fecha_alta"];
                print "</td>";
            }
            $conexion=null;
            ?>
        </tbody>
    </table>
    <a href="user_form.php">Añadir nuevo usuario</a>
</body>
</html>
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
                <td>
                    ID
                </td>
                <td>
                    Nombre
                </td>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach(getRoles($conexion) as $rol){
                print "<tr>";
                print "<td>";
                print $rol["role_id"];
                print "</td>";
                print "<td>";
                print $rol["nombre"];
                print "</td>";
                print "</tr>";
            }
            $conexion = null;
        ?>
        </tbody>
    </table>
    <form action="role_form.php" method="POST">
        <button>Añadir Rol</button>
    </form>
</body>
</html>
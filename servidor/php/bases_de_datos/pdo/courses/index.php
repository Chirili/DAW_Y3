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
                    CODIGO
                </th>
                <th>
                    NOMBRE
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach(getCourses($conexion) as $course){
                    print "<tr>";
                    print "<td>";
                    print $course["codigo"];
                    print "</td>";
                    print "<td>";
                    print $course["nombre"];
                    print "</td>";
                    print "</tr>";
                }
            ?>
        </tbody>
    </table>
    <form action="course_form.php" method="POST">
            <button type="submit">Añadir Curso</button>
    </form>
</body>
</html>
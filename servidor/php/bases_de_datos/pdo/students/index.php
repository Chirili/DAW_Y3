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
                    NOMBRE
                </th>
                <th>
                    APELLIDOS
                </th>
                <th>
                    EMAIL
                </th>
                <th>
                    CURSO
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach(getStudents($conexion) as $student){
                    print "<tr>";
                    print "<td>$student[nombre]";
                    print "</td>";
                    print "<td>$student[apellidos]";
                    print "</td>";
                    print "<td>$student[email]";
                    print "</td>";
                    print "<td>";
                    print getCourseName($conexion,$student["codigo_curso"])[0];
                    print "</td>";
                    print "</tr>";
                }
            ?>
        </tbody>
    </table>
    <a href="student_form.php">Añadir Alumno</a>
</body>
</html>
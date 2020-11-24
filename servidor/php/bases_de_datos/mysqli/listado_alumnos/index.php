<?php
$conexion = new mysqli('localhost', 'root', '', 'ejemplo');

if ($conexion->connect_errno != null) {
  print "<p>Error $error conectando a la base de datos: $conexion->connect_error</p>";
  exit;
}

$consulta = $conexion->stmt_init();
$consulta->prepare("insert into alumnos (nombre, apellidos, email, codigocurso) values (?,?,?,?)");
$nombre = 'Nombre';
$apellidos = 'Apellidos';
$email = 'email@email.com';
$codigocurso = 1;

$consulta->bind_param('sssi', $nombre, $apellidos, $email, $codigocurso);
$consulta->execute();
$consulta->close();


$consulta = $conexion->stmt_init();
$consulta -> prepare("select * from alumnos");
$consulta -> execute();

$consulta -> bind_result($codigo,$nombre,$apellido,$email,$cod_curso);
$cabeceras = ["Nombre", "Apellidos","Email","Codigo Curso"];

print "<table>";
print "<thead>";
print "<tr>";
foreach($cabeceras as $cabecera){
    print "<th>";
    print "$cabecera";
    print "</th>";
}
print "</tr>";
print "</thead>";
print "<tbody>";
while($consulta->fetch()){
    print "<tr>";
    print"<td>";
    print("$nombre");
    print"</td>";
    print"<td>";
    print("$apellido");
    print"</td>";
    print"<td>";
    print("$email");
    print"</td>";
    print"<td>";
    print("$cod_curso");
    print"</td>";
    print "</tr>";
}
print "</tbody>";
print "</table>";
$conexion->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, th ,td{
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="form.php" method="POST">
        <button>Añadir Alumno</button>
    </form>
</body>
</html>

<?php
$conexion = new PDO("mysql:host=localhost;dbname=ejemplo", 'root', '');
session_start();
if (!$conexion) {
  print "Error conectandose a la base de datos";
  print_r($conexion->errorInfo());
  exit;
} 
$_SESSION["order"] = "codigo";
if(isset($_GET["order"])){
    $_SESSION["order"] = $_GET["order"];
}
if(isset($_REQUEST["si"])){
    $consulta = $conexion->prepare("delete from alumnos where codigo=?");
    $consulta->execute(array(array_key_first($_REQUEST["si"])));
}
if(isset($_REQUEST["add"])){
    $consulta = $conexion->prepare("insert into alumnos (nombre,apellidos,email,codigo_curso)values(?,?,?,?)");
    $consulta->execute(array($_REQUEST["nombre"],$_REQUEST["apellidos"],$_REQUEST["email"],$_REQUEST["cod_curso"]));
}
if(isset($_REQUEST["edit"])){
    $consulta = $conexion->prepare("UPDATE alumnos SET nombre=?,apellidos=?,email=?,codigo_curso=? WHERE codigo=?");
    $result = $consulta->execute(array($_REQUEST["nombre"],$_REQUEST["apellidos"],$_REQUEST["email"],$_REQUEST["cod_curso"],array_key_first($_REQUEST["edit"])));
}
$consulta = $conexion->query("select * from alumnos order by $_SESSION[order]");
$cabeceras = ["nombre","apellidos","email","codigo_curso","editar","borrar"];
print "<table>";
print "<thead>";
print "<tr>";
foreach($cabeceras as $cabecera){
    print "<th>";
    print "<a href=?order=$cabecera>$cabecera</a>";
    print "</th>";
}
print "</tr>";
print "</thead>";
print "<tbody>";
print "<form action=form.php method=POST>";
while($dato = $consulta->fetch(PDO::FETCH_ASSOC)){
    print "<tr>";
    print"<td>";
    print("$dato[nombre]");
    print"</td>";
    print"<td>";
    print("$dato[apellidos]");
    print"</td>";
    print"<td>";
    print("$dato[email]");
    print"</td>";
    print"<td>";
    print("$dato[codigo_curso]");
    print"</td>";
    print"<td>";
    print "<button type=submit name=$dato[codigo]>Editar</button>";
    print"</td>";
    print"<td>";
    print "<button type=submit name=borrar[$dato[codigo]]>Borrar</button>";
    print"</td>";

    print "</tr>";
}
print "</form>";
print "</tbody>";
print "</table>";
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
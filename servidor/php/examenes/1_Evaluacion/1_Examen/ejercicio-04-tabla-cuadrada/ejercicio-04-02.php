<?php
session_start();

if(empty($_REQUEST["size"]) || $_REQUEST["size"] < 0 || $_REQUEST["size"] > 15){
  header("Location:ejercicio-04-01.html");
}
$_SESSION["tabla"] = $_REQUEST["size"];


?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tabla cuadrada con casillas de verificación
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Tabla cuadrada con casillas de verificación</h1>
  <h3>Marque las casillas de verificación que quiera y contaré cuántas ha marcado.</h3>
  <form action="ejercicio-04-03.php" method="post">

<?php
print "<table>";
print "<tobdy>";
$contador = 0;
for($i = 0; $i < $_REQUEST["size"];$i++){
  print "<tr>";
  for($j = 0; $j < $_REQUEST["size"];$j++){
    print "<td>";
    print "<input type=checkbox name=casillas[] value=".($contador+1)." casillas>";
    print ($contador+1);
    print "</td>";
    $contador++;
  }
  print "<tr>";
}
print "</tobdy>";
print "</table>";
print "<p>Ejercicio incompleto</p>";
?>
	<!--  ESCRIBA AQUI EL CÓDIGO HTML Y/O PHP NECESARIO -->
  <button type=submit>Contar</button>

  </form>
</body>
</html>
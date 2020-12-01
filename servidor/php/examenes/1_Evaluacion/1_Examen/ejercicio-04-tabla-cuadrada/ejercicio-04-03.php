<?php
session_start();
print_r($_REQUEST);

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
  <?php
  if(!isset($_SESSION["tabla"])){
    header("Location: ejercicio-04-01.html");
  }
  print "<p>De una tabla de ".pow($_SESSION["tabla"],2)." casillas se han marcado ".((isset($_REQUEST["casillas"])) ? count($_REQUEST["casillas"]):0)."</p>";
  if(isset($_REQUEST["casillas"])){
  print "<p>Las casillas marcadas son: ";

  foreach ($_REQUEST["casillas"] as $casilla) {
    print $casilla. " ";
  }
  print "</p>";
  }
  ?>
  </form>
</body>
</html>
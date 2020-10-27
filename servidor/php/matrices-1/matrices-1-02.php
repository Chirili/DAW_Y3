<?php
/**
 * matrices-1-02.php
 *
 * @author Escriba aquí su nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Animales.
    Matrices (1)
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Animales</h1>

  <p>Actualice la página para mostrar un nuevo animal.</p>

<?php

$directorio = scandir("./img/animales");
unset($directorio[0],$directorio[1]);
sort($directorio);
$numero = rand(1,count($directorio)-1);
print "<img src=/img/animales/".$directorio[$numero];
?>

  <footer>
    <p>Andrés Carmona Lozano</p>
  </footer>
</body>
</html>

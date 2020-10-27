<?php
/**
 * matrices-1-03.php
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
    Nombres de animales.
    Matrices (1)
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Nombres de animales</h1>

  <p>Actualice la página para mostrar un nuevo animal.</p>

<?php

$directorio = scandir("./img/animales");
unset($directorio[0],$directorio[1]);
sort($directorio);
$numero = rand(1,count($directorio)-1);
$nombreAnimal = strtoupper(substr($directorio[$numero],0,1)) . substr($directorio[$numero],1,-4);
$nombreAnimal = str_replace("-"," ",$nombreAnimal);
print $prueba;
print "<h1>".$nombreAnimal."</h1>";
print "<img src=/img/animales/".$directorio[$numero];

?>

  <footer>
    <p>Andrés Carmona Lozano</p>
  </footer>
</body>
</html>


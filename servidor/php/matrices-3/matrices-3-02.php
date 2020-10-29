<?php
/**
 * matrices-3-02.php
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
    Cuenta corazones.
    Matrices (3)
    Escriba aquí su nombre
  </title>
  <style>
    .corazonContainer {
      display: flex;
    }
    .corazonContainer p {
      margin: 0;
      font-size: 2.5em;
    }
    .emote{
      margin:0;
      font-size:2.5em;
    }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Cuenta corazones</h1>

  <p>Actualice la página para mostrar un nuevo grupo de corazones.</p>

<?php

$numeroCorazones = rand(7,20);
$corazones = array();
print "<h3>$numeroCorazones corazones</h3>";
print "<div class=\"corazonContainer\">";
for($i=0; $i < $numeroCorazones; $i++){
  $corazon = rand(128147,128152);
  array_push($corazones,$corazon);
  print "<p>&#$corazon</p>";
}
print "</div>";
$corazonesUnicos = array_count_values($corazones);
print "<h3>Conteo</h3>";
foreach($corazonesUnicos as $corazon=>$conteo){
  print "<p class=\"emote\">&#$corazon $conteo</p>";
}
?>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>

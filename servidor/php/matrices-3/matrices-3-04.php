<?php
/**
 * matrices-3-04.php
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
    Ordenar cartas.
    Matrices (3)
    Escriba aquí su nombre
  </title>
  <style>
    .cartaContainer{
      display:flex;
    }
    .cartaContainer p {
      margin: 0 0.2em;
      font-size: 7em;
    }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Ordenar cartas</h1>

  <p>Actualice la página para mostrar una nueva mano.</p>

<?php

$numeroCartas = rand(5,10);
$cartas = array();

print "<h3>Mano de cartas</h3>";
print "<div class=\"cartaContainer\">";
while($numeroCartas){
  $carta = rand(127169,127173);
  array_push($cartas,$carta);
  print "<p>&#$carta</p>";
  $numeroCartas--;
}
print "</div>";

$cartasDOrdenadas = array_unique($cartas);
sort($cartasDOrdenadas);
print "<h3>Cartas distintas obtenidas(Ordenadas)</h3>";
print "<div class=\"cartaContainer\">";
foreach($cartasDOrdenadas as $cartaOrdenada){
  print "<p>&#$cartaOrdenada</p>";
}
print "</div>";


?>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>

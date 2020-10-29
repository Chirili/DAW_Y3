<?php
/**
 * matrices-2-02.php
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
    Elimina valores repetidos.
    Matrices (2)
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .bolaContainer{
      font-size: 3em;
      display: flex;
    }
    .bolaContainer p{
      margin: 0;
    }
  </style>
</head>

<body>
  <h1>Elimina valores repetidos</h1>

  <p>Actualice la página para mostrar un nuevo grupo de valores.</p>

<?php
/*
 Para pinar las bolas escribir &#10110
*/ 
$numeroBolas = rand(5,15);
$bolas = array();
print "<h3>Entre estas ".$numeroBolas." bolas...</h3>";
print "<div class=\"bolaContainer\">";
for($i=0; $i < $numeroBolas; $i++){
  $bola = rand(10102,10111);
  array_push($bolas,$bola);
  print "<p>&#".$bola."</p>";
}
print "</div>";
$bolasUnicas = array_unique($bolas);
print "<h3>... hay ".count($bolasUnicas)." bolas unicas</h3>";
print "<div class=\"bolaContainer\">";
foreach($bolasUnicas as $unica){
  print "<p>&#".$unica."</p>";
}
print "</div>";
?>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>

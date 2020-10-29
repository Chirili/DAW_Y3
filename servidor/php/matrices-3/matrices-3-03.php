<?php
/**
 * matrices-3-03.php
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
    Ordenar dados.
    Matrices (3). Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Ordenar dados</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php

$numeroDados = rand(2,7);
$dados = array();
print "http://localhost:8081/imgs/2.svg";
print "<h3>Tirada de $numeroDados dados</h3>";
for($i = 0; $i < $numeroDados; $i++){
  $dado = rand(1,6);
  array_push($dados,$dado);
  print "<img src=\"http://localhost:8081/imgs/$dado.svg\">";
}
print "<h3>Tirada ordenada</h3>";
sort($dados);
foreach($dados as $dado){
  print "<img src=\"http://localhost:8081/imgs/$dado.svg\">";
}
?>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>

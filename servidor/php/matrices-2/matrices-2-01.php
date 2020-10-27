<?php
/**
 * matrices-2-01.php
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
    Elimina un valor.
    Matrices (2)
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Elimina un valor</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php

$numero;
$cantidadDados = rand(1,10);
$dados = array();
print "Tirada de ".$cantidadDados."dados";
print "<br>";
for($i = 0; $i < $cantidadDados;$i++){
  $numero = rand(1,6);
  array_push($dados,$numero);
  print "<img src=/img/$numero".".svg>";
}
$numero = rand(1,6);
print "<br>";
print "Dado a eliminar";
print "<br>";
print "<img src=/img/$numero".".svg>";
print "<br>";
while(array_search($numero,$dados)){
  $dadoEliminar = array_search($numero,$dados);
  unset($dados[$dadoEliminar]);
}
ksort($dados);
print_r($dados);
for($i = 0; $i <= count($dados); $i++){
  if($dados[$i] != null){
    print "<img src=/img/$dados[$i]".".svg>";
  }
}
?>
  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>

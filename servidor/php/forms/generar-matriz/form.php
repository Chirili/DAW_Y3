<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="" method="post">
      <label for="nminimoValores">Numero minimo de valores: </label>
      <input type="text" name="nminimoValores" />
      <br />
      <label for="nmaximoValores">Numero maximo de valores: </label>
      <input type="text" name="nmaximoValores" />
      <br />
      <label for="valoresMinimo">Numero maximo: </label>
      <input type="text" name="valoresMinimo" />
      <br />
      <label for="valoresMaximo">Numero minimo: </label>
      <input type="text" name="valoresMaximo" />
      <br />
      <button type="submit">Enviar</button>
    </form>
  </body>
</html>


<?php
$datos = $_REQUEST;

$valoresMaximo = $_REQUEST['valoresMaximo'];

$valoresMinimo = $_REQUEST["valoresMinimo"];
$matrizSize = rand($_REQUEST["nminimoValores"],$_REQUEST["nmaximoValores"]);
$matriz = array();
for($i = 0; $i < $matrizSize; $i++){
    $value = rand($valoresMinimo,$valoresMaximo);
    array_push($matriz,$value);
}
var_dump($matriz);
?>
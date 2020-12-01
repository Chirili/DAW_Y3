<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Cuenta cartas
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Cuenta cartas</h1>

<?php
  if(($_REQUEST["num_cartas"] > 4 && $_REQUEST["num_cartas"] < 21) && !empty($_REQUEST["paridad"]) && !empty($_REQUEST["palo"])){
    $num_cartas = $_REQUEST["num_cartas"];
    $paridad = $_REQUEST["paridad"];
    $palo = $_REQUEST["palo"];
    $unicode = ["picas"=>127137,"corazones"=>127153,"diamantes"=>127169,"treboles"=>127185];
    $cartas = array();
    print "<h3>$num_cartas cartas del palo $palo</h3>";
    print"<p>";
    for($i =0; $i < $num_cartas; $i++){
      $numeroAleatorio = rand(1,9);

      array_push($cartas,($unicode[$palo]+$numeroAleatorio));
      print "&#" . ($unicode[$palo]+$numeroAleatorio);
    }
     print "</p>";
    if($paridad == "par"){
      print "entra";
      $cartasPares = array();
      for($i = 0; $i < count($cartas); $i++){
        if($cartas[$i]%2 == 0){
          array_push($cartasPares,$cartas[$i]);

        }
      }
      print_r("<h3>Hay " .(count($cartasPares)) . " cartas pares</h3>");
      foreach ($cartasPares as $carta) {
            print "&#$carta";
      }
      $cartasDiferentes = array_unique($cartasPares);
      print "<h3>Hay ".(count($cartasDiferentes))." cartas $paridad distintas del palo $palo</h3>";
      foreach ($cartasDiferentes as $cartaDiferente) {
        print "&#$cartaDiferente";
      }
    }else{
      $cartasImpares = array();
      for($i = 0; $i < count($cartas); $i++){
        if($cartas[$i]%2 != 0){
          array_push($cartasImpares,$cartas[$i]);

        }
      }
      print_r("<h3>Hay " .(count($cartasImpares)) . " cartas impares</h3>");
      foreach ($cartasImpares as $carta) {
            print "&#$carta";
      }
      $cartasDiferentes = array_unique($cartasImpares);
      print "<h3>Hay ".(count($cartasDiferentes))." cartas $paridad distintas del palo $palo</h3>";
      foreach ($cartasDiferentes as $cartaDiferente) {
        print "&#$cartaDiferente";
      }
    }

  }else{
    if(intval($_REQUEST["num_cartas"]) < 5 || intval($_REQUEST["num_cartas"]) > 20){
      print "<p>No ha escrito el numero de cartas correcto, debe estar entre 5 y 20</p>";
    }
    if(!isset($_REQUEST["paridad"])){
      print "<p>No ha seleccionado la paridad</p>";
    }
    if($_REQUEST["palo"] == -1){
     print"<p>No ha seleccionado el palo</p>"; 
    }
  }
?>

</body>
</html>
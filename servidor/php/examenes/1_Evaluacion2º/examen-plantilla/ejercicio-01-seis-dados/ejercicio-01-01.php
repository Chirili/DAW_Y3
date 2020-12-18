<?php
  require_once("./funciones.php");
  session_name("jugadas");
  session_start();
if(!isset($_SESSION["pj1"])){
    $_SESSION["pj1"] = 0;
  }
if(!isset($_SESSION["pj2"])){
    $_SESSION["pj2"] = 0;
}

  $tiradaPJ1 = tirada();
  $tiradaPJ2 = tirada();
  if(isset($_SESSION["juegos"])){
    $_SESSION["juegos"]+= 1;
  }else{
    $_SESSION["juegos"] = 1;
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Seis dados
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Seis dados</h1>
    <h3>Dados del Jugador 1</h3>
    <?php
      foreach($tiradaPJ1 as $tirada){
       print "<img src=img/$tirada.svg>"; 
      }
    ?>
    <h3>Dados del Jugador 2</h3>
    <?php
      foreach($tiradaPJ2 as $tirada){
       print "<img src=img/$tirada.svg>"; 
      }
    ?>
    <?php
    sort($tiradaPJ1);
    sort($tiradaPJ2);
    unset($tiradaPJ1[0],$tiradaPJ1[5]);
    unset($tiradaPJ2[0],$tiradaPJ2[5]);
    $puntosPJ1 = array_sum($tiradaPJ1);
    $puntosPJ2 = array_sum($tiradaPJ2);
    print "<h3>Puntuaciones:</h3>";
    print "<p>Puntuacion del jugador 1 tras quitar el dado con puntuación mas baja y más alta: $puntosPJ1</p>";
    print "<p>Puntuacion del jugador 2 tras quitar el dado con puntuación mas baja y más alta: $puntosPJ2</p>";
    if($puntosPJ1 > $puntosPJ2){
        $_SESSION["pj1"] += 1;
    }else{
        $_SESSION["pj2"] += 1;
    }
    print "<h3>Resumen: </h3>";
    print "<p>Numero de veces que han jugado: $_SESSION[juegos]</p>";
    print "<p>Numero de veces que ha ganado el jugador 1: $_SESSION[pj1]</p>";
    print "<p>Numero de veces que ha ganado el jugador 2: $_SESSION[pj2]</p>";
    ?>
</body>
</html>
<?php
  session_start();
  if(empty($_SESSION["puntuacionMasAlta"]) ){
    $_SESSION["puntuacionMasAlta"] = 0;
  }
  if(empty($_SESSION["dadosDiferentes"])){
    $_SESSION["dadosDiferentes"] = 0;
  }
  if(!empty($_SESSION["tirada"])){
    $tirada = $_SESSION["tirada"];
  }else{
  $tirada = array();
  }


?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Récord de dados
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Récord de dados</h1>

<form action="" method="post">

  <?php
    if(!empty($tirada) && count(array_unique($tirada)) == count($tirada)){
      $_SESSION["dadosDiferentes"] += 1;
    }
    if($_SESSION["puntuacionMasAlta"] < array_sum($tirada)){
      $_SESSION["puntuacionMasAlta"] = array_sum($tirada);
    }
    $tirada = [];
    if(isset($_REQUEST["tirada"])){
      for($i = 0;$i < 5;$i++){
        $numAleatorio = rand(1,6);
        array_push($tirada,$numAleatorio);
      }
      $_SESSION["tirada"] = $tirada;
    }
      if(empty($tirada)){
        print"
          <img src=img/1.svg alt= srcset=>
          <img src=img/1.svg alt= srcset=>
          <img src=img/1.svg alt= srcset=>
          <img src=img/1.svg alt= srcset=>
          <img src=img/1.svg alt= srcset=>";
      }else{
        print "
          <img src=img/$tirada[0].svg alt= srcset=>
          <img src=img/$tirada[1].svg alt= srcset=>
          <img src=img/$tirada[2].svg alt= srcset=>
          <img src=img/$tirada[3].svg alt= srcset=>
          <img src=img/$tirada[4].svg alt= srcset=>
        ";
      }
      
      if(isset($_REQUEST["reset"])){
        $_SESSION["dadosDiferentes"] = 0;
        $_SESSION["puntuacionMasAlta"] = 0;
      }
  ?>
   <!--  ESCRIBA AQUI EL CÓDIGO HTML Y/O PHP NECESARIO -->
  <p>Numero de veces que han salido los dados diferentes: <?=$_SESSION["dadosDiferentes"]?></p>
  <p>Puntuación mas alta: <?=(empty($_SESSION["puntuacionMasAlta"]))? 5:$_SESSION["puntuacionMasAlta"]?></p>
  <button type="submit" name="tirada">Sacar nuevos dados</button> <button type="submit" name="reset">Volver a empezar</button>
</form>
</body>
</html>
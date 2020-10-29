<?php
/**
 * matrices-3-01.php
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
    Busca emoticono.
    Matrices (3)
    Escriba aquí su nombre
  </title>
  <style>
    .container {
      display:flex;
    }
    .container p {
      margin: 0;
      font-size: 2.5em;
    }
    .emote {
      margin: 0;
      font-size: 2.5em;
    }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Busca emoticono</h1>

  <p>Actualice la página para mostrar un nuevo grupo de emoticonos.</p>

<?php
  $numeroEmotes = rand(10,20);
  $emotes = array();
  print "<h3>$numeroEmotes emoticonos...</h3>";
  print "<div class=\"container\">";
  for($i = 0; $i < $numeroEmotes; $i++){
    $emote = rand(128512,128580);
    array_push($emotes,$emote);
    print "<p>&#$emote;</p>";
  }
  print "</div>";
  $buscarEmote = rand(128512,128580);
  print "<p>El emoticono <span class=\"emote\">&#$buscarEmote</span>". ((array_search($buscarEmote,$emotes)) ? "esta entre ellos </p>":"no esta entre ellos</p>");
?>
 
  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>

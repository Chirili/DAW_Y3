<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
    ?>
    <h1>Encuesta(Resultado)</h1>
    <p>Se han contestado <?=count($_REQUEST)?> pregunta(s) de un total de <?=$_SESSION["num_preguntas"]?></p>
    <?php
    foreach($_SESSION["preguntas"] as $numPregunta => $pregunta){
        if(array_key_exists($numPregunta[-1],$_REQUEST)){
            print "<p>A la pregunta <strong>" .$pregunta."</strong> se ha contestado ".$_REQUEST[$numPregunta[-1]];
        }
    }
    ?>
</body>
</html>
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
    print_r($_REQUEST);
    print_r($_SESSION);
        for($i=0; $i < count($_REQUEST); $i++){
            print "A la pregunta" .($i+1)."se ha respondido";
        }
    ?>
</body>
</html>
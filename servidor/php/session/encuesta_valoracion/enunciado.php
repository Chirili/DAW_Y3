<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Encuesta</h1>
    <p>Escribe el enunciado de cada una de las preguntas</p>
    <form action="valoracion.php" method="POST">
        <?php
        session_start();
        $_SESSION["num_respuestas"] = $_REQUEST["num_respuestas"];
        
            for($i=0;$i < $_REQUEST["num_preguntas"];$i++){
                print "Pregunta ".($i+1).": <input type=text name=pregunta_$i><br>";
            }
        ?>
        <button type="submit">Generar</button>
    </form>
</body>
</html>

<?php

?>
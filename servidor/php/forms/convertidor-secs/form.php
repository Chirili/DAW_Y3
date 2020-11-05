<?php
$datos = $_REQUEST;
$desaparece = ($_REQUEST["segundos"] == "")?"block":"none";
if(ctype_digit($datos["segundos"]) && $datos["segundos"] >= 0){
    echo "<p>Cantidad de minutos y segundos de los segundos introducidos: ".(($datos["segundos"]/60)%10)." minutos ".($datos["segundos"]%60)." segundos</p>";
}else{
    echo "<p`>ERROR: Introduce numeros</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="form.php" style="display: <?=$desaparece?>" method="post">
        <label for="segundos">Escriba los segundos: </label>
        <input type="text" name="segundos">
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

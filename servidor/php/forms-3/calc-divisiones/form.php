<?php
$dividendo = floatval($_REQUEST["dividendo"]);
$divisor = floatval($_REQUEST["divisor"]);
$datos = false;
if(($dividendo != 0 || $divisor != 0) && ($dividendo >= 0 && $dividendo < 10000 ) && ($divisor > 0 && $divisor < 10000)){
    print "El valor del dividendo es $dividendo y del divisor es $divisor <br>";
    echo "El resultado de la division es: ";
    echo  ($dividendo%$divisor == 0) ? "exacta <br>" : "no es exacta <br>";
    print "El resto de la division es: " . $dividendo % $divisor . "<br>";
    print "El cociente de la division es: " . $dividendo / $divisor . "<br>";
    $datos = true;
}else{
    print "Error: numeros introducidos incorrectos";
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
    <?php
    if($datos){
    }else{
    ?>
    <form action="" method="post">
            <label for="dividendo">Introduce el valor del dividendo</label>
            <input type="text" step="any" name="dividendo">
            <br>
            <label for="divisor">Introduce el valor del divisor</label>
            <input type="text" name="divisor" step="any">
            <br>
            <button type="submit">Enviar</button>
    </form>
    <?php
        }
    ?>
</body>
</html>

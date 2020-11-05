<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="year">Introduce el año: </label>
        <input type="text" name="year">
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

<?php 
$datos = $_REQUEST;

if(ctype_digit($datos["year"]) && ($datos["year"] >= 0  && $datos["year"] < 10000)){
    print "El año $datos[year] ";
    if($datos["year"] >= 100){
        print ((($datos["year"]/4)%2) == 0) ? "es bisiesto" : "no es bisiesto";
    }else{
        print (($datos["year"]%4) == 0) ? "es bisiesto" : "no es bisiesto";
    }
}
?>
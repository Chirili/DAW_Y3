<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="numero1">Introduce el valor del numero 1: </label>
        <input type="text" name="numero1">
        <br>
        <br>
        <label for="numero2">Introduce el valor del numero 2: </label>
        <input type="text" name="numero2">
        <br>
        <br>
        <input type="radio" name="operacion" checked="true" value="suma">Suma
        <input type="radio" name="operacion" value="resta">Resta
        <input type="radio" name="operacion" value="multiplicacion">Multiplicacion
        <input type="radio" name="operacion" value="division">Division
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
<?php
require_once "operaciones.php";
$num1 = $_REQUEST["numero1"];
$num2 = $_REQUEST["numero2"];
print "Resultado de la operacion: " . operaciones($num1,$num2,!isset($_REQUEST["operaciones"])  ? "suma":$_REQUEST["operaciones"]);
?>
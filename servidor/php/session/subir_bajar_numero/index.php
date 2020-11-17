<?php
$contador;
session_start();
if(isset($_SESSION["contador"])){
    $contador = $_SESSION["contador"];
}else{
    $contador = 0;
}
if(isset($_REQUEST["bajar"])){
    $_SESSION["contador"] = &$contador;
    header("Location:bajar.php");
}
if(isset($_REQUEST["subir"])){
    $_SESSION["contador"] = &$contador;
    header("Location:subir.php");
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
    <h1>Subir y bajar número</h1>
    <p>Haga clic en los botones para modificar el valor: </p>
    <form action="">
        <button name="bajar">BAJAR</button><?=$contador?><button name="subir">SUBIR</button>
        <button name="poner_cero">Poner a cero</button>
    </form>
</body>
</html>
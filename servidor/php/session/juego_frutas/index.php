<?php
session_start();
$monedas = $_SESSION["monedas"] ;
$premio = 0;
$frutas = [127820,127825,127830];
if(isset($_REQUEST["meter_moneda"])){
    $monedas ++;
}
if(isset($_REQUEST["jugar"])){
    if($monedas > 0){
        $monedas --;
    }
}
if($monedas > 0 && isset($_REQUEST["jugar"])){
    for($i=0;$i <= 2; $i++){
        $frutas[$i] = rand(127817,127827);
    }
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
    <h1>Juego de frutas</h1>
    <table>
        <tbody>
            <tr>
                <td>&#<?=$frutas[0]?></td>
                <td>&#<?=$frutas[2]?></td>
                <td>&#<?=$frutas[1]?></td>
                <td>
                    <form action="" method="POST">
                        <button type="submit" name="meter_moneda">Meter Moneda</button>
                        <h1><?php
                        $_SESSION["frutas"] = $frutas;
                        print $monedas;
                        if(in_array(127827,$frutas)){
                            switch(array_count_values($frutas)[127827]){
                                case 1:
                                    $monedas += (in_array(2,array_count_values($frutas)))?3:1;
                                    $premio += (in_array(2,array_count_values($frutas)))?3:1;
                                break;
                                case 2:
                                    $monedas += 4;
                                    $premio = 4;
                                break;
                                case 3:
                                    $monedas += 10;
                                    $premio = 10;
                                break;
                            }
                        }
                        if(!in_array(127827,array_count_values($frutas))){
                            if(count(array_count_values($frutas))< 3){
                                $monedas += (in_array(2,array_count_values($frutas)))?2:5;
                                $premio += (in_array(2,array_count_values($frutas)))?2:5;
                            }
                        }
                        $_SESSION["monedas"] = $monedas;
                        ?></h1>
                        <button type="submit" name="jugar">Jugar</button>
                    </form>
                    <p>Premio: <?=$premio?></p>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
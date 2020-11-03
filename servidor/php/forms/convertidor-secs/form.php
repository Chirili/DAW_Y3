<?php

$datos = $_REQUEST;

if(ctype_digit($datos["segundos"]) && $datos["segundos"] >= 0){
    echo "<p>Cantidad de minutos y segundos de los segundos introducidos: ".(($datos["segundos"]/60)%10)." minutos ".($datos["segundos"]%60)." segundos</p>";
}else{
    echo "<p`>ERROR: Introduce numeros</p>";
}
?>
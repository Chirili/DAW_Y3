<?php
$numero1 = $_REQUEST["numero1"];
$numero2 = $_REQUEST["numero2"];
$operacion = $_REQUEST["operacion"];
$resultados = ["suma"=> ($numero1+$numero2),"resta" => ($numero1-$numero2),"multiplicacion" => ($numero1*$numero2)];
print "La ". $operacion ." del primer numero ".$numero1." y del segundo numero ".$numero2." es igual a: ".$resultados[$operacion];
?>
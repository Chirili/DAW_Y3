<?php
$numero1 = $_REQUEST["numero1"];
$numero2 = $_REQUEST["numero2"];
$operacion = $_REQUEST["operacion"];
$resultado;
switch($operacion){
    case "suma":
        $resultado = $numero1 + $numero2;
    break;
    case "resta":
        $resultado = $numero1 - $numero2;
    break;
    case "multiplicacion":
        $resultado = $numero1 * $numero2;
    break;
}
$array = ["resta" => "-"];
print 2 - intval($array["resta"]);
print_r($datos);
print "La ". $operacion ." del primer numero ".$numero1." y del segundo numero ".$numero2." es igual a: ".$resultado;
?>
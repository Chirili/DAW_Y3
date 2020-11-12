<?php
function operaciones($num1,$num2,$operacion="suma"){
    print $operacion;
    $prueba = [
        "suma","" => ($num1+$num2),
        "resta" => ($num1-$num2),
        "multiplicacion" => ($num1*$num2),
        "division" => ($num2 == 0) ? "ERROR: no se puede dividir entre 0": $num1/$num2
    ];
    return $prueba[$operacion];
}

?>
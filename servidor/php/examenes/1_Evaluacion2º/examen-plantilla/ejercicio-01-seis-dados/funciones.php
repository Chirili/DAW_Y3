<?php
function tirada(){
    $tirada = array();
    for($i = 0; $i < 6; $i++){
        $numero = rand(1,6);
        array_push($tirada,$numero);
    }
    return $tirada;
}
?>
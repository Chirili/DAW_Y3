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
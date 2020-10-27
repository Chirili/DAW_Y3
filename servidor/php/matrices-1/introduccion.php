<?php
//echo permite imprimir varios mensajes separados por comas
//echo "mensaje","otro mensaje";
// Esto da error: print "hola","adios";
//print "hola";
$x = PHP_INT_MAX;
$y = PHP_INT_MIN;
$fecha = date("d");
if($fecha < 15){
    echo "Primera quincena del mes";
}else{
    echo "Segunda quincena del mes";
}
$numeroAleatorio = rand(0,999);
print $numeroAleatorio;
$aa = "aaa";
switch(strlen($numeroAleatorio)) {
    case 1:
        print "un digito";
    break;
    case 2:
        print "dos digitos";
    break;
    case 3:
        print "tres digitos";
    break;
}
print "<br><br><br><br>";
$prueba = [
    ["nombre" => "Juan","edad" => 20,"peso" => 150]
];
$multi = [
    "Juan" => [10,75]
];
$edades = $prueba[0]["peso"];
$edades2 = $multi["Juan"][1];
print_r($edades);
print "<br>";
print_r($edades2);
print "<br>";
$numeros1 = ['1'=> 39,30 => 30,10=>10];
$numeros2 = [1,50,2,3,5,6,7];
print_r($numeros1);
rsort($numeros2);
ksort($numeros2);
print_r($numeros2);

//print $numeroAleatorio;
?>
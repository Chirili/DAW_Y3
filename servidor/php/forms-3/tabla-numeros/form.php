
<?php
$num_cols = $_REQUEST["num_cols"]; 
$num_cld = $_REQUEST["num_cld"]; 
$validacion = ["size"=>(($num_cols > 0 && $num_cols <= 100) && ($num_cld > 0 && $num_cld <= 10000)),"type"=>(ctype_digit($num_cols) && ctype_digit($num_cld))];
print "<br>";
if(array_sum($validacion) == 2){
    print "<table>";
    $celda = 1;
    for($i = 0; $i < ceil($num_cld/$num_cols);$i ++){
        print "<tr>";
        for($j = 0; $j < $num_cols; $j++){
            print "<td>";
            if($celda <= $num_cld){print $celda;}             
            print "</td>";
            $celda++;
        }
        print "</tr>";
    }
    print "</table>";
}else{
    if((array_sum($validacion)) == 0){
      print "Muchos errores encontrados, comprueba los datos introducidos...";
    }else{
      print (array_search(false,$validacion) == "size") ? "Comprueba el tamaño de los numeros introducidos" : "Comprueba el tipo de datos introducidos";
    }
}
?>
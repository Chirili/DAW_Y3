<?php 
$datos = $_REQUEST;
if(ctype_digit($datos["tabla"]) && ($datos["tabla"] <= 100 && $datos > 0)){
    print "<table>";
    print "<tbody>";
    for($i =1; $i <= $datos["tabla"]; $i++){
        print "<tr>";
        for($j = 1; $j <= $datos["tabla"];$j++){
            print "<th>";
            print "<p>".$i*$j."</p>";
            print "</th>";
        }
        print "</tr>";
    }
    print "</tbody>";
    print "</table>";
}
?>
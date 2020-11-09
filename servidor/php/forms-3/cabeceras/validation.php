<?php
if(empty($_REQUEST["nombre"]) || empty($_REQUEST["estatura"]) || $_REQUEST["estatura"] < 70 || $_REQUEST["estatura"] > 250){
    $_SESSION["form_data"] = $_REQUEST;
    header("Location:".$_SERVER["HTTP_REFERER"],true,307);
}else{
    print "$_REQUEST[nombre] mide: ";
    echo (strlen($_REQUEST["estatura"]) == 3) ? (($_REQUEST["estatura"]/100)%100) . " metros y ". ($_REQUEST["estatura"]%100) . " centimetros":$_REQUEST["estatura"] . " centimetros";
}
?>
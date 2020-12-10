<?php
include_once("../bd_data.php");
session_name("users");
session_start();
if(empty($_REQUEST["username"]) && empty($_REQUEST["password"])){
    header("Location:user_form.php");
}else{
    $err;
    if(strlen($_REQUEST["username"])< 5 ||strlen($_REQUEST["username"]) > 30){
        $err["username"]=true;
        $_SESSION["username"] = $_REQUEST["username"];
    }
    if(strlen($_REQUEST["password"]) < 5){
        $err["password"]=true;
        $_SESSION["password"]=$_REQUEST["password"];
    }
    if(isset($err)){
        $_SESSION["errors"] = $err;
        header("Location:user_form.php");
    }else{
        try{
            insertUser($conexion,["username"=>$_REQUEST["username"],"password"=>$_REQUEST["password"],"rol"=>$_REQUEST["rolSelected"]]);
        }catch(Exception $e){
            print("Ya existe ese nombre de usuario");
            print "<a href=user_form.php>Volver al formulario</a>";
        }
    }
}
?>
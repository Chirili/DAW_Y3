<?php
include_once('../bd_data.php');
$validations = [
    (strlen($_REQUEST["studentName"]) < 5 || strlen($_REQUEST["studentName"]) > 50),
    (strlen($_REQUEST["studentSurname"]) < 5 || strlen($_REQUEST["studentSurname"]) > 55),
    (strlen($_REQUEST["studentEmail"]) < 5 || strlen($_REQUEST["studentEmail"]) > 100)
];
if(empty($_REQUEST["studentName"]) || empty($_REQUEST["studentSurname"]) || empty($_REQUEST["studentEmail"]) || array_sum($validations) > 0){
    header('Location:student_form.php?validation='.($validations),true,307);
}else{
    insertStudent($conexion,["nombre"=>$_REQUEST["studentName"],"apellidos"=>$_REQUEST["studentSurname"],"email"=>$_REQUEST["studentEmail"],"curso"=>$_REQUEST["course"]]);
    header('Location:index.php');
}
?>
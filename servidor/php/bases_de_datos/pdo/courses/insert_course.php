<?php
include_once('../bd_data.php');
if(empty($_REQUEST["courseName"])){
    header('Location:course_form.php');
}else{
    insertCourse($conexion,$_REQUEST["courseName"]);
    header('Location:index.php');
}
?>
<?php
session_start();
$_SESSION["contador"]++;
header("Location:index.php",true,307);

?>
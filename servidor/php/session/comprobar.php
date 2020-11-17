<?php
session_start();
if(!empty($_SESSION)){
    print "<h3>La variable SESSION está asignada</h3>";
}else{
    print "<h3>La variable SESSION no está asignada</h3>";
}
?>

<a href="index.php">Index</a>
<a href="conectar.php">Conectar</a>
<a href="desconectar.php">Desconectar</a>
<a href="comprobar.php">Comprobar</a>
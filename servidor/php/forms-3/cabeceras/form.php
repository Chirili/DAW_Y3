<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validation.php" method="post">
    <label for="nombre">Introduce tu nombre: </label>
    <?php
        if(!empty($_REQUEST["nombre"])){
            print "<input type=\"text\" name=\"nombre\" value=\"$_REQUEST[nombre]\"";
            
        }else{
        
    ?>
    <input type="text" name="nombre">
    <?php
    print "<p>Error introduce un nombre</p>";
        }
    ?>
    <br>
    <label for="estatura">Introduce tu estatura: </label>
    <?php 
    if(!empty($_REQUEST["estatura"])){
        print "<input type=\"text\" name=\"estatura\" value=\"$_REQUEST[estatura]\"";
        
    }else{
       
    ?>
    <input type="text" name="estatura">
    <?php
     print "<p>Error introduce un numero entre 70 y 250</p>";
    }
    ?>
    <br>
    <br>
    <button type="submit">Enviar</button>
    </form>
</body>
</html>
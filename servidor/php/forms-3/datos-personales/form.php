<?php
$validacion = [
    !empty($_REQUEST["nombre"]),
    !empty($_REQUEST["apellidos"]),
    !empty($_REQUEST["edad"]) && ctype_digit($_REQUEST["edad"]),
    isset($_REQUEST["sexo"]),
    isset($_REQUEST["aficiones"])
];
$datos = false;
if(array_sum($validacion) == 5){
    $datos = true;
    print "Nombre de la persona: $_REQUEST[nombre] <br>";
    print "Apellidos de la persona: $_REQUEST[apellidos] <br>";
    print "Edad de la persona: $_REQUEST[edad] <br>";
    print "Genero de la persona: $_REQUEST[sexo]<br>";
    print "Cantidad de aficiones que practica: ".count($_REQUEST["aficiones"])."<br>";
}else{
    print (array_sum($validacion) == 4) ? "Hay 1 error en los datos." : "Hay" .(5-array_sum($validacion))." errores.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if($datos){
}else{
?>
    <form action="" method="post">
       <label for="nombre">Introduce tu nombre: </label> 
       <input type="text" name="nombre">
       <br>
       <label for="apellidos">Introduce tu apellidos: </label> 
       <input type="text" name="apellidos">
       <br>
       <label for="edad">Introduce tu edad: </label> 
       <input type="text" name="edad">
       <br>
       <p>Selecciona tu genero: </p>
       <input type="radio" name="sexo" value="hombre" id=""> Hombre
       <input type="radio" name="sexo" value="mujer" id="">Mujer
       <p>Selecciona tus aficiones</p>
       <input type="checkbox" name="aficiones[]" value="musica" id=""> Musica
       <input type="checkbox" name="aficiones[]" value="deporte" id=""> Deporte
       <input type="checkbox" name="aficiones[]" value="cine" id=""> Cine
       <input type="checkbox" name="aficiones[]" value="lectura" id=""> Lectura
       <input type="checkbox" name="aficiones[]" value="videojuegos" id=""> Videojuegos
       <input type="checkbox" name="aficiones[]" value="viajes" id=""> Viajes
       <button type="submit">Enviar</button>
    </form>
<?php
}
?>
</body>
</html>

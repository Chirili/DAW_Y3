<?php
include("funciones.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Obtener productos
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Obtener productos</h1>
  <form action="" method="POST">
    <?php
    if(!empty($_REQUEST["productos"])){
      print "<h3>Listado de productos</h3>";
      if(isset($_REQUEST["info"])){
        foreach(obtenerDatos($datos,$_REQUEST["productos"],$_REQUEST["info"]) as $valor){
          print "<p>código: $valor[0] nombre: $valor[1] $_REQUEST[info]: $valor[2]</p>";
        }

      }else{
        foreach(obtenerDatos($datos,$_REQUEST["productos"]) as $valor){
          print "<p>código: $valor[0] nombre: $valor[1]</p>";
        }
      }
    }
      
    else{
    ?>
    <p>Seleccione productos</p>
    <select name="productos[]" id="" multiple>
      <?php
        foreach (obtenerDatos($datos) as $valor) {
          print "<option value=$valor[0]>$valor[1]</option>";
        }
      ?>
    </select>
    <p>Selecciona una informacion adicional: </p>
    <input type="radio" name="info" value="precio"> Precio <br>
    <input type="radio" name="info" value="stock"> Stock <br>
    <input type="radio" name="info" value="marca"> Marca <br>
    <input type="radio" name="info" value="fecha"> Fecha ultima actualizacion <br>
  <!--  ESCRIBA AQUI EL CÓDIGO HTML Y/O PHP NECESARIO -->
  <button type="submit" name="eviado">Enviar</button>
  <?php
    }
    if(!isset($_REQUEST["productos"]) && isset($_REQUEST["eviado"])){
      print "<p>No hay ningun producto seleccionado</p>";
    }
  ?>
  </form>

</body>
</html>
<?php
  require_once("funciones.php");

  getCentros($conexion,function($data){
    print_r($data);
  });

  print "<p>Ejercicio incompleto</p>";


?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Empresa - Centros - Departamentos - Empleados
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Centros</h1>

  <div>
    <form action="ejercicio-02-02.php" method="post">
    Centro: <select name="centro" id="">
    <option value="-1">Selecciona un centro</option>
    <?php
    getCentros($conexion,function($data){
      print "<option value=$data[0]>$data[1]</option>";
    });
    ?> 
    </select>
    <br><br>
    <?php
      if(isset($_REQUEST["centro"])){
        print "<p>No se ha seleccionado ningun centro</p>";
      }
      $conexion->close();
    ?>
    <button type="submit">Consultar</button>

      <!--  ESCRIBA AQUI EL CÓDIGO HTML Y/O PHP NECESARIO -->


    </form>
  </div>
</body>
</html>

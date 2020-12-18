<?php
  require_once("funciones.php");

  print "<p>Ejercicio incompleto</p>";

  print_r($_REQUEST);
  $departamento = getDepartamento($conexion,$_REQUEST["idCentro"]);
  print_r($departamento);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Empresa - Departamentos
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Editar Departamento</h1>

  <div>
    <form action="ejercicio-03-03.php" method="post">

    Nombre: 
    <?php
      print "<input type=text name=nombre value=$departamento[nombre] readonly>"
    ?>
    <br>
    Presupuesto <input type="text" name="presupuesto" value=<?=$departamento["presupuesto"]?>><br>
      <!--  ESCRIBA AQUI EL CÓDIGO HTML Y/O PHP NECESARIO -->
    Centro: 
    <select name="centro" id="">
        <?php
        getCentros($conexion,function($data){
          print "<option value=$data[id]>$data[nombre]</option>";
        });
      ?>
    </select>
        <button type="submit">Guardar</button>
    </form>
    <p>
      <a href="ejercicio-03-01.php">Volver</a>
    </p>
  </div>
</body>
</html>

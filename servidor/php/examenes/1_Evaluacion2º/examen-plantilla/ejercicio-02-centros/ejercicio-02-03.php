<?php
  require_once("funciones.php");

  print "<p>Ejercicio incompleto</p>";
  print_r($_REQUEST);

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
  <h1>Listado de Empleados del Departamento</h1>

  <div>
  <table>
  <thead>
  <tr>
  <th>Nombre</th>
  <th>Apellidos</th>
  <th>Salario</th>
  <th>Hijos</th>
  <th>Nacionalidad</th>
  </tr>
  </thead>
  <tbody>
    <?php
    getEmpleados($conexion,$_REQUEST["idDep"],function($data,$conexion){
      $conexion2 = new mysqli('localhost','root','','dwes_dic2020');
      print "<tr>";
      print "<td>$data[0]";
      print "</td>";
      print "<td>$data[1]";
      print "</td>";
      print "<td>$data[2]";
      print "</td>";
      print "<td>$data[4]";
      print "</td>";
      print "<td>";
      print getNacionalidad($conexion2,$data["5"]);
      print "</tr>";
    })
    ?>
  </tbody>
  </table>
    <!--  ESCRIBA AQUI EL CÓDIGO HTML Y/O PHP NECESARIO -->
    
    <p>
      <a href="ejercicio-02-01.php">Volver</a>
    </p>
  </div>
</body>
</html>

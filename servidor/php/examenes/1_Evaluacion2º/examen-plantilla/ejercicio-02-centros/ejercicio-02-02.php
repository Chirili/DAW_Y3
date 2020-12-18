<?php
require_once("funciones.php");
if($_REQUEST["centro"] == -1){  
    header('Location:ejercicio-02-01.php',true,307);
}
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
  <h1>Listado de Departamentos</h1>

  <div>
    <table>
      <thead>
        <tr>
        <th>Nombre</th>
        <th>Presupuesto</th>
        <th>Número de empleados</th>
        </tr>
      </thead>
      <tbody>
        <?php
          getDepartamentos($conexion,$_REQUEST["centro"],function($data){
            $conexion2 = new mysqli('localhost','root','','dwes_dic2020');
            print "<tr>";
            print "<td>$data[0]";
            print "</td>";
            print "<td>$data[2]";
            print "</td>";
            print "<td>";
            print "<a href=ejercicio-02-03.php?idDep=$data[0]>".contarEmpleados($conexion2,$data[0])."</a>";
            print "</td>";
            print "</tr>";
            $conexion2->close();
          });
          $conexion->close();
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

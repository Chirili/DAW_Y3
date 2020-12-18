<?php
  require_once('./funciones.php');

  print "<p>Ejercicio incompleto</p>";


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
  <h1>Listado de Departamentos</h1>

  <div>
    
  <table>
    <thead>
      <tr>
        <th><a href="?order=nombre">Departamento</a></th>
        <th><a href="?order=presupuesto">Presupuesto</a></th>
        <th><a href="?order=centro">Centro</a></th>
      </tr>
    </thead>
    <tbody>
      <?php
        if(isset($_REQUEST["order"])){
          getDepartamentosOrderBy($conexion,function($data,$conexion){
            print "<tr>";
            print "<td>";
            print "<a href=ejercicio-03-02.php?idCentro=$data[id]>$data[nombre]</a>";
            print "</td>";
            print "<td>$data[presupuesto]";
            print "</td>";
            print "<td>";
            print getNombreCentro($conexion,$data["centro"])["nombre"];
            print "</td>";
            print "</tr>";
          },$_REQUEST["order"]);
        }else{
          getDepartamentosOrderBy($conexion,function($data,$conexion){
            print "<tr>";
            print "<td>";
            print "<a href=ejercicio-03-02.php?idCentro=$data[id]>$data[nombre]</a>";
            print "</td>";
            print "<td>$data[presupuesto]";
            print "</td>";
            print "<td>";
            print getNombreCentro($conexion,$data["centro"])["nombre"];
            print "</td>";
            print "</tr>";
          },"");
        }
      ?>
    </tbody>
  </table>
    
  </div>
</body>
</html>

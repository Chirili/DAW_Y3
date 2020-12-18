
<?php
if(!$conexion = new PDO('mysql:host=localhost;dbname=dwes_dic2020',"root","")){
    print "Error al conectarse a la base de datos";
}
function getEmpleados($conexion){
    $consulta = $conexion -> query("SELECT e.id,e.nombre,e.apellidos,e.salario,e.hijos,p.nacionalidad FROM empleados e INNER JOIN paises p ON e.nacionalidad = p.id");
    while($data = $consulta->fetch(PDO::FETCH_ASSOC)){
        pintarDatos($data);
    }
}
function getEmpleadosFiltroHijos($conexion,$numHijos){
    $consulta = $conexion -> prepare("SELECT e.id,e.nombre,e.apellidos,e.salario,e.hijos,p.nacionalidad FROM empleados e INNER JOIN paises p ON e.nacionalidad = p.id WHERE e.hijos = ?");
    $consulta -> execute(array($numHijos));
    while($data = $consulta -> fetch(PDO::FETCH_ASSOC)){
        pintarDatos($data);
    }
}
function getEmpleadosFiltroSalMin($conexion,$salarioMinimo){
    $consulta = $conexion -> prepare("SELECT e.id,e.nombre,e.apellidos,e.salario,e.hijos,p.nacionalidad FROM empleados e INNER JOIN paises p ON e.nacionalidad = p.id WHERE e.salario > ?");
    $consulta -> execute(array($salarioMinimo));
    while($data = $consulta -> fetch(PDO::FETCH_ASSOC)){
        pintarDatos($data);
    }
}
function getEmpleadosFiltroSalMax($conexion,$salarioMinimo){
    $consulta = $conexion -> prepare("SELECT e.id,e.nombre,e.apellidos,e.salario,e.hijos,p.nacionalidad FROM empleados e INNER JOIN paises p ON e.nacionalidad = p.id WHERE e.salario < ?");
    $consulta -> execute(array($salarioMinimo));
    while($data = $consulta -> fetch(PDO::FETCH_ASSOC)){
        pintarDatos($data);
    }
}
function getEmpleadosFiltroSalEntre($conexion, $salarioMinimo,$salarioMaximo){
    $consulta = $conexion -> prepare("SELECT e.id,e.nombre,e.apellidos,e.salario,e.hijos,p.nacionalidad FROM empleados e INNER JOIN paises p ON e.nacionalidad = p.id WHERE e.salario BETWEEN ? AND ?");
    $consulta -> execute(array($salarioMinimo,$salarioMinimo));
    while($data = $consulta -> fetch(PDO::FETCH_ASSOC)){
        pintarDatos($data);
    }
}
function getEmpleadosFiltroTodos($conexion,$hijos,$min,$max){
    $consulta = $conexion -> prepare("SELECT e.id,e.nombre,e.apellidos,e.salario,e.hijos,p.nacionalidad FROM empleados e INNER JOIN paises p ON e.nacionalidad = p.id WHERE e.salario BETWEEN ? AND ? AND e.hijos = ?");
    $consulta -> execute(array($min,$max,$hijos));
    while($data = $consulta -> fetch(PDO::FETCH_ASSOC)){
        pintarDatos($data);
    }
}
function borrarEmpleado($conexion,$idEmpleado){
    $consulta = $conexion -> prepare("DELETE FROM empleados WHERE id = ?");
    $consulta -> execute(array($idEmpleado));
}
function pintarDatos($datos){
        print "<tr>";
        print "<td>";
        print "<input type=checkbox name=empleados[] value=$datos[id]> ";
        print "</td>";
        print "<td>$datos[nombre]";
        print "</td>";
        print "<td>$datos[apellidos]";
        print "</td>";
        print "<td>$datos[salario]";
        print "</td>";
        print "<td>$datos[hijos]";
        print "</td>";
        print "<td>$datos[nacionalidad]";
        print "</td>";
        print "</tr>";
}
?>

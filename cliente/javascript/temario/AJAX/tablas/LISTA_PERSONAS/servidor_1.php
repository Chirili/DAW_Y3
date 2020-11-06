<?php
//  Indicamos que el resultado va a ser en json:
header('Content-Type: application/json');

include("conexion.php");
//  Para poder obtener el resultset en forma de array asociativo
//  debemos de usar la función Conectar2:
$conn = conectar2("AJAX", "root", "");

//  Con esta línea recogemos los datos (en formato JSON), enviados por el cliente:
$datos = file_get_contents('php://input');  //  $datos es un string, y no un objeto php
//  Lo convertimos a un objeto php:
$objeto=json_decode($datos);

//  print "objeto->servicio = " . $objeto->servicio;
//  return;
print($objeto);
if($objeto != null) {
  switch($objeto->servicio) {
    case "listar":
    	listadoPersonas();
      break;
    case "insertar":
      insertarPersona($objeto);
			listadoPersonas();
      break;
    case "borrar":
      borrarPersona($objeto->ID);
			listadoPersonas();
      break;
	}
}

function listadoPersonas() {
	global $conn;
	$sc = "Select * From personas Order By ID";
	$rs = Consulta($conn, $sc);
	//  Devolvemos la filas del cuerpo de la tabla:
	print json_encode($rs->fetchAll(PDO::FETCH_ASSOC));
}

function insertarPersona($obj) {
	global $conn;
	//  La consulta de INSERCION:
	$sc = "Insert into personas(DNI, NOMBRE, APELLIDOS) Values('$obj->DNI', '$obj->NOMBRE', '$obj->APELLIDOS')";
	$rs = Consulta($conn, $sc);
}

function borrarPersona($id){
	global $conn;
	//  La consulta de ELIMINACIÓN:
	$sc = "Delete From personas Where ID = $id";
	$rs = Consulta($conn, $sc);
}

?>





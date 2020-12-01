<?php


header("Access-Control-Allow-Origin: *"); // allow request from all origin
header('Access-Control-Allow-Credentials: true');
header("Access-Control-Allow-Methods: GET,HEAD,OPTIONS,POST,PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization");



header("Access-Control-Allow-Origin: *");


header('Content-Type: application/json');  //  Todo se devolverá en formato JSON.

require_once 'alumnado_modelo.php';

$modelo = new AlumnadoModelo();

//  Con esta línea recogemos los datos (en formato JSON), enviados por el cliente:
$datos = file_get_contents('php://input');  //  $datos es un string, y no un objeto php
//  Lo convertimos a un objeto php:
$objeto=json_decode($datos);

//  print json_encode($modelo->Sexos());
//		print "llega la petición";
//  return;

if($objeto != null) {
    switch($objeto->accion) {
			
			case 3:  // Listar
				print json_encode($modelo->Listar());
				break;
			
			case 1: //  Modificar
				$modelo->Actualizar($objeto);
				print json_encode($modelo->Listar());
				break;

			case 0:  //  Añadir / insertar
				$modelo->Registrar($objeto);
				print json_encode($modelo->Listar());
				break;
				
			case 2:  //  Eliminar/borrar
				$modelo->Eliminar($objeto->ID);
				print json_encode($modelo->Listar());
				break;
				
			case 4:  // Obtener alumno por id
				print json_encode($modelo->Obtener($objeto->ID));
				break;
				
				
			
			case 5: //  Devolvemos la lista de los sexos (H = hombre;  M = mujer)
				print json_encode($modelo->Sexos());
				break;
			
			case 9:  // Listar Estados Civiles
				print json_encode($modelo->ListarEC());
				break;
			
			case 6:  //  Añadir / insertar ESTADOS CIVILES.
				$modelo->RegistrarEC($objeto);
				print json_encode($modelo->ListarEC());
				break;
			
			case 7: //  Modificar ESTADO CIVIL
				$modelo->ActualizarEC($objeto);
				print json_encode($modelo->ListarEC());
				break;
			
			case 8:  //  Eliminar/borrar ESTADO CIVIL
				$modelo->EliminarEC($objeto->ID);
				print json_encode($modelo->ListarEC());
				break;
				
				
			
    }
}
?>

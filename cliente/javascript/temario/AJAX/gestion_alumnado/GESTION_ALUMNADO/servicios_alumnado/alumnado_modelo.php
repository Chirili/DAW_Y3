<?php

class AlumnadoModelo {

	private $pdo;

	public function __CONSTRUCT() {
		try {
				$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
				$this->pdo = new PDO('mysql:host=localhost;dbname=ajax', 'root', '', $opciones);
				$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                
		} catch(Exception $e) {
				die($e->getMessage());
		}
	}

	public function Listar() {
		try {
			//  Nota, pongo LEFT JOIN y no INNER JOIN para que 
			//   salgan los que doy de alta sin poner nada en el desplegable de SEXO Y ESTADO CIVIL
			//  Pero lo suyo es poner INNER JOIN.
			$sc = "Select a.ID, a.NOMBRE, a.APELLIDOS, a.SEXO, s.NOMBRE as SEXO_NOMBRE, " .
							"a.FECHA_NACIMIENTO, a.ESTADO_CIVIL, ec.NOMBRE as NOMBRE_EC From alumnos a " .
							"LEFT JOIN sexos s ON(a.SEXO = s.CODIGO) " .
							"LEFT JOIN estados_civiles ec ON(a.ESTADO_CIVIL = ec.ID)";
			$stm = $this->pdo->prepare($sc);
			$stm->execute();
			return ($stm->fetchAll(PDO::FETCH_ASSOC));
		} catch(Exception $e) {
			die($e->getMessage());
		}
	}

	public function Obtener($id) {
		try {
			$stm = $this->pdo->prepare("SELECT * FROM alumnos WHERE id = ?");
			$stm->execute(array($id));
			return ($stm->fetch(PDO::FETCH_OBJ));
			
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Eliminar($id) {
		try {
				$stm = $this->pdo->prepare("DELETE FROM alumnos WHERE id = ?");
				$stm->execute(array($id));
		} catch (Exception $e) {
				die($e->getMessage());
		}
	}

	public function Actualizar($data) {
		try {
			$sql = "UPDATE alumnos SET 
									NOMBRE           = ?, 
									APELLIDOS        = ?,
									SEXO             = ?, 
									FECHA_NACIMIENTO = ?,
									ESTADO_CIVIL		 = ?
							WHERE ID = ?";

			$this->pdo->prepare($sql)
					 ->execute(
					array(
							$data->NOMBRE, 
							$data->APELLIDOS, 
							$data->SEXO,
							$data->FECHA_NACIMIENTO,
							$data->ESTADO_CIVIL,
							$data->ID
							) 
					);
		} catch (Exception $e) {
				die($e->getMessage());
		}
	}

	public function Registrar($data) {
			try {
			$sql = "INSERT INTO alumnos (NOMBRE,APELLIDOS,SEXO,FECHA_NACIMIENTO, ESTADO_CIVIL) 
							VALUES (?, ?, ?, ?, ?)";

			$this->pdo->prepare($sql)->execute(
				array(
					$data->NOMBRE, 
					$data->APELLIDOS, 
					$data->SEXO,
					$data->FECHA_NACIMIENTO,
					$data->ESTADO_CIVIL
				)
			);
			} catch (Exception $e) {
					die($e->getMessage());
			}
	}
	
	//  El la práctica, esta lista la obtendríamos de una consulta a una tabla de la Base de datos
	public function Sexos_OLD(){ 
		$op1 = new stdClass();
		$op1->id = "M";
		$op1->nombre = "Mujer";
		$op2 = new stdClass();
		$op2->id = "H";
		$op2->nombre = "Macho man";
		
		$listaSex = array($op1, $op2);
		return $listaSex;
	}
	
	public function Sexos(){ 
		try {
			$stm = $this->pdo->prepare("Select * From sexos");
			$stm->execute();
			return ($stm->fetchAll(PDO::FETCH_ASSOC));
		} catch(Exception $e) {
			die($e->getMessage());
		}
	}
	
	public function ListarEC() {
		try {
			$stm = $this->pdo->prepare("Select * From estados_civiles");
			$stm->execute();
			return ($stm->fetchAll(PDO::FETCH_ASSOC));
		} catch(Exception $e) {
			die($e->getMessage());
		}
	}
	
	public function RegistrarEC($data) {
			try {
			$sql = "INSERT INTO estados_civiles (NOMBRE) VALUES (?)";
			$this->pdo->prepare($sql)->execute(array($data->NOMBRE));
			} catch (Exception $e) {
					die($e->getMessage());
			}
	}
	
	public function ActualizarEC($data) {
		try {
			$sql = "UPDATE estados_civiles SET NOMBRE = ? WHERE ID = ?";
			$this->pdo->prepare($sql)
					 ->execute(array($data->NOMBRE, $data->ID));
		} catch (Exception $e) {
				die($e->getMessage());
		}
	}
	
	
	public function EliminarEC($id) {
		try {
				$stm = $this->pdo->prepare("DELETE FROM estados_civiles WHERE id = ?");
				$stm->execute(array($id));
		} catch (Exception $e) {
				die($e->getMessage());
		}
	}
	
	
}  //  class AlumnoModelo
?>


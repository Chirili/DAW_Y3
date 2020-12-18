<?php
require_once("funciones.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Empresa - Empleados
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Listado de Empleados</h1>
  <div style="margin-bottom: 1em">
  	<fieldset style="width:50%">
  		<legend>Filtrado</legend>
  		<form name="filtrar" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  			<p><label>Salario mínimo <input type="number" name="salarioMinimo" min="0"></label>
  			<label>Salario Máximo <input type="number" name="salarioMaximo" min="0"></label>
  			</p>
  			<p>Hijos: <select name="hijos">
  				<option value="">Seleccione el número de hijos</option>
  				<option value="0">0</option>
  				<option value="1">1</option>
  				<option value="2">2</option>
  				<option value="3">3</option>
  				<option value="4">4</option>
  			</select>
  			</p>
  			<input type="submit" value="Filtrar">
  		</form>
  	</fieldset>
  </div>
  <form action="ejercicio-04-02.php" method="POST">
	<table>
		<thead>
			<tr>
				<th></th>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Salario</th>
				<th>Hijos</th>
				<th>Nacionalidad</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if(!isset($_REQUEST["hijos"]) && !isset($_REQUEST["salarioMinimo"]) && !isset($_REQUEST["salarioMaximo"])){
				getEmpleados($conexion);
			}

			if(isset($_REQUEST["hijos"]) && !empty($_REQUEST["hijos"]) && isset($_REQUEST["salarioMinimo"]) && !empty($_REQUEST["salarioMinimo"]) && isset($_REQUEST["salarioMaximo"]) && !empty($_REQUEST["salarioMaximo"])){
				getEmpleadosFiltroTodos($conexion,$_REQUEST["hijos"],$_REQUEST["salarioMinimo"],$_REQUEST["salarioMaximo"]);
			}else{
			if(isset($_REQUEST["hijos"]) && !empty($_REQUEST["hijos"])){
				getEmpleadosFiltroHijos($conexion,$_REQUEST["hijos"]);
			}
			if(isset($_REQUEST["salarioMinimo"]) && isset($_REQUEST["salarioMaximo"])){
				getEmpleadosFiltroSalEntre($conexion,$_REQUEST["salarioMinimo"],$_REQUEST["salarioMaximo"]);
			}else{
				if(isset($_REQUEST["salarioMinimo"]) && !empty($_REQUEST["hijos"])){
					getEmpleadosFiltroSalMin($conexion,$_REQUEST["salarioMinimo"]);
				}
				if(isset($_REQUEST["salarioMaximo"])){
					getEmpleadosFiltroSalMax($conexion,$_REQUEST["salarioMaximo"]);
				}
			}
			}
			?>
		</tbody>
	</table>

    <!--  ESCRIBA AQUI EL CÓDIGO HTML Y/O PHP NECESARIO -->
	<button type="submit">Borrar Empleados</button>

  </form>
</body>
</html>

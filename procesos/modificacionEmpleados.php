<!DOCTYPE html>
<?php
    //Angel Manuel Fernandez Baños
    require 'operaciones_bd.php';
    $operaciones=new operaciones_BD();
?>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0"><!--Para que en el movil el ajuste lo haga bien-->
		<link rel="stylesheet" href="../css/estilo.css">
	</head>
	<body>
		<header>
			<h1>Gestión de empleados</h1>
		</header>
		<nav>
			<ul>
				<li><a href="altaAdministrador.php">Alta</a></li>
				<li><a href="listadoEmpleados.php">Listado</a></li>
				<li><a href="consultaEmpleados.php">Consulta</a></li>
			</ul>
		</nav>
		<div id="mover">
			<nav>
				<ul>
					<li><a href="altaAdministrador.php">Alta</a></li>
					<li><a href="listadoEmpleados.php">Listado</a></li>
					<li><a href="consultaEmpleados.php">Consulta</a></li>
				</ul>
			</nav>
			<main>
				<h1>Empleados</h1>
				<?php
					$consulta="SELECT * FROM empleados WHERE IdDepartamento LIKE '".$_POST['IdDepartamento']."';";
					$resultado=$operaciones->consultar($consulta);
					$fila=$resultado->fetch_assoc();
		
					echo 
					'
						<form name="modificar" action="#" method="POST">
							DNI:<input type="text" name="dni" id="dni" value="'.$fila['DNI'].'" /><br />
							Nombre:<input type="text" name="nombre" id="nombre" value="'.$fila['Nombre'].'" /><br />
							Correo:<input type="text" name="correo" id="correo" value="'.$fila['Correo'].'" /><br />
							Teléfono:<input type="text" name="telefono" id="telefono" value="'.$fila['Telefono'].'" /><br />
							<input type="submit" value="Modificar" name="modificar" />
							<input type="submit" value="Cancelar" name="cancelar" />
						</form>
					';
					if(isset($_POST['modificar'])){
						$consulta='UPDATE empleados SET dni = "'.$_POST['dni'].'", nombre = "'.$_POST['nombre'].'", correo = "'.$_POST['correo'].'", telefono = "'.$_POST['correo'].'" WHERE idEmpleado = '.$fila['IdEmpleado'].';';
						$resultado=$conexion->query($consulta);
						echo '<a href="../index.html">Volver al índice</a>';
						echo 'Datos modificados';
					}
					if(isset($_POST['cancelar'])){
						echo '<a href="../index.html">Volver al índice</a>';
					}
					$operaciones->cerrarconexion();
				?>                 
			</main>
		</div>
		<footer>
			
		</footer>
	</body>
</html>               
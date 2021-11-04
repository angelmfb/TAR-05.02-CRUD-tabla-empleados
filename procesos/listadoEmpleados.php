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
					$consulta="SELECT Nombre, DNI FROM empleados";

					$resultado=$operaciones->consultar($consulta);
					//foreach ($resultado as $nomb => $valor){
					while ($rows=mysqli_fetch_array($resultado)) {
						echo "NOMBRE: ".$rows[0]." ";
						echo "DNI: ".$rows[1]."</br>";
					}
					echo '<a href="modificacionEmpleados.php">Mofificar</a>';
					echo '<a href="borrarEmpleado.php">Eliminar</a>';
					$operaciones->cerrarconexion();
				?>                 
			</main>
		</div>
		<footer>
			
		</footer>
	</body>
</html>
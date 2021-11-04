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
		<h1>EMPLEADO</h1>
			<form name="formulario" action="consultaEmpleados.php" method="post">
				<!--<p>Introduce el dni:</p>-->
				<p>Introduce el nombre:</p>
				<!--<input type="text" name="dni" maxlength="50"><br /><br />-->
				<input type="text" name="nombre" maxlength="50"><br /><br />
				<input type="submit" value="Enviar" name="enviar">
				<input type="reset" value="Borrar">
			</form>
			<?php
				if(isset($_POST["enviar"])){			
					echo '<h1>DATOS ENVIADOS</h1>';
					//$numero = $_POST["dni"];
					$numero = $_POST["nombre"];

					//$consulta = "SELECT * FROM empleados WHERE DNI LIKE '".$_POST['dni']."';";
					$consulta = "SELECT * FROM empleados WHERE Nombre LIKE '".$_POST['nombre']."';";
					
					
					$resultado=$operaciones->consultar($consulta);
					//cambiar nombres de campos
					while ($rows=mysqli_fetch_array($resultado)) {
						echo "IdDepartamento: ".$rows[0]." ";
						echo "Nombre: ".$rows[1]."</br>";
						echo "Correo: ".$rows[2]." ";
						echo "Teléfono: ".$rows[3]."</br>";
						echo "DNI: ".$rows[4]."</br>";
					}
				}
                $operaciones->cerrarconexion();
            ?>
        </main>
    </div>
    <footer>
        
    </footer>
</body>
</html>
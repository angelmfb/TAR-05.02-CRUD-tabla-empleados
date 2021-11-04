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
            <h1>Borrar un Empleado</h1>
                <form name="formulario" action="borrarEmpleado.php" method="post">
                    <p>Introduce el dni:</p>
                    <input type="text" name="dni" maxlength="50"><br /><br />
                    <input type="submit" value="Enviar" name="enviar">
                    <input type="reset" value="Borrar">
                </form>
                <?php
                    if(isset($_POST["enviar"])){			
                        echo '<h1>DATOS ENVIADOS</h1>';

                        //$consulta = "SELECT * FROM empleados WHERE DNI LIKE '".$_POST['dni']."';";
                        $consulta = "DELETE FROM empleados WHERE DNI LIKE '".$_POST['dni']."';";
                        
                        echo "Usuario eliminado";
                    }
                    $operaciones->cerrarconexion();
                ?>
            </form>
        </main>
    </div>
    <footer>
        
    </footer>
</body>
</html>
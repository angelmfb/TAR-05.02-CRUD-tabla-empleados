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
            <h1>Alta Administrador</h1>
            <form name="formulario" action="altaAdministrador.php" method="post">
                <p>Introduce tus datos:</p>
                <label>Nombre:</label>
                <input type="text" name="nombre" maxlength="50"><br />
                <label>Correo:</label>
                <input type="text" name="correo" maxlength="100"><br />
                <label>Teléfono:</label>
                <input type="text" name="telefono" maxlength="9"><br />
                <label>DNI:</label>
                <input type="text" name="dni" maxlength="9"><br /><br />
                <input type="submit" value="Enviar" name ="enviar">
                <input type="reset" value="Borrar">
            </form>
            <?php
                if(isset($_POST['enviar'])){
                    if($_POST['correo']==''){
                        $consulta="INSERT INTO empleados (DNI,Nombre,Correo,Telefono) VALUES ('".$_POST['dni']."','".$_POST['nombre']."',NULL,'".$_POST['telefono']."');";
                    }else{
                        $consulta="INSERT INTO empleados (DNI,Nombre,Correo,Telefono) VALUES ('".$_POST['dni']."','".$_POST['nombre']."','".$_POST['correo']."','".$_POST['telefono']."');";
                    }
                    
                    $resultado=$operaciones->consultar($consulta);
                    echo 'Consulta realizada';                   
                }
                $operaciones->cerrarconexion();
            ?>
        </main>
    </div>
    <footer>
        
    </footer>
</body>
</html>
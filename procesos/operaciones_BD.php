<?php
    class operaciones_BD {
        //conexión
        private $conexion=null;
        function __construct(){
            require('config_bd.php');
            $this->conexion=mysqli_connect(SERVIDORBD,USUARIO,CONTRASENIA,BASEDATOS);
            //$mysqli = new mysqli("esvirgua.com","user2daw_07","MkW(=vk57D{J","user2daw_BD1-07");
        }
        
        //listado
        function listado(){
            $consulta='SELECT Nombre, DNI FROM empleados';
        }
        //consultar
        function consulta(){
            $consulta='SELECT Nombre, DNI FROM empleados WHERE DNI='.$numero;
        }
        //modificación
        function modificado(){
            //$consulta='';
        }
        //borrar
        function borrado(){
            $consulta="SELECT * FROM empleados WHERE IdEmpleado='".$_GET['id']."';";
            $consulta2="DELETE FROM empleados WHERE IdEmpleado='".$_POST['id']."';";
        }
        //resultado
        function query(){
            $resultado = mysqli_query($conexion, $consulta);
        }
        //filas
        function fetch_array(){
            $fila = mysqli_fetch_array($resultado);
        }
        //error
        function nErrores(){
            if (mysqli_connect_errno()) {
                printf("Conexión fallida: %s\n", mysqli_connect_error());
                exit();
            }
        }
        function consultar($consulta){
            return $this->conexion->query($consulta);
        }

        function cerrarconexion(){
            return $this->conexion->close();
        }
    } 
?>
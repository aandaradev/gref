<?php
	//iniciamos la sesion
	session_start();
	ob_start();
	//Llamamos a las librerias
	include("../includes/config.php");
	include("../includes/funciones.php");
	//verificamos que se enviara la información del formulario
	if(isset($_POST['Enviar'])){
		$usuario = $_POST['usuario']; //Asignamos el valor de la variable POST a una variable local
		$clave = $_POST['password']; //Asignamos el valor de la variable POST a una variable local
		//verificamos que los valores de las variables no esten vacios 
		if(empty($usuario) || empty($clave)){
			echo"<script type='text/javascript'>alert('Debes Ingresar todos los Datos');</script>";
			echo"<script type='text/javascript'>window.open('administradores.php');</script>";
			echo"<script type='text/javascript'>window.close();</script>";
		}
		else{
			$cnx = conectar(); //Asignamos a una variable la conexión con la BD
			$sql = "SELECT * FROM usuario WHERE clave = '". $_POST['password'] . "'"; //Asignamos a una variable la consulta sql
			$res = mysql_query($sql) or die(mysql_error()); //Asignamos a una variable la consulta de la BD
			while($fila = mysql_fetch_array($res)){
				if($clave == $fila['clave'] && $usuario == $fila['usuario']){
					$enc = 1;
					$_SESSION['usuario'] = $usuario;
				}
				else{
					$enc = 0;
				}
			}
			if($enc == 0){
				echo"<script type='text/javascript'>alert('No ingresaste, Acceso Restringido');</script>";
				echo"<script type='text/javascript'>window.parent.close();</script>";
				echo"<script type='text/javascript'>window.open('administradores.php');</script>";
			}
			else{
				header("location:menu.php");
			}
      		}
	}
?>

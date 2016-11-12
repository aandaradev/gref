<?php
	//Iniciamos Sesión
	session_start();
	ob_start();
	if($_POST['Eliminar']){
		if(isset($_SESSION['usuario'])){
			include("../includes/config.php");
			include("../includes/funciones.php");
			$cnx = conectar();
			$sql = "DELETE FROM usuario WHERE clave='".$_POST['password']."'";
			$consulta = mysql_query($sql) or die(mysql_error());
			echo"<script type='text/javascript'>alert('Registro Eliminado Exitosamente...');</script>";
			echo"<script type='text/javascript'>window.close();window.open('menu.php')</script>";
			mysql_close($cnx);
		}
	}
	else{
		echo"<script type='text/javascript'>alert('No se ha Realizado Ningun Envio de Informacion')</script>";
		echo"<script type='text/javascript'>window.close();window.open('modificar_usuario.php')</script>";
	}
?>

<?php
	session_start();
	ob_start();
	if(empty($_SESSION['usuario'])){
		echo"<script type='text/javascript'>alert('No Existe Ninguna Sesion Iniciada');</script>";
		echo"<script type='text/javascript'>window.close(); window.open('administradores.php')</script>";
	}
	else{
		if(empty($_POST['codigo']) || empty($_POST['descripcion']) || empty($_POST['estado'])){
			echo"<script type='text/javascript'>alert('Debes Ingresar todos los Datos...')</script>";
			echo"<script type='text/javascript'>window.close(); window.open('modificar_equipo.php');</script>";
		}
		else{
			include("../includes/config.php");
			include("../includes/funciones.php");
			$cnx = conectar();
			$sql = "UPDATE Asistencia SET ";
			$sql .= "AsistenciaId = '".$_POST['asistenciaid']."',";
			$sql .= "CodGref = '".$_POST['codigo']."',";
			$sql .= "FechaA = '".$_POST['fechaA']."'";
			$consulta = mysql_query($sql) or die(mysql_error());
			echo"<script type='text/javascript'>alert('Registro Actualizado Correctamente...')</script>";
			mysql_free_result($consulta);
			mysql_close($cnx);
			echo"<script type='text/javascript'>window.close(); window.open('menu.php');</script>";
		}
	}
?>

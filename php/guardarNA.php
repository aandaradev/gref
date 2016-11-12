<?php
	session_start();
	ob_start();
	if(isset($_POST['Guardar'])){
		if(empty($_SESSION['usuario'])){
			echo"<script type='text/javascript'>alert('No Existe Ninguna Sesión Iniciada'); window.close(); window.open('administradores.php')</script>";
		}
		else{
			if(empty($_POST['asistenciaid']) || empty($_POST['fechaA'])){
				echo"<script type='text/javascript'>alert('Debes Ingresar todos los Datos...')</script>";
				echo"<script type='text/javascript'>window.close(); window.open('asistencia.php');</script>";
			}
			else{
				include("../includes/config.php");
				include("../includes/funciones.php");
				$cnx = conectar();
				$sql = "SELECT * FROM Asistencia, personal WHERE asistenciaId='". $_POST['asistenciaid']."'";
				$consulta = mysql_query($sql) or die(mysql_error());
				$lista = mysql_fetch_array($consulta);
				if($_POST['asistenciaid'] == $lista['AsistenciaId'] && $_POST['codigo'] == $lista['CodGref'] && $_POST['fechaA'] == $lista['FechaA']){
					echo"<script type='text/javascript'>alert('La Asistencia Ya Existe...')</script>";
					echo"<script type='text/javascript'>window.close();window.open('asistencia.php')</script>";
				}
				else{
					$sql = "INSERT INTO Asistencia SET ";
					$sql .= "Asistencia.AsistenciaId = '".$_POST['asistenciaid']."',";
					$sql .= "Asistencia.CodGref = '".$_POST['codigo']."',";
					$sql .= "Asistencia.FechaA = '".$_POST['fechaA']."'";
					$consulta = mysql_query($sql) or die(mysql_error());
					mysql_close($cnx);
					$sql = "INSERT INTO personal SET ";
					$sql .= "personal.Estado = '".$_POST['estado']."'";
					$consulta = mysql_query($sql) or die(mysql_error());
					mysql_close($cnx);
					echo"<script type='text/javascript'>alert('Registro Guardado Correctamente...')</script>";
					echo"<script type='text/javascript'>window.close();window.open('menu.php')</script>";
				}
			}
		}
	}
	else{
		echo"<script type='text/javascript'>alert('No se ha Realizado Ningun Envio de Informacion')</script>";
		echo"<script type='text/javascript'>window.close();window.open('asistencia.php')</script>";
	}
?>

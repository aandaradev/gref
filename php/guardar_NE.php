<?php
	session_start();
	ob_start();
	if(isset($_POST['Guardar'])){
		if(empty($_SESSION['usuario'])){
			echo"<script type='text/javascript'>alert('No Existe Ninguna Sesión Iniciada'); window.close(); window.open('administradores.php')</script>";
		}
		else{
			if(empty($_POST['codigo']) || empty($_POST['descripcion']) || empty($_POST['estado'])){
				echo"<script type='text/javascript'>alert('Debes Ingresar todos los Datos...')</script>";
				echo"<script type='text/javascript'>window.close(); window.open('insertar_equipo.php');</script>";
			}
			else{
				include("../includes/config.php");
				include("../includes/funciones.php");
				$cnx = conectar();
				$sql = "SELECT * FROM equipos WHERE Cod_equipo='". $_POST['codigo']."'";
				$consulta = mysql_query($sql) or die(mysql_error());
				$lista = mysql_fetch_array($consulta);
				if($_POST['codigo'] == $lista['Cod_equipo'] && $_POST['descripcion'] == $lista['Descripcion'] && $_POST['cantidad'] == $lista['Cantidad'] && $_POST['estado'] == $lista['Estado']){
					echo"<script type='text/javascript'>alert('El Equipo Ya Existe...')</script>";
					echo"<script type='text/javascript'>window.close();window.open('insertar_equipo.php')</script>";
				}
				else{
					$sql = "INSERT INTO equipos SET ";
					$sql .= "Cod_equipo = '".$_POST['codigo']."',";
					$sql .= "Descripcion = '".$_POST['descripcion']."',";
					$sql .= "Cantidad = '".$_POST['cantidad']."',";
					$sql .= "Estado = '".$_POST['estado']."'";
					$consulta = mysql_query($sql) or die(mysql_error());
					echo"<script type='text/javascript'>alert('Registro Guardado Correctamente...')</script>";
					echo"<script type='text/javascript'>window.close();window.open('menu.php')</script>";
				}
				mysql_close($cnx);
			}
		}
	}
	else{
		echo"<script type='text/javascript'>alert('No se ha Realizado Ningun Envio de Informacion')</script>";
		echo"<script type='text/javascript'>window.close();window.open('insertar_equipo.php')</script>";
	}
?>

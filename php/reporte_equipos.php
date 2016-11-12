<?php
	//Iniciamos la sesión
	session_start();
	if(isset($_SESSION['usuario'])){
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//ES" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>...::: Reporte de Equipos :::...</title>
		<link rel="stylesheet" type="text/css" href="../css/estilo.css" >
		<link rel="stylesheet" type="text/css" href="../css/menu2.css">
		<script type="text/javascript" src="../js/titulo.js"></script>
	</head>
	<body>
		<div>
			<table border="0" align="center" cellpadding="2px" cellsapcing="2px">
				<tr>
					<td>
						<img src="../Imagenes/BannerGREF.gif" width="950px" height="100px">
					</td>
				</tr>
			</table>
		</div>
		<br>
		<header>
			<nav>
				<center>
					<div id="marco" >
						<span class="preload2">
						</span>
						<!--MENU-->
						<ul class="menu2">
							<img src="../Imagenes/menu_izq.gif" align="left" />
							<img src="../Imagenes/menu_der.gif" align="right"/>		
							<li class="top">
								<a class="top_link">
									<span class="down">
										Registar
									</span>
								</a>		
								<ul class="sub">			
									<li>
										<a href="insertar_usuario.php">
											Nuevos Usuarios
										</a>
									</li>
									<li>
										<a href="insertar_equipo.php">
											Equipos
										</a>
									</li>					
								</ul>		
							</li>
							<li class="top">
								<a class="top_link">
									<span class="down">
										Procesar
									</span>
								</a>
								<ul class="sub">
									<li>
										<a href="asistencia.php">
											Asistencia
										</a>
									</li>			
								</ul>		
							</li>
							<li class="top">
								<a class="top_link">
									<span class="down">
										Reportes
									</span>
								</a>
								<ul class="sub">
									<li>
										<a href="reporte_miembros.php">
											Miembros
										</a>
									</li>
									<li>
										<a href="reporte_equipos.php">
											Equipos
										</a>
									</li>
									<li>
										<a href="reporte_asistencia.php">
											Asistencia
										</a>
									</li>			
								</ul>
					
							</li>							
						</ul>
						<!-- FIN MENU-->
				
					</div>
				</center>
				<div align="right" class="estilo1">
					<h6>
						<?echo"Usuario: " . $_SESSION['usuario']; ?>
						<br>
						<a href="salir.php">
							Cerrar Sesi&oacute;n
						</a>
					</h6>			
				</div>
			</nav>
			<p align="center" class="estilo1">
				<strong>
					 Reportes de Equipos
				</strong>
			</p>
		</header>
		<center>
			<div class="box">
				<form name="frmBuscar" action="<? echo $_SERVER['PHP_SELF']; ?>" method="POST">
					<table>
						<tr>
							<td>
								<div>
									<strong>
										Estado:
									</strong>
								</div>
							</td>
							<td>
								<div>
									<input type="text" name="estado" maxlength="10">
								</div>
							</td>
							<td>
								<div>
									<input type="submit" name="Buscar" value="Buscar" class="consultar">
								</div>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</center>
		<br>
		<form name="frmReporte" action="reporte_E.php" method="POST">
			<table border="1" cellspadding="0" cellspacing="0" align="center">
				<tr>
					<th colspan="4">
						<div>
							<img src="../Imagenes/logo.png" width="100px" heigth="100px" align="middle">
							<strong>
								Grupo de Rescate y Excursionismo F&eacute;nix  
							</strong>
						</div>
					</th>
				</tr>
				<tr>
					<th colspan="4" bgcolor="aqua">
						<div>
							<strong>
								Reporte de Equipos por Estado 
							</strong>
						</div>
					</th>
				</tr>
				<tr>
					<td bgcolor="#CCFFFF">
						<div>
							<strong>
								C&oacute;digo
							</strong>
						</div>
					</td>
					<td bgcolor="#CCFFFF">
						<div>
							<strong>
								Descripci&oacute;n
							</strong>
						</div>
					</td>
					<td bgcolor="#CCFFFF">
						<div>
							<strong>
								Cantidad
							</strong>
						</div>
					</td>
					<td bgcolor="#CCFFFF">
						<div>
							<strong>
								Estado
							</strong>
							<input type='hidden' name='est' value='$x'>
						</div>
					</td>
				</tr>
				<?php
					include("../includes/config.php");
					include("../includes/funciones.php");
					$x = $_POST['estado'];
					$cnx = conectar();
					$sql = "SELECT * FROM equipos WHERE Estado='". $_POST['estado']."' ORDER BY Cod_equipo";
					$consulta = mysql_query($sql);
					while(list($codigo,$descripcion,$cantidad,$estado) = mysql_fetch_array($consulta)){
						echo"<tr>";
							echo"<td><div>$codigo<input type='hidden' name='codigo' value='$codigo'></div></td>";
							echo"<td><div>$descripcion<input type='hidden' name='descripcion' value='$descripcion'></div></td>";
							echo"<td><div>$cantidad<input type='hidden' name='cantidad' value='$cantidad'></div></td>";
							echo"<td><div>$estado<input type='hidden' name='estado' value='$estado'></div></td>";
						echo"</tr>";
					}
					mysql_free_result($consulta);
					mysql_close();
				?>
			</table>
			<table border="0" cellspadding="0" cellspacing="0" align="center">
				<tr>
					<td colspan="4" align="center">
						<div>
							<input type="submit" name="Reporte" value="Imprimir PDF" class="imprimir">
						<div>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?
	}
	else{
		echo"<script type='text/javascript'>alert('No Existe Ninguna Sesion Iniciada');</script>";
		echo"<script type='text/javascript'>window.open('administradores.php');</script>";
		echo"<script type='text/javascript'>window.close();</script>";
	}
?>

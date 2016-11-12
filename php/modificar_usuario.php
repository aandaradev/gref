<?php
	//Iniciamos sesión
	session_start();
	ob_start();
	if(isset($_SESSION['usuario'])){ //Verificamos que existe la sesión		
?>
		<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//ES" "http://www.w3.org/TR/html4/loose.dtd">
		<html>
			<head>
				<title>
					...::: Modificar Usuario :::...
				</title>
				<link rel="stylesheet" type="text/css" href="../css/estilo.css">
				<link rel="stylesheet" type="text/css" href="../css/menu2.css">
				<script type="text/javascript" src="../js/titulo.js"></script>
				<script type="text/javascript">
					function habilitar(){
						window.document.frmModificar.Guardar.disabled = false;
						window.document.frmModificar.Modificar.disabled = true;
						window.document.frmModificar.Eliminar.disabled = true;
					}
					function cancelar(){
						window.document.frmModificar.Guardar.disabled = true;
						window.document.frmModificar.Modificar.disabled = false;
						window.document.frmModificar.Eliminar.disabled = false;
					}			
				</script>
			</head>
			<body>
				<?php
					include("../includes/config.php");
					include("../includes/funciones.php");
					$cnx = conectar();
					$sql = "SELECT * FROM usuario WHERE UsuarioId='". $_POST['usuarioid']."'";
					$consulta = mysql_query($sql);
				?>
				<div>
					<table border="1" cellpadding="2px" cellspacing="2px" align="center">
						<tr>
							<td>
								<div>
									<img src="../Imagenes/BannerGREF.gif" width="950px" height="100px">
								</div>
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
					Modificar Infomaci&oacute;n de Usuarios
				</strong>
			</p>
				<header>
				<center>
					<div class="box">
						<form name="frmModificar" method="POST">
							<table border="0" cellspadding="2px" cellspacing="2px" align="center">
								<?
									while(list($usuarioId,$usuario,$clave) = mysql_fetch_array($consulta)){
										echo"<tr>";
											echo"<td><div><strong>UsuarioId:</strong></div></td>";
											echo"<td><div><input type='text' name='usuarioid' value='$usuarioId' disabled></div></td>";
										echo"<tr>";
											echo"<td><div><strong>Usuario:</strong></div></td>";
											echo"<td><div><input type='text' name='usuario' value='$usuario'></div></td>";
										echo"</tr>";
										echo"<tr>";
										echo"<td><div><strong>Contrase&ntilde;a:</strong></div></td>";
										echo"<td><div><input type='text' name='password' value='$clave'></div></td>";
										echo"</tr>";
										
									}									
								?>
							</table>&nbsp;
							<table border="0" cellpadding="2px" cellspacing="2px" align="center">
								<tr>
									<td>
										<div>
											<input type="button" name="Nuevo" value="Nuevo" class="nuevo" onclick="habilitar();">
										</div>
									</td>
									<td>
										<div>
											<input type="submit" name="Guardar" value="Guardar" class="guardar" onclick="window.document.frmModificar.action = 'guardarNU.php'" disabled>
										</div>
									</td>
									<td>
										<div>
											<input type="submit" name="Consultar" value="Consultar" class="consultar" onclick="window.document.frmModificar.action = 'consultar_usuario.php'">
										</div>
									</td>
									<td>
										<div>
											<input type="submit" name="Modificar" value="Modificar" class="modificar" onclick="window.document.frmModificar.action = 'modificar_U.php'">
										</div>
									</td>
									<td>
										<div>
											<input type="submit" name="Eliminar" value="Eliminar" class="eliminar" onclick="window.document.frmModificar.action = 'eliminar_U.php'">
										</div>
									</td>
									<td>
										<div>
											<input type="reset" name="Cancelar" value="Cancelar" class="cancelar" onclick="cancelar()">
										</div>
									</td>
								</tr>
							</table>
						</form>
					</div>
				</center>
			<body>

		</html>
<?
		mysql_free_result($consulta);
		mysql_close();
	}
	else{
		echo"<script type='text/javascript'>alert('No Existe Ninguna Sesion Iniciada');</script>";
		echo"<script type='text/javascript'>window.close(); window.open('administradores.php');</script>";
	}
?>

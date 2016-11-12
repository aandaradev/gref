<?php
	//Iniciamos la sesión
	session_start();
	if(isset($_SESSION['usuario'])){
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//ES" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>...::: Sistema de Informaci&oacute;n Web :::...</title>
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
		</header>
	</body>
</html><?
	}
	else{
		echo"<script type='text/javascript'>alert('No Existe Ninguna Sesion Iniciada');</script>";
		echo"<script type='text/javascript'>window.open('administradores.php');</script>";
		echo"<script type='text/javascript'>window.close();</script>";
	}
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/estilo2.css">
	</head>
	<body bgcolor>
		<?php 
			$sendTo = "fenixiutet@gmail.com."; 
			$subject = "Solicitud de Información de Productos"; 
			$nombre = $_POST["nombre"]; 
			$email = $_POST["email"]; 
			$comentarios = $_POST["comentarios"];  
			$headers = $_POST["Solicitud de Información"]; 
			$message = "\nNombre: " . $nombre . "\nEmail: " . $email . "\nComentarios: " . $comentarios; 
			mail($sendTo, $subject, $message, $headers, $comentarios);
		?>
		<?php
		echo "";
		?>
		<br><br><br><br><br><br><br><br>
		<center><b><font>Su solicitud ha sido enviada correctamente. En breve nos comunicaremos con usted.
		<br>Gracias, Grupo de Rescate y Excursionismo FENIX</b></center>
		<br><br>
		<center><a href="contenido.php"><b>Regresar al inicio</a></b></font>
	</body>
</html>

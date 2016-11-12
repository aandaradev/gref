<?php
	session_start();
	ob_start();
	if(isset($_SESSION['usuario'])){
		unset($_SESSION['usuario']);
		session_destroy();
		header("location:contenido.php");
	}
	else{
		echo"<script type='text/javascript'>alert('No existe ninguna sesión iniciada');</script>";
		echo"<script type='text/javascript'>window.open('administradores.php');</script>";
		echo"<script type='text/javascript'>window.close();</script>";
	}
?>

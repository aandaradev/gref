<html>
	<body>
		<form name="from1" action="<?php $_SERVER['PHP_SELF']?>" method="POST">
			<label>Foto</label><input type="file" id="foto" name="foto">
			<p><input type="submit" name="enviar" value="enviar">
		</form>
		<?php
if(isset($_POST['enviar'])){
    $dirname = '/home/nightshadow/www/gref/foto/';
    if(!empty($_FILES['foto' ]['name'])){
        if (is_uploaded_file($_FILES['foto' ]['tmp_name'])) {
            move_uploaded_file($_FILES['foto']['tmp_name'],$dirname.$_FILES['foto']['name']);
            echo 'La imagen fue correctamente cargada!';
        } else {
            echo 'No se pudo cargar la imagen!';
        }
    } else {
        echo 'Debe especificar la ruta de la imagen';
    }
}
?>
	</body>
</html>


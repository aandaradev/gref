<?php
	ob_start();
	if(isset($_POST['Enviar'])){
			if(empty($_POST['codigo'])){
				echo"<script type='text/javascript'>alert('Debes Ingresar todos los Datos...')</script>";
				echo"<script type='text/javascript'>window.close(); window.open('planilla.php');</script>";
			}
			else{
				include("../includes/config.php");
				include("../includes/funciones.php");
				$cnx = conectar();
				$sql = "SELECT * FROM personal, Estudio, trabajo, vehiculo, radioaficionado, emergencia, SenasF WHERE personal.CodGref = Estudio.CodGref and personal.CodGref = trabajo.CodGref and personal.CodGref = vehiculo.CodGref and personal.CodGref = radioaficionado.CodGref and personal.CodGref = emergencia.CodGref and personal.CodGref='". $_POST['codigo']."' and Estudio.CodGref='". $_POST['codigo']."' and trabajo.CodGref='". $_POST['codigo']."' and vehiculo.CodGref='". $_POST['codigo']."' and radioaficionado.CodGref='". $_POST['codigo']."' and emergencia.CodGref='". $_POST['codigo']."' and SenasF.CodGref='". $_POST['codigo']."'";
				$consulta = mysql_query($sql) or die(mysql_error());
				$lista = mysql_fetch_array($consulta);
				if($_POST['codigo'] == $lista['CodGref']){
					echo"<script type='text/javascript'>alert('El Miembro Ya Existe...')</script>";
					echo"<script type='text/javascript'>window.close();window.open('planilla.php')</script>";
				}
				else{
					$sql = "INSERT INTO personal SET ";
					$sql .= "personal.CodGref = '".$_POST['codigo']."',";
					$sql .= "personal.CedId = '".$_POST['cedula']."',";
					$sql .= "personal.Apellidos = '".$_POST['apellidos']."',";
					$sql .= "personal.Nombres = '".$_POST['nombres']."',";
					$sql .= "personal.Direccion = '".$_POST['direccion']."',";
					$sql .= "personal.tlf = '".$_POST['tlf']."',";
					$sql .= "personal.FechaNac = '".$_POST['fechaN']."',";
					$sql .= "personal.LugarNac = '".$_POST['a012700es']."''" .$_POST['a012600mu']."''" .$_POST['parroquia']."',";
					$sql .= "personal.Edad = '".$_POST['edad']."',";
					$sql .= "personal.Sexo = '".$_POST['sexo']."',";
					$sql .= "personal.EdoCivil = '".$_POST['edocivil']."',";
					$sql .= "personal.Ciudad = '".$_POST['ciudad']."',";
					$sql .= "personal.Ocupacion = '".$_POST['ocupacion']."',";
					$sql .= "personal.GrupoSang = '".$_POST['gsanguineo']."',";
					$sql .= "personal.Email = '".$_POST['email']."',";
					$sql .= "personal.Extension = '".$_POST['extension']."',";
					$sql .= "personal.FechaIng = '".$_POST['fechaing']."',";
					$sql .= "personal.Asociaciones = '".$_POST['asociaciones']."',";
					$sql .= "personal.Motivacion = '".$_POST['motivo']."',";
					$sql .= "personal.Area = '".$_POST['area']."',";
					$sql .= "personal.DirEmergencia = '".$_POST['direccionEmer']."',";
					$sql .= "personal.TlfEmergencia = '".$_POST['tlfEmer']."'";
					$consulta = mysql_query($sql) or die(mysql_error());
					mysql_close($cnx);
					$cnx = conectar();
					$sql = "INSERT INTO Estudio SET ";
					$sql .= "Estudio.CodGref = '".$_POST['codigo']."',";
					$sql .= "Estudio.NombreInst = '".$_POST['nombIE']."',";
					$sql .= "Estudio.DireccionInst = '".$_POST['direccionIE']."',";
					$sql .= "Estudio.TlfInst = '".$_POST['tlfIE']."',";
					$sql .= "Estudio.Semestre = '".$_POST['semestre']."'";
					$consulta = mysql_query($sql) or die(mysql_error());
					mysql_close($cnx);
					$cnx = conectar();
					$sql = "INSERT INTO trabajo SET ";
					$sql .= "trabajo.CodGref = '".$_POST['codigo']."',";
					$sql .= "trabajo.NombEmp = '".$_POST['nombemp']."',";
					$sql .= "trabajo.DireccionEmp = '".$_POST['direccionE']."',";
					$sql .= "trabajo.TlfEmp = '".$_POST['tlfE']."',";
					$sql .= "trabajo.Cargo = '".$_POST['cargo']."'";
					$consulta = mysql_query($sql) or die(mysql_error());
					mysql_close($cnx);
					$cnx = conectar();
					$sql = "INSERT INTO vehiculo SET ";
					$sql .= "vehiculo.CodGref = '".$_POST['codigo']."',";
					$sql .= "vehiculo.Marca = '".$_POST['marca']."',";
					$sql .= "vehiculo.Modelo = '".$_POST['modelo']."',";
					$sql .= "vehiculo.Color = '".$_POST['color']."',";
					$sql .= "vehiculo.Capacidad = '".$_POST['capacidad']."',";
					$sql .= "vehiculo.Serial = '".$_POST['serial']."',";
					$sql .= "vehiculo.Placas = '".$_POST['placa']."',";
					$sql .= "vehiculo.Ano = '".$_POST['ano']."',";
					$sql .= "vehiculo.Licencia = '".$_POST['licencia']."'";
					$consulta = mysql_query($sql) or die(mysql_error());
					mysql_close($cnx);
					$cnx = conectar();
					$sql = "INSERT INTO radioaficionado SET ";
					$sql .= "radioaficionado.CodGref = '".$_POST['codigo']."',";
					$sql .= "radioaficionado.Radioaficionado = '".$_POST['radioaficionado']."',";
					$sql .= "radioaficionado.Equipo = '".$_POST['equipo']."',";
					$sql .= "radioaficionado.Permiso11 = '".$_POST['permiso11']."',";
					$sql .= "radioaficionado.Permiso2 = '".$_POST['permiso2']."',";
					$sql .= "radioaficionado.TipoEstacion = '".$_POST['estacion']."'";
					$consulta = mysql_query($sql) or die(mysql_error());
					mysql_close($cnx);
					$cnx = conectar();
					$sql = "INSERT INTO emergencia SET ";
					$sql .= "emergencia.CodGref = '".$_POST['codigo']."',";
					$sql .= "emergencia.Nombre = '".$_POST['nombEmer']."',";
					$sql .= "emergencia.Direccion = '".$_POST['dirEmer']."',";
					$sql .= "emergencia.Tlf = '".$_POST['tlfEmergencia']."'";
					$consulta = mysql_query($sql) or die(mysql_error());
					mysql_close($cnx);
					$cnx = conectar();
					$sql = "INSERT INTO SenasF SET ";
					$sql .= "SenasF.CodGref = '".$_POST['codigo']."',";
					$sql .= "SenasF.Boca = '".$_POST['Boca']."',";
					$sql .= "SenasF.Frente = '".$_POST['frente']."',";
					$sql .= "SenasF.Cejas = '".$_POST['cejas']."',";
					$sql .= "SenasF.Labios = '".$_POST['labios']."',";
					$sql .= "SenasF.Nariz = '".$_POST['nariz']."',";
					$sql .= "SenasF.Bigotes = '".$_POST['bigotes']."',";
					$sql .= "SenasF.Barba = '".$_POST['barba']."',";
					$sql .= "SenasF.Cabello = '".$_POST['cabello']."',";
					$sql .= "SenasF.Peso = '".$_POST['peso']."',";
					$sql .= "SenasF.Estatura = '".$_POST['estatura']."',";
					$sql .= "SenasF.NumCalzado = '".$_POST['calzado']."',";
					$sql .= "SenasF.TallaCamisa = '".$_POST['tcamisa']."',";
					$sql .= "SenasF.TallaPantalon = '".$_POST['tpantalon']."',";
					$sql .= "SenasF.TallaBraga = '".$_POST['tbraga']."',";
					$sql .= "SenasF.SenasParticulares = '".$_POST['sparticulares']."',";
					$sql .= "SenasF.EnfermedadAlergia = '".$_POST['enfermedad']."'";
					$consulta = mysql_query($sql) or die(mysql_error());
					
					echo"<script type='text/javascript'>alert('Registro Guardado Correctamente...')</script>";
					echo"<script type='text/javascript'>window.close();window.open('contenido.php')</script>";
				}
				mysql_close($cnx);
			}
	}
	else{
		echo"<script type='text/javascript'>alert('No se ha Realizado Ningun Envio de Informacion')</script>";
		echo"<script type='text/javascript'>window.close();window.open('planilla.php')</script>";
	}
?>

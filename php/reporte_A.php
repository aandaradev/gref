<?php
require('../includes/fpdf.php');
include("../includes/config.php");
include("../includes/funciones.php");
$cnx = conectar();
$sql = "SELECT Asistencia.AsistenciaId,Asistencia.CodGref,personal.CedId,personal.Apellidos,personal.Nombres,Asistencia.FechaA FROM Asistencia, personal WHERE Asistencia.CodGref = personal.Codgref and Asistencia.FechaA='". $_POST['fechaA']."'ORDER BY Asistencia.AsistenciaId";
$consulta = mysql_query($sql);
$num = mysql_num_rows($consulta);
$lista[$num] = array();
while(list($asistenciaid,$codigo,$ci,$apellidos,$nombres,$fechaA) = mysql_fetch_array($consulta)){
	$lista[] = array("$asistenciaid","$codigo","$ci","$apellidos","$nombres","$fechaA");
}
mysql_free_result($consulta);
mysql_close();
class PDF extends FPDF
		{
			//Tabla coloreada
			function Tabla($cabecera,$datos)
			{
				//Colores, ancho de línea y fuente en negrita
				$this->SetFillColor(255,0,0);
				$this->SetTextColor(120);
				$this->SetDrawColor(128,0,0);
				//Cabecera
				$this->cabecera($cabecera);
				//Restauración de colores y fuentes				
				$this->SetFillColor(224,235,255);
				$this->SetTextColor(0);
				$this->SetFont("Arial","",12);
				//Datos
				$this->datos($datos);
			}
			//Funcion para la Cabecera
			function cabecera($cabecera)
			{
				$this->SetFont("Arial","B",14);
				$this->Image("logo.png",10,10,20,0,'');
				$this->SetY(13);
				$this->Cell(160,7,'Grupo de Rescate y Excursionismo Fenix',0,0,"C");
				$this->Ln(20);
				$this->Cell(160,7,'Reporte de Asistencia por Fecha',0,0,"C");
				$this->Ln(10);
				$this->SetTextColor(255);
				foreach($cabecera as $columna){
					$this->Cell(30,7,$columna,0,0,"C",1);
				}
				$this->Ln();
			}
			//Funcion para los Datos
			function datos($datos)
			{
				$fill=0;
				$this->SetFont("Arial","",12);
				foreach($datos as $dato){
					foreach($dato as $columna){
						$this->Cell(30,7,$columna,0,0,"C",$fill);
					}
				$this->Ln();
				$fill=!$fill;
				}
				
			}
		}
$pdf=new PDF();
$pdf->AddPage();
//Títulos de las columnas
$cabecera = array('AsistenciaId','Codigo','Cedula','Apellidos','Nombres','Fecha');
//Carga de datos
$datos = $lista;
$pdf->Tabla($cabecera,$datos);
$pdf->Output();
?>

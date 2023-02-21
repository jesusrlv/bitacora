<?php
session_start();
include('prcd/qc.php');
require('prcd/fpdf/fpdf.php');

    // $id = $_REQUEST['id'];
    // $nombre = $_REQUEST['nombre'];
    // $apellidos = $_REQUEST['apellidos'];
    // $idevento = $_REQUEST['idevento'];

    // $evento = "SELECT * FROM eventos WHERE id = '$idevento'";
    // $resultadoEvento = $conn->query($evento);
    // $rowEvento = $resultadoEvento->fetch_assoc();

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    // $pdf->MultiCell(0,9, $pdf->Image('../img/logos_pej2022.png', $pdf->GetX()+5, $pdf->GetY()+3, 180) ,0,'C');

    $this->Image("img/logo_completo.png",5,0,200);
    // Arial bold 15
    $this->SetFont('Arial','B',20);
    // Movernos a la derecha
    $this->Cell(100);
    // Título
    // $this->Cell(30,10,utf8_decode('Constancia de participación'),0,0,'C');
    // Salto de línea
    $this->Ln(5);
}


// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    // $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
// $pdf->Image("../assets/brand/img/somos_fca_halcon_azul_15.png",'50','0','200','220',"PNG");
$pdf->SetFont('Courier','B',27);
$pdf->Multicell(270,5,utf8_decode('

CONSTANCIA DE PARTICIPACIÓN'),0,'C',0);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->Multicell(270,12,utf8_decode('Por medio de la presente se hace constar que el(la) C.
'),0,'C',0);
$pdf->SetFont('Arial','B',10);
$pdf->Multicell(270,12,utf8_decode(''),0,'C',0);
// $pdf->Cell(50,12,utf8_decode(''.$nombre.' '.$apellidos.''),0,1);
$pdf->Ln();
$pdf->SetFont('Arial','I',14);
$pdf->Multicell(270,9,utf8_decode('Asistió al'),0,'C',0);
$pdf->Ln();
$pdf->Multicell(270,14,utf8_decode('" "'),0,'C',0);
$pdf->Ln();
$pdf->SetFont('Arial','',14);
$pdf->Multicell(270,9,utf8_decode('Llevándose a cabo en con duración de XXX horas'),0,'C',0);
$pdf->SetFont('Arial','I',10);
$pdf->Multicell(0,9,'En la ciudad de Zacatecas, Zac., noviembre de 2022.',0,'C',0);
// $pdf->MultiCell(270,12, $pdf->Image('', $pdf->GetX()+100, $pdf->GetY()-7, 72) ,0,'C',0);
// $pdf->MultiCell(190,9, $pdf->Image('../assets/brand/img/logo.png', $pdf->GetX()+20, $pdf->GetY()+1, 150) ,0,'C',0);
//IMAGE (RUTA,X,Y,ANCHO,ALTO,EXTEN)
// $pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Multicell(270,8,utf8_decode('DIRECTOR DE LA
UNIDAD ACADÉMICA DE CONTADURÍA Y ADMINISTRACIÓN 
UAZ'),0,'C',0);

// $pdf->Output();
$modo='I';
// $nombre_archivo='constancia_evento_UACYA_'.$nombre.'_'.$apellidos.'.pdf';
$nombre_archivo='reporte_servicio_.pdf';
$pdf->Output($nombre_archivo,$modo);  

?>
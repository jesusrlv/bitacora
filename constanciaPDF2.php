<?php
ini_set('memory_limit', '1024M');
require('prcd/fpdf/fpdf.php');
include('prcd/qc.php');

$folio = $_REQUEST['folio'];
$sql = "SELECT * FROM bitacora WHERE folio = '$folio'";
$resultadoSql = $conn->query($sql);
$rowSQL = $resultadoSql->fetch_assoc();

$sql2 = "SELECT * FROM observaciones WHERE folio = '$folio'";
$resultadoSql2 = $conn->query($sql2);
$rowSQL2 = $resultadoSql2->fetch_assoc();


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo

    $this->Image('img/logo_completo.png',72,15,63);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
$pdf->Multicell(190,8,utf8_decode('

DEPARTAMENTO DE TECNOLOGÍAS DE LA INFORMACIÓN'),0,'C',0);
$pdf->SetFont('Arial','B',8);

$pdf->Multicell(190,5,utf8_decode('FORMATO DE SERVICIO, APOYO Y/O SOPORTE TÉCNICO'),0,'C',0);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(151,5,'',0,0);
$pdf->Cell(40,5,'Fecha',1,0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',8);
$pdf->Cell(151,8,'Zacatecas, Zac., a ',0,'R',0);
$pdf->Cell(40,8,$rowSQL['fecha'],1,0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->SetFillColor(93,109,126);
$pdf->Cell(100,5,'Datos del equipo',1,0,'C');
$pdf->Cell(91,5,'Folio',1,0,'C');
$pdf->Ln();
$pdf->Cell(100,18,$rowSQL['datos_pc'],1,0,'C');
$pdf->Cell(91,18,$rowSQL['folio'],1,0,'C');
$pdf->Ln();
$pdf->Cell(191,8,'MANTENIMIENTO PREVENTIVO/CORRECTIVO DE HARDWARE',1,0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',8);
$pdf->Cell(100,5,'Actividad',1,0,'C');
$pdf->Cell(91,5,'Trabajo realizado',1,0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,5,'1',1,0,'C');
$pdf->Cell(90,5,'Sopletear PC',1,0,'L');
$pdf->Cell(91,5,'',1,0,'C');
$pdf->Ln();
$pdf->Cell(10,5,'2',1,0,'C');
$pdf->SetFont('Arial','',8);
$pdf->Cell(90,5,'Sopletear fuente de poder',1,0,'L');
$pdf->Cell(91,5,'',1,0,'C');
$pdf->Ln();
$pdf->Cell(10,5,'3',1,0,'C');
$pdf->SetFont('Arial','',8);
$pdf->Cell(90,5,'Limpiar el gabinete',1,0,'L');
$pdf->Cell(91,5,'',1,0,'C');
$pdf->Ln();
$pdf->Cell(10,5,'4',1,0,'C');
$pdf->SetFont('Arial','',8);
$pdf->Cell(90,5,'Sopletear teclado y mouse',1,0,'L');
$pdf->Cell(91,5,'',1,0,'C');
$pdf->Ln();
$pdf->Cell(10,5,'5',1,0,'C');
$pdf->SetFont('Arial','',8);
$pdf->Cell(90,5,'Limpiar teclado y mouse',1,0,'L');
$pdf->Cell(91,5,'',1,0,'C');
$pdf->Ln();
$pdf->Cell(10,5,'6',1,0,'C');
$pdf->SetFont('Arial','',8);
$pdf->Cell(90,5,'Limpiar pantalla y monitor',1,0,'L');
$pdf->Cell(91,5,'',1,0,'C');
$pdf->Ln();
$pdf->Cell(10,5,'7',1,0,'C');
$pdf->SetFont('Arial','',8);
$pdf->Cell(90,5,'Limpiar componentes del monitor',1,0,'L');
$pdf->Cell(91,5,'',1,0,'C');
$pdf->Ln();
$pdf->Cell(10,5,'7',1,0,'C');
$pdf->SetFont('Arial','',8);
$pdf->Cell(90,5,'Otra',1,0,'L');
$pdf->Cell(91,5,'',1,0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(191,8,'MANTENIMIENTO PREVENTIVO/CORRECTIVO DE SOFTWARE',1,0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','',8);
$pdf->Cell(10,5,'1',1,0,'C');
$pdf->Cell(90,5,utf8_decode('Activación Office'),1,0,'L');
$pdf->Cell(91,5,'',1,0,'C');
$pdf->Ln();
$pdf->Cell(10,5,'2',1,0,'C');
$pdf->SetFont('Arial','',8);
$pdf->Cell(90,5,utf8_decode('Activación de Sistema Operativo'),1,0,'L');
$pdf->Cell(91,5,'',1,0,'C');
$pdf->Ln();
$pdf->Cell(10,5,'3',1,0,'C');
$pdf->SetFont('Arial','',8);
$pdf->Cell(90,5,utf8_decode('Activación de Software'),1,0,'L');
$pdf->Cell(91,5,'',1,0,'C');
$pdf->Ln();
$pdf->Cell(10,5,'4',1,0,'C');
$pdf->SetFont('Arial','',8);
$pdf->Cell(90,5,'Formateo completo',1,0,'L');
$pdf->Cell(91,5,'',1,0,'C');
$pdf->Ln();
$pdf->Cell(10,5,'5',1,0,'C');
$pdf->SetFont('Arial','',8);
$pdf->Cell(90,5,'Limpieza de virus',1,0,'L');
$pdf->Cell(91,5,'',1,0,'C');
$pdf->Ln();
$pdf->Cell(10,5,'6',1,0,'C');
$pdf->SetFont('Arial','',8);
$pdf->Cell(90,5,'Otra',1,0,'L');
$pdf->Cell(91,5,'',1,0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',8);
$pdf->Cell(191,27,'OBSERVACIONES:',1,0,'L');
$pdf->Ln();
$pdf->SetFont('Arial','B',8);
$pdf->Cell(100,5,'Realiza mantenimiento',1,0,'C');
$pdf->Cell(91,5,'Recibe de conformidad',1,0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',8);
$pdf->Cell(100,30,'',1,0,'C');
$pdf->Cell(91,30,'',1,0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','B',8);
$pdf->Cell(100,5,'Nombre y firma',1,0,'C');
$pdf->Cell(91,5,'Nombre y firma',1,0,'C');
$modo="I";
$nombre_archivo="reporte_servicio.pdf";
$pdf->Output($nombre_archivo,$modo);  

?>

<!-- 

    require('html_table.php');
    $nombre='canorioss';
    $htmlTable='
     
    <table width="36%" height="100%" border="1" align="right" style="border-spacing:0px; border-color:#000">
      <tr>
        <td>Nombre</td>
        <td>edad</td>
        <td align="center">domicilio</td>
      </tr>
      <tr>
        <td>'.$nombre.'</td>
        <td>26</td>
        <td align="center">Santa Ana</td>
      </tr>
    </table>
    ';
     
    $pdf = new  PDF_HTML_Table();
    $pdf->AddPage('L','A4');
    $pdf->SetFont('Arial','',12);
    $pdf->WriteHTML("$htmlTable");
    //$pdf->AddPage('L','Legal');
    $pdf->Output();
     
 -->
<?php
ini_set('memory_limit', '1024M');
require('prcd/fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    // $pdf->MultiCell(0,9, $pdf->Image("../img/logos_pej2022.png", $pdf->GetX()+5, $pdf->GetY()+3, 180) ,0,"C");

    $this->Image('img/logo_completo.png',72,15,63);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    // $this->Cell(30,10,utf8_decode('Constancia de participación'),0,0,'C');
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
// $pdf->Image('../img/fondo_pej2022.png','0','0','250','300','PNG');
// $pdf->MultiCell(190,9, $pdf->Image("../img/logos_pej2022.png", $pdf->GetX()+5, $pdf->GetY()+3, 180) ,0,"C");
$pdf->SetFont('Arial','B',10);
$pdf->Multicell(190,8,utf8_decode('

DEPARTAMENTO DE TECNOLOGÍAS DE LA INFORMACIÓN'),0,'C',0);
$pdf->SetFont('Arial','B',8);

$pdf->Multicell(190,8,utf8_decode('FORMATO DE SERVICIO, APOYO Y/O SOPORTE TÉCNICO'),0,'C',0);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(151,5,'',0,0);
$pdf->Cell(40,5,'Fecha',1,0,'C');
$pdf->Ln();
$pdf->Cell(151,8,'',0,0);
$pdf->Cell(40,8,'',1,0,'C');
$pdf->Ln();
// $pdf->Cell(50,20,'Datos',1,0);
$pdf->Cell(100,5,'Datos del equipo',1,0,'C');
$pdf->Cell(91,5,'Folio',1,0,'C');
$pdf->Ln();
$pdf->Cell(100,8,'',1,0,'C');
$pdf->Cell(91,8,'',1,0,'C');
$pdf->Ln();
$pdf->Cell(191,5,'MANTENIMIENTO PREVENTIVO/CORRECTIVO DE HARDWARE',1,0,'C');
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

// $pdf->Output();
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
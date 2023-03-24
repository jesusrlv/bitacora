<?php

include('qc.php');
$fecha1= $_POST['fecha_ini'];
$fecha2= $_POST['fecha_fin'];

/* $search = "SELECT * FROM bitacora WHERE fecha BETWEEN '$fecha1' AND '$fecha2' ORDER BY fecha ASC, hora ASC";
$resultadoSearch = $conn->query($search);
 */
$cont_hw = "SELECT * FROM bitacora WHERE hardware = 1 WHERE fecha BETWEEN '$fecha1' AND '$fecha2'" ;
$resultadoIndicadorHw = $conn->query($cont_hw);
$numRowsIndicadorHw = $resultadoIndicadorHw->num_rows;

$cont_sw = "SELECT * FROM bitacora WHERE software = 1 WHERE fecha BETWEEN '$fecha1' AND '$fecha2'";
$resultadoIndicadorSw = $conn->query($cont_sw);
$numRowsIndicadorSw = $resultadoIndicadorSw->num_rows;

$cont_o = "SELECT * FROM bitacora WHERE otros = 1 WHERE fecha BETWEEN '$fecha1' AND '$fecha2'";
$resultadoIndicadorO = $conn->query($cont_o);
$numRowsIndicadorO = $resultadoIndicadorO->num_rows;

echo json_encode(array('hardware' => $numRowsIndicadorHw,'software' => $numRowsIndicadorSw, 'otros' => $numRowsIndicadorO));


?>


<?php

include('qc.php');

$search = "SELECT * FROM bitacora ORDER BY fecha ASC, hora ASC, solucionado DESC";
$resultadoSearch = $conn->query($search);
/* $numRows = $resultadoSearch->num_rows; */
$notificaciones = 0;

while($rowSearch = $resultadoSearch->fetch_assoc()){
    $folio = $rowSearch['folio'];
    $indicador = "SELECT * FROM observaciones WHERE folio = '$folio'";
    $resultadoIndicador = $conn->query($indicador);
    $numRowsIndicador = $resultadoIndicador->num_rows;

    if($numRowsIndicador == 0){
        $notificaciones++;
    } else if ($numRowsIndicador > 0){
        $calif = 0;
        $x = 0;
        while($rowIndicador = $resultadoIndicador->fetch_assoc()){
            $indicaProm = $rowIndicador['likert'];
            $calif = $calif + $indicaProm;
        }
        $prom1 = $calif / $numRowsIndicador;
        $prom = ROUND($prom1);
        if($prom == 0){
            $notificaciones++;
        }else if($prom == 1 || $prom == 2 || $prom == 3){
            $notificaciones++;
        }
    }
}
?>

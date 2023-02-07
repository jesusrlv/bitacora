<?php

include('qc.php');

$fecha = strftime($_POST['dateSearch']);

$search = "SELECT * FROM bitacora WHERE fecha = '$fecha' ORDER BY solucionado DESC, fecha ASC, hora ASC";
$resultadoSearch = $conn->query($search);
$numRows = $resultadoSearch->num_rows;
if($numRows > 0){
    $x = 0;
    while($rowSearch = $resultadoSearch->fetch_assoc()){
        $x++;
        echo'
            <tr>
                <th>'.$x.'</th>
                <td>'.$rowSearch['folio'].'</td>
                <td>'.$rowSearch['fecha'].'</td>
                <td>'.$rowSearch['hora'].'</td>
                <td>'.$rowSearch['datos_pc'].'</td>
                <td>'.$rowSearch['datos_usr'].'</td>
                <td>Detalles</td>';
        if($rowSearch['solucionado'] == 0){
        echo'
        <td><span class="badge text-bg-danger"><i class="bi bi-x-circle-fill"></i> No Solucionado</span></td>
        ';
        }
        else{
        echo'
        <td><span class="badge text-bg-success"><i class="bi bi-check-circle-fill"></i> Solucionado</span></td>
        ';
        }
        echo'        
            </tr>
        ';
    }
}
else{
    echo'
    <script>
        alert("No hay datos");
    </script>
    ';
}


?>
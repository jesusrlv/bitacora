<?php

include('qc.php');

$fecha = ($_POST['dateSearch']);

// $search = "SELECT * FROM bitacora WHERE fecha = '$fecha'";
$search = "SELECT * FROM bitacora WHERE fecha = '$fecha' ORDER BY fecha ASC, hora ASC, solucionado DESC";
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
                <td>
                ';
                if ($rowSearch['hardware'] == 1){
                    echo'
                    <p><div class="accordion accordion-flush" id="hardware'.$rowSearch['id'].'">
                        <div class="accordion-item">
                            <h2 class="accordion-header border-bottom" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hardware'.$rowSearch['id'].'" aria-expanded="true" aria-controls="flush-collapseOne">
                                <i class="bi bi-pc-display-horizontal me-2" style="font-size: larger;"> </i> Hardware
                            </button>
                            </h2>
                                <div id="hardware'.$rowSearch['id'].'" class="accordion-collapse collapse" aria-labelledby="flush-headingOne">
                                    <div class="accordion-body">
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </p>';
                } else {
                    echo'';
                }
                if ($rowSearch['software'] == 1){
                    echo'
                    <p><div class="accordion accordion-flush" id="software'.$rowSearch['id'].'">
                        <div class="accordion-item">
                            <h2 class="accordion-header border-bottom" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#software'.$rowSearch['id'].'" aria-expanded="true" aria-controls="flush-collapseOne">
                                <i class="bi bi-windows me-2" style="font-size: larger;"> </i> Software
                            </button>
                            </h2>
                                <div id="software'.$rowSearch['id'].'" class="accordion-collapse collapse" aria-labelledby="flush-headingOne">
                                    <div class="accordion-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </p>';
                }  else {
                    echo'';
                }
                if ($rowSearch['otros'] == 1){
                    echo'
                    <p><div class="accordion accordion-flush" id="otros'.$rowSearch['id'].'">
                        <div class="accordion-item">
                            <h2 class="accordion-header border-bottom" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#otros'.$rowSearch['id'].'" aria-expanded="true" aria-controls="flush-collapseOne">
                                <i class="bi bi-file-earmark-break me-2" style="font-size: larger;"> </i> Otros
                            </button>
                            </h2>
                                <div id="otros'.$rowSearch['id'].'" class="accordion-collapse collapse" aria-labelledby="flush-headingOne">
                                    <div class="accordion-body">
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </p>';
                }  else {
                    echo'';
                }
                echo'
                </td>
                ';
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
        <td class="text-center"> <a href="#"><i class="bi bi-filetype-pdf h2"></i></a> </td>    
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
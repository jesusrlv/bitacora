<?php

include('qc.php');

$fecha = strtotime($_POST['dateSearch']);

$search = "SELECT * FROM bitacora WHERE fecha = '$fecha'";
$resultadoSearch = $conn->query($search);
$numRows = $resultadoSearch->num_rows;
if($numRows > 0){
    while($rowSearch = $resultadoSearch->fetch_assoc()){
        $x++;
        echo'
            <tr>
                <th>'.$x.'</th>
                <th>'.$rowSearch['folio'].'</th>
                <th>'.$rowSearch['fecha'].'</th>
                <th>'.$rowSearch['datos_pc'].'</th>
                <th>'.$rowSearch['datos_usr'].'</th>
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
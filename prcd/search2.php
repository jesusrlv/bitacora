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
            <tr class="table-primary text-center">
                <th>'.$x.'</th>
                <td>'.$rowSearch['folio'].'</td>
                <td>'.$rowSearch['fecha'].'</td>
                <td>'.$rowSearch['hora'].'</td>
                <td>'.$rowSearch['datos_pc'].'</td>
                <td>'.$rowSearch['datos_usr'].'</td>
                
                ';

                $folio = $rowSearch['folio'];
                $indicador = "SELECT * FROM observaciones WHERE folio = '$folio'";
                $resultadoIndicador = $conn->query($indicador);
                $numRowsIndicador = $resultadoIndicador->num_rows;
                // $rowIndicador = $resultadoIndicador->fetch_assoc();
                
                // if($rowSearch['solucionado'] == 0){
                if($numRowsIndicador == 0){
                    echo'
                    <td id="cambioStatus1">
                        <a data-bs-toggle="modal" data-bs-target="#estatus'.$rowSearch['id'].'">
                            <span class="badge text-bg-danger">
                                <i class="bi bi-x-circle-fill"></i> No Solucionado
                            </span>
                        </a>
                    
                    </td>
                    ';
                    }
                    // else if (($rowSearch['solucionado'] == 1)){
                    else if ($numRowsIndicador > 0){
                        $calif = 0;
                        $x = 0;
                        while($rowIndicador = $resultadoIndicador->fetch_assoc()){
                            $indicaProm = $rowIndicador['likert'];
                            $calif = $calif + $indicaProm;
                            $x++;
                            $prom = $calif / $x;
                        }
                        if($prom == 0){
                            echo'
                            <td>
                            <span class="badge text-bg-danger">
                                <i class="bi bi-x-circle-fill"></i> No Solucionado
                            </span>
                            </td>
                            ';
                        }
                        else if($prom == 1 || $prom == 2 || $prom == 3){
                            echo'
                            <td>
                            <span class="badge text-bg-warning text-light">
                                <i class="bi bi-x-circle-fill"></i> En proceso
                            </span>
                            </td>
                            ';
                        }
                        else if($prom == 4 || $prom == 5){
                            echo'
                            <td>
                            <span class="badge text-bg-success">
                                <i class="bi bi-check-circle-fill"></i> Solucionado
                            </span>
                            </td>
                            '
                            ;
                        }
                        echo'
                        <script>
                            console.log('.$prom.');
                            </script>
                        ';
                    }

                    echo'    
                    <td class="text-center"> <a href="constanciaPDF2.php?folio='.$folio.'" target="_blank"><i class="bi bi-filetype-pdf h2"></i></a></td>    
                    ';


                echo'
                </tr>
                <tr>
                <td colspan="8">';
                if ($rowSearch['hardware'] == 1){
                    $indicadorHD = "SELECT * FROM observaciones WHERE folio = '$folio' AND id_cat = 1";
                    $resultadoIndicadorHD = $conn->query($indicadorHD);
                    $numRowsIndicadorHD = $resultadoIndicadorHD->num_rows;
                    $xHD=0;
                    $califHD=0;
                    if($numRowsIndicadorHD > 0){
                        while($rowIndicadorHD = $resultadoIndicadorHD->fetch_assoc()){
                            $indicaPromHD = $rowIndicadorHD['likert'];
                            $califHD = $califHD + $indicaPromHD;
                            $xHD++;
                            
                        }
                        $promHD = $califHD / $xHD;
                    }
                    else{
                        $promHD = 0;
                    }
                    $hd = ROUND($promHD);
                        
                    echo'
                    <script>
                            console.log("Valor de hd: "+'.$hd.');
                            </script>
                    <div class="accordion accordion-flush" id="hardware1'.$rowSearch['id'].'">
                        <div class="accordion-item">
                            <h2 class="accordion-header border-bottom" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hardware'.$rowSearch['id'].'" aria-expanded="true" aria-controls="flush-collapseOne">
                            <div class="row w-100">
                                <div class="col-6">
                                    <i class="bi bi-pc-display-horizontal me-2" style="font-size: larger;"> </i> Hardware
                                </div>
                                <div class="col-6 text-end">
                                    <span id="contador1">';
                                    if($hd == 1){
                                        echo'0%';
                                    }
                                    else if($hd == 2){
                                        echo'25%';
                                    }
                                    else if($hd == 3){
                                        echo'50%';
                                    }
                                    else if($hd == 4){
                                        echo'75%';
                                    }
                                    else if($hd == 5){
                                        echo'100%';
                                    }
                                    echo'
                                    </span>
                                </div>
                            </div>    
                            
                            </button>
                            </h2>
                                <div id="hardware'.$rowSearch['id'].'" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#hardware1'.$rowSearch['id'].'">
                                    <div class="accordion-body">
                                        <ol type="1">';
                                        if($rowSearch['internet']==1){
                                            $indicadorHD = "SELECT * FROM observaciones WHERE folio = '$folio' AND id_cat = 1";
                                            $resultadoIndicadorHD = $conn->query($indicadorHD);
                                            $rowLikert = $resultadoIndicadorHD -> fetch_assoc();
                                            if (empty($rowLikert['likert']) || $rowLikert['likert'] == null){
                                                $seleccion = 0;
                                            }
                                            else {
                                                $seleccion = $rowLikert['likert'];
                                            }

                                            echo'
                                            
                                            <input id="numero'.$rowSearch['id'].'" value="1" hidden>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li class="ps-3">Internet</li></span>
                                                
                                                <input type="text" class="form-control" id="observaciones'.$rowSearch['id'].'1" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                ';
                                                
                                                if ($seleccion == null){
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'1" aria-label="Default select example" onchange="calificar(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',1,1,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                } else {
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'1" aria-label="Default select example" onchange="editarCalificacion(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',1,1,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                }

                                                echo '
                                                    <option class="bg-secondary bg-white" value="'.$seleccion.'" selected>';
                                                    
                                                    echo'</option>
                                                    <option class="bg-secondary bg-white" value="1">0%</option>
                                                    <option class="bg-secondary bg-white" value="2">25%</option>
                                                    <option class="bg-secondary bg-white" value="3">50%</option>
                                                    <option class="bg-secondary bg-white" value="4">75%</option>
                                                    <option class="bg-secondary bg-white" value="5">100%</option>
                                                </select>
                                                
                                            </div>
                                            
                                            ';
                                            if($seleccion == 1){
                                                echo '<p class="border border-danger p-2 text-end" id="calificacionActual1'.$rowSearch['folio'].'" style="box-shadow: -8px 0px 0px 0px ##dc3545; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #d1d1d1;" >0%</p>
                                                
                                                <input value="'.$seleccion.'" id="valores" >
                                                ';
                                                    
                                            }
                                            else if($seleccion == 2){
                                                echo '<p id="calificacionActual1'.$rowSearch['folio'].'" class="border border-danger-subtle p-2 text-end" style="box-shadow: -8px 0px 0px 0px #ffc107; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #d1d1d1;" name="valores">25%</p>

                                                <input value="'.$seleccion.'" id="valores" >
                                                ';

                                            }
                                            else if($seleccion == 3){
                                                echo '<p id="calificacionActual1'.$rowSearch['folio'].'" class="border border-warning p-2 text-end" style="box-shadow: -8px 0px 0px 0px #ffc107; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #d1d1d1;" name="valores">50%</p>

                                                <input value="'.$seleccion.'" id="valores" >
                                                ';
        
                                            }
                                            else if($seleccion == 4){
                                                echo '<p id="calificacionActual1'.$rowSearch['folio'].'" class="border border-warning-subtle p-2 text-end" style="box-shadow: -8px 0px 0px 0px #d1d1d1; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #d1d1d1;" name="valores">75%</p>

                                                <input value="'.$seleccion.'" id="valores" >
                                                ';

                                            }
                                            else if($seleccion == 5){
                                                echo '<p id="calificacionActual1'.$rowSearch['folio'].'" class="border border-success p-2 text-end" style="box-shadow: -8px 0px 0px 0px #52c660; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #52c660;" name="valores">100%</p>

                                                <input value="'.$seleccion.'" id="valores" >
                                                ';

                                            }
                                            else if ($seleccion == null) {
                                                echo '<p id="calificacionActual1'.$rowSearch['folio'].'" class="border border-success p-2 text-end" style="box-shadow: -8px 0px 0px 0px #52c660; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #52c660;">0%</p>
                                                
                                                <input value="'.$seleccion.'" id="valores" >
                                                ';
                                            }
                                        }
                                        if($rowSearch['inst_periferico']==1){
                                            
                                            $indicadorHD = "";
                                            $resultadoIndicadorHD = "";
                                            $rowLikert = "";

                                            $indicadorHD = "SELECT * FROM observaciones WHERE folio = '$folio' AND id_cat = 1 AND sub_cat = 2";
                                            $resultadoIndicadorHD = $conn->query($indicadorHD);
                                            $rowLikert = $resultadoIndicadorHD -> fetch_assoc();
                                            if (empty($rowLikert['likert']) || $rowLikert['likert'] == null){
                                                $seleccion = 0;
                                            }
                                            else {
                                                $seleccion = $rowLikert['likert'];
                                            }

                                            echo'
                                            <input id="numero'.$rowSearch['id'].'" value="2" hidden>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Periférico</li></span>
                                                
                                                <input type="text" class="form-control ms-3" id="observaciones'.$rowSearch['id'].'2" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                ';
                                                
                                                if ($seleccion == null){
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'2" aria-label="Default select example" onchange="calificar(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',1,2,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                } else {
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'2" aria-label="Default select example" onchange="editarCalificacion(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',1,2,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                }

                                                echo '
                                                    <option class="bg-secondary bg-white" value="'.$seleccion.'" selected>';
                                                    
                                                    echo'</option>
                                                    <option class="bg-secondary bg-white" value="1">0%</option>
                                                    <option class="bg-secondary bg-white" value="2">25%</option>
                                                    <option class="bg-secondary bg-white" value="3">50%</option>
                                                    <option class="bg-secondary bg-white" value="4">75%</option>
                                                    <option class="bg-secondary bg-white" value="5">100%</option>
                                                </select>
                                            </div>
                                            ';

                                            if($seleccion == 1){
                                                echo '<p class="border border-danger p-2 text-end" id="calificacionActual2'.$rowSearch['folio'].'" style="box-shadow: -8px 0px 0px 0px ##dc3545; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #d1d1d1;">0%</p>
                                                ';
                                                    
                                            }
                                            else if($seleccion == 2){
                                                echo '<p id="calificacionActual2'.$rowSearch['folio'].'" class="border border-danger-subtle p-2 text-end" style="box-shadow: -8px 0px 0px 0px #ffc107; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #d1d1d1;">25%</p>
                                                ';

                                            }
                                            else if($seleccion == 3){
                                                echo '<p id="calificacionActual2'.$rowSearch['folio'].'" class="border border-warning p-2 text-end" style="box-shadow: -8px 0px 0px 0px #ffc107; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #d1d1d1;">50%</p>
                                                ';
        
                                            }
                                            else if($seleccion == 4){
                                                echo '<p id="calificacionActual2'.$rowSearch['folio'].'" class="border border-warning-subtle p-2 text-end" style="box-shadow: -8px 0px 0px 0px #d1d1d1; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #d1d1d1;">75%</p>
                                                ';

                                            }
                                            else if($seleccion == 5){
                                                echo '<p id="calificacionActual2'.$rowSearch['folio'].'" class="border border-success p-2 text-end" style="box-shadow: -8px 0px 0px 0px #52c660; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #52c660;">100%</p>
                                                ';

                                            }
                                            else if ($seleccion == null) {
                                                echo '<p id="calificacionActual2'.$rowSearch['folio'].'" class="border border-success p-2 text-end" style="box-shadow: -8px 0px 0px 0px #52c660; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #52c660;">0%</p>';
                                            }
                                        }
                                        if($rowSearch['limp_equipo']==1){

                                            $indicadorHD = "";
                                            $resultadoIndicadorHD = "";
                                            $rowLikert = "";

                                            $indicadorHD = "SELECT * FROM observaciones WHERE folio = '$folio' AND id_cat = 1 AND sub_cat = 3";
                                            $resultadoIndicadorHD = $conn->query($indicadorHD);
                                            $rowLikert = $resultadoIndicadorHD -> fetch_assoc();
                                            if (empty($rowLikert['likert']) || $rowLikert['likert'] == null){
                                                $seleccion = 0;
                                            }
                                            else {
                                                $seleccion = $rowLikert['likert'];
                                            }

                                            echo'
                                            <input id="numero'.$rowSearch['id'].'" value="3" hidden>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Limpieza de equipo</li></span>
                                                
                                                <input type="text" class="form-control ms-3" id="observaciones'.$rowSearch['hardware'].'3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                ';
                                                
                                                if ($seleccion == null){
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'3" aria-label="Default select example" onchange="calificar(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',1,3,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                } else {
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'3" aria-label="Default select example" onchange="editarCalificacion(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',1,3,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                }

                                                echo '
                                                    <option class="bg-secondary bg-white" value="'.$seleccion.'" selected>';
                                                    
                                                    echo'</option>
                                                    <option class="bg-secondary bg-white" value="1">0%</option>
                                                    <option class="bg-secondary bg-white" value="2">25%</option>
                                                    <option class="bg-secondary bg-white" value="3">50%</option>
                                                    <option class="bg-secondary bg-white" value="4">75%</option>
                                                    <option class="bg-secondary bg-white" value="5">100%</option>
                                                </select>
                                            </div>
                                            ';
                                            if($seleccion == 1){
                                                echo '<p class="border border-danger p-2 text-end" id="calificacionActual3'.$rowSearch['folio'].'" style="box-shadow: -8px 0px 0px 0px ##dc3545; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #d1d1d1;">0%</p>
                                                ';
                                                    
                                            }
                                            else if($seleccion == 2){
                                                echo '<p id="calificacionActual3'.$rowSearch['folio'].'" class="border border-danger-subtle p-2 text-end" style="box-shadow: -8px 0px 0px 0px #ffc107; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #d1d1d1;">25%</p>
                                                ';

                                            }
                                            else if($seleccion == 3){
                                                echo '<p id="calificacionActual3'.$rowSearch['folio'].'" class="border border-warning p-2 text-end" style="box-shadow: -8px 0px 0px 0px #ffc107; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #d1d1d1;">50%</p>
                                                ';
        
                                            }
                                            else if($seleccion == 4){
                                                echo '<p id="calificacionActual3'.$rowSearch['folio'].'" class="border border-warning-subtle p-2 text-end" style="box-shadow: -8px 0px 0px 0px #d1d1d1; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #d1d1d1;">75%</p>
                                                ';

                                            }
                                            else if($seleccion == 5){
                                                echo '<p id="calificacionActual3'.$rowSearch['folio'].'" class="border border-success p-2 text-end" style="box-shadow: -8px 0px 0px 0px #52c660; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #52c660;">100%</p>
                                                ';

                                            }
                                            else if ($seleccion == null) {
                                                echo '<p id="calificacionActual3'.$rowSearch['folio'].'" class="border border-success p-2 text-end" style="box-shadow: -8px 0px 0px 0px #52c660; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #52c660;">0%</p>';
                                            }
                                        }
                                        if($rowSearch['tec_mouse']==1){
                                            
                                            $indicadorHD = "";
                                            $resultadoIndicadorHD = "";
                                            $rowLikert = "";

                                            $indicadorHD = "SELECT * FROM observaciones WHERE folio = '$folio' AND id_cat = 1 AND sub_cat = 4";
                                            $resultadoIndicadorHD = $conn->query($indicadorHD);
                                            $rowLikert = $resultadoIndicadorHD -> fetch_assoc();
                                            if (empty($rowLikert['likert']) || $rowLikert['likert'] == null){
                                                $seleccion = 0;
                                            }
                                            else {
                                                $seleccion = $rowLikert['likert'];
                                            }

                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Mouse</li></span>
                                                
                                                <input type="text" id="numero'.$rowSearch['id'].'" class="form-control ms-3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">                            
                                                ';
                                                
                                                if ($seleccion == null){
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'4" aria-label="Default select example" onchange="calificar(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',1,4,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                } else {
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'4" aria-label="Default select example" onchange="editarCalificacion(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',1,4,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                }

                                                echo '
                                                    <option class="bg-secondary bg-white" value="'.$seleccion.'" selected>';
                                                    
                                                    echo'</option>
                                                    <option class="bg-secondary bg-white" value="1">0%</option>
                                                    <option class="bg-secondary bg-white" value="2">25%</option>
                                                    <option class="bg-secondary bg-white" value="3">50%</option>
                                                    <option class="bg-secondary bg-white" value="4">75%</option>
                                                    <option class="bg-secondary bg-white" value="5">100%</option>
                                                </select>
                                            </div>
                                            ';
                                            if($seleccion == 1){
                                                echo '<p class="border border-danger p-2 text-end" id="calificacionActual4'.$rowSearch['folio'].'" style="box-shadow: -8px 0px 0px 0px ##dc3545; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #d1d1d1;">0%</p>
                                                ';
                                                    
                                            }
                                            else if($seleccion == 2){
                                                echo '<p id="calificacionActual4'.$rowSearch['folio'].'" class="border border-danger-subtle p-2 text-end" style="box-shadow: -8px 0px 0px 0px #ffc107; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #d1d1d1;">25%</p>
                                                ';

                                            }
                                            else if($seleccion == 3){
                                                echo '<p id="calificacionActual4'.$rowSearch['folio'].'" class="border border-warning p-2 text-end" style="box-shadow: -8px 0px 0px 0px #ffc107; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #d1d1d1;">50%</p>
                                                ';
        
                                            }
                                            else if($seleccion == 4){
                                                echo '<p id="calificacionActual4'.$rowSearch['folio'].'" class="border border-warning-subtle p-2 text-end" style="box-shadow: -8px 0px 0px 0px #d1d1d1; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #d1d1d1;">75%</p>
                                                ';

                                            }
                                            else if($seleccion == 5){
                                                echo '<p id="calificacionActual4'.$rowSearch['folio'].'" class="border border-success p-2 text-end" style="box-shadow: -8px 0px 0px 0px #52c660; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid ##52c660;">100%</p>
                                                ';
                                            }
                                            else if ($seleccion == null) {
                                                echo '<p id="calificacionActual4'.$rowSearch['folio'].'" class="border border-success p-2 text-end" style="box-shadow: -8px 0px 0px 0px #52c660; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #52c660;">0%</p>';
                                            }
                                        }
                                        if($rowSearch['falla_monitor']==1){
                                            
                                            $indicadorHD = "";
                                            $resultadoIndicadorHD = "";
                                            $rowLikert = "";

                                            $indicadorHD = "SELECT * FROM observaciones WHERE folio = '$folio' AND id_cat = 1 AND sub_cat = 5";
                                            $resultadoIndicadorHD = $conn->query($indicadorHD);
                                            $rowLikert = $resultadoIndicadorHD -> fetch_assoc();
                                            if (empty($rowLikert['likert']) || $rowLikert['likert'] == null){
                                                $seleccion = 0;
                                            }
                                            else {
                                                $seleccion = $rowLikert['likert'];
                                            }

                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Falla en el monitor</li></span>
                                                
                                                <input type="text" id="numero'.$rowSearch['id'].'" class="form-control ms-3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                ';
                                                
                                                if ($seleccion == null){
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'5" aria-label="Default select example" onchange="calificar(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',1,5,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                } else {
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'5" aria-label="Default select example" onchange="editarCalificacion(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',1,5,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                }

                                                echo '
                                                    <option class="bg-secondary bg-white" value="'.$seleccion.'" selected>';
                                                    
                                                    echo'</option>
                                                    <option class="bg-secondary bg-white" value="1">0%</option>
                                                    <option class="bg-secondary bg-white" value="2">25%</option>
                                                    <option class="bg-secondary bg-white" value="3">50%</option>
                                                    <option class="bg-secondary bg-white" value="4">75%</option>
                                                    <option class="bg-secondary bg-white" value="5">100%</option>
                                                </select>
                                            </div>
                                            ';
                                            if($seleccion == 1){
                                                echo '<p class="border border-danger p-2 text-end" id="calificacionActual5'.$rowSearch['folio'].'" style="box-shadow: -8px 0px 0px 0px ##dc3545; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #d1d1d1;">0%</p>
                                                ';
                                                    
                                            }
                                            else if($seleccion == 2){
                                                echo '<p id="calificacionActual5'.$rowSearch['folio'].'" class="border border-danger-subtle p-2 text-end" style="box-shadow: -8px 0px 0px 0px #ffc107; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #d1d1d1;">25%</p>
                                                ';

                                            }
                                            else if($seleccion == 3){
                                                echo '<p id="calificacionActual5'.$rowSearch['folio'].'" class="border border-warning p-2 text-end" style="box-shadow: -8px 0px 0px 0px #ffc107; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #d1d1d1;">50%</p>
                                                ';
        
                                            }
                                            else if($seleccion == 4){
                                                echo '<p id="calificacionActual5'.$rowSearch['folio'].'" class="border border-warning-subtle p-2 text-end" style="box-shadow: -8px 0px 0px 0px #d1d1d1; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #d1d1d1;">75%</p>
                                                ';

                                            }
                                            else if($seleccion == 5){
                                                echo '<p id="calificacionActual5'.$rowSearch['folio'].'" class="border border-success p-2 text-end" style="box-shadow: -8px 0px 0px 0px #52c660; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid ##52c660;">100%</p>
                                                ';
                                            }
                                            else if ($seleccion == null) {
                                                echo '<p id="calificacionActual5'.$rowSearch['folio'].'" class="border border-success p-2 text-end" style="box-shadow: -8px 0px 0px 0px #52c660; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #52c660;">0%</p>';
                                            }
                                        }
                                        if($rowSearch['otra1']==1){
                                            
                                            $indicadorHD = "";
                                            $resultadoIndicadorHD = "";
                                            $rowLikert = "";

                                            $indicadorHD = "SELECT * FROM observaciones WHERE folio = '$folio' AND id_cat = 1 AND sub_cat = 6";
                                            $resultadoIndicadorHD = $conn->query($indicadorHD);
                                            $rowLikert = $resultadoIndicadorHD -> fetch_assoc();
                                            if (empty($rowLikert['likert']) || $rowLikert['likert'] == null){
                                                $seleccion = 0;
                                            }
                                            else {
                                                $seleccion = $rowLikert['likert'];
                                            }

                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Otro: '.$rowSearch['otra1_desc'].'</li></span>
                                                
                                                <input type="text" id="numero'.$rowSearch['id'].'" class="form-control ms-3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                ';
                                                
                                                if ($seleccion == null){
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'6" aria-label="Default select example" onchange="calificar(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',1,6,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                } else {
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'6" aria-label="Default select example" onchange="editarCalificacion(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',1,6,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                }

                                                echo '
                                                    <option class="bg-secondary bg-white" value="'.$seleccion.'" selected>';
                                                    
                                                    echo'</option>
                                                    <option class="bg-secondary bg-white" value="1">0%</option>
                                                    <option class="bg-secondary bg-white" value="2">25%</option>
                                                    <option class="bg-secondary bg-white" value="3">50%</option>
                                                    <option class="bg-secondary bg-white" value="4">75%</option>
                                                    <option class="bg-secondary bg-white" value="5">100%</option>
                                                </select>
                                            </div>
                                            ';
                                            if($seleccion == 1){
                                                echo '<p class="border border-danger p-2 text-end" id="calificacionActual6'.$rowSearch['folio'].'" style="box-shadow: -8px 0px 0px 0px ##dc3545; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #d1d1d1;">0%</p>
                                                ';
                                                    
                                            }
                                            else if($seleccion == 2){
                                                echo '<p id="calificacionActual6'.$rowSearch['folio'].'" class="border border-danger-subtle p-2 text-end" style="box-shadow: -8px 0px 0px 0px #ffc107; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #d1d1d1;">25%</p>
                                                ';

                                            }
                                            else if($seleccion == 3){
                                                echo '<p id="calificacionActual6'.$rowSearch['folio'].'" class="border border-warning p-2 text-end" style="box-shadow: -8px 0px 0px 0px #ffc107; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #d1d1d1;">50%</p>
                                                ';
        
                                            }
                                            else if($seleccion == 4){
                                                echo '<p id="calificacionActual6'.$rowSearch['folio'].'" class="border border-warning-subtle p-2 text-end" style="box-shadow: -8px 0px 0px 0px #d1d1d1; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid #d1d1d1;">75%</p>
                                                ';

                                            }
                                            else if($seleccion == 5){
                                                echo '<p id="calificacionActual6'.$rowSearch['folio'].'" class="border border-success p-2 text-end" style="box-shadow: -8px 0px 0px 0px ##52c660; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid ##52c660;">100%</p>
                                                ';
                                            }
                                            else if ($seleccion == null) {
                                                echo '<p id="calificacionActual6'.$rowSearch['folio'].'" class="border border-success p-2 text-end" style="box-shadow: -8px 0px 0px 0px ##52c660; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border: 1px solid ##52c660;">0%</p>';
                                            }
                                        }

                                        echo'
                                        </ol>
                                        
                                    </div>
                                    </div>
                                </div>
                            </div>
                    ';
                } else {
                    echo'';
                }
                if ($rowSearch['software'] == 1){
                    echo'
                    <div class="accordion accordion-flush" id="software1'.$rowSearch['id'].'">
                        <div class="accordion-item">
                            <h2 class="accordion-header border-bottom" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#software'.$rowSearch['id'].'" aria-expanded="true" aria-controls="flush-collapseOne">
                            <div class="row w-100">
                                <div class="col-6">
                                    <i class="bi bi-windows me-2" style="font-size: larger;"> </i> Software
                                </div>
                                <div class="col-6 text-end">
                                    <span>100%</span>
                                </div>
                            </div>
                            </button>
                            </h2>
                                <div id="software'.$rowSearch['id'].'" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#software1'.$rowSearch['id'].'">
                                    <div class="accordion-body">
                                    <ol type="1">';
                                        if($rowSearch['act_office']==1){
                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Activación de office</li></span>
                                                
                                                <input type="text" id="numero'.$rowSearch['id'].'" class="form-control ms-3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                ';
                                                
                                                if ($seleccion == null){
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'1" aria-label="Default select example" onchange="calificar(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',2,1,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                } else {
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'1" aria-label="Default select example" onchange="editarCalificacion(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',2,1,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                }

                                                echo '
                                                    <option class="bg-secondary bg-white" value="'.$seleccion.'" selected>';
                                                    
                                                    echo'</option>
                                                    <option class="bg-secondary bg-white" value="1">0%</option>
                                                    <option class="bg-secondary bg-white" value="2">25%</option>
                                                    <option class="bg-secondary bg-white" value="3">50%</option>
                                                    <option class="bg-secondary bg-white" value="4">75%</option>
                                                    <option class="bg-secondary bg-white" value="5">100%</option>
                                                </select>
                                            </div>
                                            ';
                                        }
                                        if($rowSearch['activar_so']==1){
                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Activación de sistema operativo</li></span>
                                                
                                                <input type="text" id="observaciones'.$rowSearch['software'].'8" class="form-control ms-3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                ';
                                                
                                                if ($seleccion == null){
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'1" aria-label="Default select example" onchange="calificar(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',2,1,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                } else {
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'1" aria-label="Default select example" onchange="editarCalificacion(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',2,1,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                }

                                                echo '
                                                    <option class="bg-secondary bg-white" value="'.$seleccion.'" selected>';
                                                    
                                                    echo'</option>
                                                    <option class="bg-secondary bg-white" value="1">0%</option>
                                                    <option class="bg-secondary bg-white" value="2">25%</option>
                                                    <option class="bg-secondary bg-white" value="3">50%</option>
                                                    <option class="bg-secondary bg-white" value="4">75%</option>
                                                    <option class="bg-secondary bg-white" value="5">100%</option>
                                                </select>
                                            </div>
                                            ';
                                        }
                                        if($rowSearch['actualizar_sw']==1){
                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Actualizar software: '.$rowSearch['actualizar_sw2'].'</li></span>
                                                
                                                <input type="text" id="observaciones'.$rowSearch['software'].'9" class="form-control ms-3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                ';
                                                
                                                if ($seleccion == null){
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'1" aria-label="Default select example" onchange="calificar(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',2,1,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                } else {
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'1" aria-label="Default select example" onchange="editarCalificacion(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',2,1,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                }

                                                echo '
                                                    <option class="bg-secondary bg-white" value="'.$seleccion.'" selected>';
                                                    
                                                    echo'</option>
                                                    <option class="bg-secondary bg-white" value="1">0%</option>
                                                    <option class="bg-secondary bg-white" value="2">25%</option>
                                                    <option class="bg-secondary bg-white" value="3">50%</option>
                                                    <option class="bg-secondary bg-white" value="4">75%</option>
                                                    <option class="bg-secondary bg-white" value="5">100%</option>
                                                </select>
                                            </div>
                                            ';
                                        }
                                        if($rowSearch['formateo_completo']==1){
                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Formateo completo</li></span>
                                                
                                                <input type="text" class="form-control ms-3" id="observaciones'.$rowSearch['software'].'10" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                ';
                                                
                                                if ($seleccion == null){
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'1" aria-label="Default select example" onchange="calificar(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',2,1,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                } else {
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'1" aria-label="Default select example" onchange="editarCalificacion(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',2,1,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                }

                                                echo '
                                                    <option class="bg-secondary bg-white" value="'.$seleccion.'" selected>';
                                                    
                                                    echo'</option>
                                                    <option class="bg-secondary bg-white" value="1">0%</option>
                                                    <option class="bg-secondary bg-white" value="2">25%</option>
                                                    <option class="bg-secondary bg-white" value="3">50%</option>
                                                    <option class="bg-secondary bg-white" value="4">75%</option>
                                                    <option class="bg-secondary bg-white" value="5">100%</option>
                                                </select>
                                            </div>
                                            ';
                                        }
                                        if($rowSearch['limpieza_virus']==1){
                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Limpieza de virus</li></span>
                                                
                                                <input type="text" class="form-control ms-3" id="observaciones'.$rowSearch['software'].'11" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                ';
                                                
                                                if ($seleccion == null){
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'1" aria-label="Default select example" onchange="calificar(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',2,1,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                } else {
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'1" aria-label="Default select example" onchange="editarCalificacion(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',2,1,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                }

                                                echo '
                                                    <option class="bg-secondary bg-white" value="'.$seleccion.'" selected>';
                                                    
                                                    echo'</option>
                                                    <option class="bg-secondary bg-white" value="1">0%</option>
                                                    <option class="bg-secondary bg-white" value="2">25%</option>
                                                    <option class="bg-secondary bg-white" value="3">50%</option>
                                                    <option class="bg-secondary bg-white" value="4">75%</option>
                                                    <option class="bg-secondary bg-white" value="5">100%</option>
                                                </select>
                                            </div>
                                            ';
                                        }
                                        if($rowSearch['instalar_sw']==1){
                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Instalar software</li></span>
                                                
                                                <input type="text" id="observaciones'.$rowSearch['software'].'12" class="form-control ms-3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                ';
                                                
                                                if ($seleccion == null){
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'1" aria-label="Default select example" onchange="calificar(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',2,1,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                } else {
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'1" aria-label="Default select example" onchange="editarCalificacion(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',2,1,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                }

                                                echo '
                                                    <option class="bg-secondary bg-white" value="'.$seleccion.'" selected>';
                                                    
                                                    echo'</option>
                                                    <option class="bg-secondary bg-white" value="1">0%</option>
                                                    <option class="bg-secondary bg-white" value="2">25%</option>
                                                    <option class="bg-secondary bg-white" value="3">50%</option>
                                                    <option class="bg-secondary bg-white" value="4">75%</option>
                                                    <option class="bg-secondary bg-white" value="5">100%</option>
                                                </select>
                                            </div>
                                            ';
                                        }
                                        if($rowSearch['otra_sw']==1){
                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Otro: '.$rowSearch['otra_sw_desc'].'</li></span>
                                                
                                                <input type="text" id="observaciones'.$rowSearch['software'].'13" class="form-control ms-3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                ';
                                                
                                                if ($seleccion == null){
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'1" aria-label="Default select example" onchange="calificar(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',2,1,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                } else {
                                                    echo '
                                                    <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert'.$rowSearch['id'].'1" aria-label="Default select example" onchange="editarCalificacion(
                                                        ';
                                                        ?>
                                                        '<?php echo $rowSearch['folio']?>',2,1,<?php echo $rowSearch['id']?>
                                                        <?php echo ')">
                                                    ';
                                                }

                                                echo '
                                                    <option class="bg-secondary bg-white" value="'.$seleccion.'" selected>';
                                                    
                                                    echo'</option>
                                                    <option class="bg-secondary bg-white" value="1">0%</option>
                                                    <option class="bg-secondary bg-white" value="2">25%</option>
                                                    <option class="bg-secondary bg-white" value="3">50%</option>
                                                    <option class="bg-secondary bg-white" value="4">75%</option>
                                                    <option class="bg-secondary bg-white" value="5">100%</option>
                                                </select>
                                            </div>
                                            ';
                                        }
                                        echo'
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    ';
                }  else {
                    echo'';
                }
                if ($rowSearch['otros'] == 1){
                    echo'
                    <div class="accordion accordion-flush" id="otros1'.$rowSearch['id'].'">
                        <div class="accordion-item">
                            <h2 class="accordion-header border-bottom" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#otros'.$rowSearch['id'].'" aria-expanded="true" aria-controls="flush-collapseOne">
                                <div class="row w-100">
                                    <div class="col-6">
                                        <i class="bi bi-file-earmark-break me-2" style="font-size: larger;"> </i> Otros
                                    </div>
                                    <div class="col-6 text-end">
                                        <span>100%</span>
                                    </div>
                                </div>
                            </button>
                            </h2>
                                <div id="otros'.$rowSearch['id'].'" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"  data-bs-parent="#otros1'.$rowSearch['id'].'">
                                    <div class="accordion-body">
                                    
                                    <ol type="1">';
                                        if($rowSearch['escanear']==1){
                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Escanear</li></span>
                                                
                                                <input type="text" id="observaciones'.$rowSearch['otros'].'14" class="form-control ms-3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                
                                                <select id="escanear_s'.$rowSearch['id'].'" class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" aria-label="Default select example">
                                                    <option class="bg-secondary bg-white" selected>Seleccione...</option>
                                                    <option class="bg-secondary bg-white" value="1">0%</option>
                                                    <option class="bg-secondary bg-white" value="2">25%</option>
                                                    <option class="bg-secondary bg-white" value="3">50%</option>
                                                    <option class="bg-secondary bg-white" value="4">75%</option>
                                                    <option class="bg-secondary bg-white" value="5">100%</option>
                                                </select>
                                            </div>
                                            ';
                                        }
                                        if($rowSearch['printcolor']==1){
                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Impresión a color</li></span>
                                                
                                                <input type="text" id="observaciones'.$rowSearch['otros'].'15" class="form-control ms-3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                
                                                <select id="printcolor_s'.$rowSearch['id'].'" class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" aria-label="Default select example">
                                                    <option class="bg-secondary bg-white" selected>Seleccione...</option>
                                                    <option class="bg-secondary bg-white" value="1">0%</option>
                                                    <option class="bg-secondary bg-white" value="2">25%</option>
                                                    <option class="bg-secondary bg-white" value="3">50%</option>
                                                    <option class="bg-secondary bg-white" value="4">75%</option>
                                                    <option class="bg-secondary bg-white" value="5">100%</option>
                                                </select>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <p class="bg-light p-2" style="box-shadow: -8px 0px 0px 0px #d1d1d1; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border: 1px solid #d1d1d1;"># paginas: '.$rowSearch['numpagdoc'].'</p>
                                                    <p class="bg-light p-2" style="box-shadow: -8px 0px 0px 0px #d1d1d1; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border: 1px solid #d1d1d1;"># impresiones: '.$rowSearch['noimpresiones'].'</p>
                                                </div>
                                                <div class="col-sm-1  mt-4">
                                                    <a href="docs/'.$rowSearch['archivoimprimir'].'" target="_blank"><i class="bi bi-journal-arrow-down h2"></i></a>
                                                </div>
                                            </div>
                                            
                                            ';
                                        }
                                        if($rowSearch['rw_cd']==1){
                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Grabar información en CDs o DVDs</li></span>

                                                <input type="text" id="observaciones'.$rowSearch['otros'].'16" class="form-control ms-3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                
                                                <select id="rwcd_s'.$rowSearch['id'].'" class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" aria-label="Default select example">
                                                    <option class="bg-secondary bg-white" selected>Seleccione...</option>
                                                    <option class="bg-secondary bg-white" value="1">0%</option>
                                                    <option class="bg-secondary bg-white" value="2">25%</option>
                                                    <option class="bg-secondary bg-white" value="3">50%</option>
                                                    <option class="bg-secondary bg-white" value="4">75%</option>
                                                    <option class="bg-secondary bg-white" value="5">100%</option>
                                                </select>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <p class="bg-light p-2" style="box-shadow: -8px 0px 0px 0px #d1d1d1; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border: 1px solid #d1d1d1;"># copias: '.$rowSearch['nocopias'].'</p>
                                                </div>
                                                <div class="col-sm-1 mt-1">
                                                    <a href="docs/'.$rowSearch['archivocd'].'" target="_blank"><i class="bi bi-journal-arrow-down h2"></i></a>
                                                </div>
                                            </div>
                                            ';
                                        }
                                        if($rowSearch['web']==1){
                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Publicar información en el sitio web oficial</li></span>
                                                
                                                <input type="text" id="observaciones'.$rowSearch['otros'].'17"  class="form-control ms-3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                
                                                <select id="web_s'.$rowSearch['id'].'" class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" aria-label="Default select example">
                                                    <option class="bg-secondary bg-white" selected>Seleccione...</option>
                                                    <option class="bg-secondary bg-white" value="1">0%</option>
                                                    <option class="bg-secondary bg-white" value="2">25%</option>
                                                    <option class="bg-secondary bg-white" value="3">50%</option>
                                                    <option class="bg-secondary bg-white" value="4">75%</option>
                                                    <option class="bg-secondary bg-white" value="5">100%</option>
                                                </select>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <p class="bg-light p-2" style="box-shadow: -8px 0px 0px 0px #d1d1d1; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border: 1px solid #d1d1d1;">Archivo:</p>
                                                </div>
                                                <div class="col-sm-1 mt-1">
                                                    <a href="docs/'.$rowSearch['archivoweb'].'" target="_blank"><i class="bi bi-journal-arrow-down h2"></i></a>
                                                </div>
                                            </div>
                                            ';
                                        }
                                        
                                        if($rowSearch['otra2']==1){
                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Otro: '.$rowSearch['otra2_desc'].'</li></span>
                                                
                                                <input type="text" id="observaciones'.$rowSearch['otros'].'18" class="form-control ms-3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                
                                                <select id="otra2_s'.$rowSearch['id'].'" class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" aria-label="Default select example">
                                                    <option class="bg-secondary bg-white" selected>Seleccione...</option>
                                                    <option class="bg-secondary bg-white" value="1">0%</option>
                                                    <option class="bg-secondary bg-white" value="2">25%</option>
                                                    <option class="bg-secondary bg-white" value="3">50%</option>
                                                    <option class="bg-secondary bg-white" value="4">75%</option>
                                                    <option class="bg-secondary bg-white" value="5">100%</option>
                                                </select>
                                            </div>
                                            ';
                                        }
                                        echo'
                                        </ol>
                                    </div>
                                </div>
                            </div>
                    ';
                }  else {
                    echo'';
                }
                echo'
                </td>
                ';
        echo'
        </tr>
        
        <tr class="mt-2 mb-2"> 
            <td colspan="8" class="table-warning"><strong class="me-2">Observaciones: </strong>
            ';
                if (empty($rowSearch['observaciones_usr'])){
                    echo ' Sin datos
                    ';
                } else {
                    echo $rowSearch['observaciones_usr'];
                    
                }
            echo '
            </td>
        </tr>
        <tr class="mt-2">
        <td>
        </td>
        </tr>
        
        ';
    
    }

}
else{
    echo'
    <script>
        alert("No hay datos");
    </>
    ';
}


?>
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
                        else if($prom > 0 && $prom < 5){
                            echo'
                            <td>
                            <span class="badge text-bg-warning text-light">
                                <i class="bi bi-x-circle-fill"></i> En proceso
                            </span>
                            </td>
                            ';
                        }
                        else if($prom == 5){
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
                            $promHD = $califHD / $xHD;
                        }
                    }
                    else{
                        $promHD = 0;
                    }
                        $hd = ROUND($promHD);
                        
                    echo'
                    <script>
                            console.log('.$hd.');
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
                                    <span>';
                                    if($hd = 1){
                                        echo'0%';
                                    }
                                    else if($hd = 2){
                                        echo'25%';
                                    }
                                    else if($hd = 3){
                                        echo'50%';
                                    }
                                    else if($hd = 4){
                                        echo'75%';
                                    }
                                    else if($hd = 5){
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
                
                                            echo'
                                            <input id="numero'.$rowSearch['id'].'" value="1" hidden>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li class="ps-3">Internet</li></span>
                                                
                                                <input type="text" class="form-control" id="observaciones'.$rowSearch['id'].'1" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">';
                                                ?>
                                                <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="likert<?php echo $rowSearch['id']?>1" aria-label="Default select example" onchange="calificar('<?php echo $rowSearch['folio'] ?>',1,1, <?php echo $rowSearch['id'] ?>)">
                                                <?php
                                                echo '
                                                    <option class="bg-secondary bg-white" value="'.$hd.'" selected>';
                                                    if($hd = 1){
                                                        echo'0%';
                                                    }
                                                    else if($hd = 2){
                                                        echo'25%';
                                                    }
                                                    else if($hd = 3){
                                                        echo'50%';
                                                    }
                                                    else if($hd = 4){
                                                        echo'75%';
                                                    }
                                                    else if($hd = 5){
                                                        echo'100%';
                                                    }
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
                                        if($rowSearch['inst_periferico']==1){
                                            echo'
                                            <input id="numero'.$rowSearch['id'].'" value="2" hidden>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Periférico</li></span>
                                                
                                                <input type="text" class="form-control ms-3" id="observaciones'.$rowSearch['id'].'2" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                
                                                <select id="periferico_s'.$rowSearch['id'].'" class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" aria-label="Default select example">
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
                                        if($rowSearch['limp_equipo']==1){
                                            echo'
                                            <input id="numero'.$rowSearch['id'].'" value="3" hidden>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Limpieza de equipo</li></span>
                                                
                                                <input type="text" class="form-control ms-3" id="observaciones'.$rowSearch['hardware'].'3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                
                                                <select class="form-select bg-secondary bg-opacity-25" id="limpequipo_s'.$rowSearch['id'].'" style="max-width:100px;" aria-label="Default select example">
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
                                        if($rowSearch['tec_mouse']==1){
                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Mouse</li></span>
                                                
                                                <input type="text" id="numero'.$rowSearch['id'].'" class="form-control ms-3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">                            
                                                
                                                <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="tecmouse_s'.$rowSearch['id'].'" aria-label="Default select example">
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
                                        if($rowSearch['falla_monitor']==1){
                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Falla en el monitor</li></span>
                                                
                                                <input type="text" id="numero'.$rowSearch['id'].'" class="form-control ms-3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                
                                                <select class="form-select bg-secondary bg-opacity-25" id="fallamonitor_s'.$rowSearch['id'].'" style="max-width:100px;" aria-label="Default select example">
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
                                        if($rowSearch['otra1']==1){
                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Otro: '.$rowSearch['otra1_desc'].'</li></span>
                                                
                                                <input type="text" id="numero'.$rowSearch['id'].'" class="form-control ms-3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                
                                                <select class="form-select bg-secondary bg-opacity-25" id="otrohw_s'.$rowSearch['id'].'" style="max-width:100px;" aria-label="Default select example">
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
                                                
                                                <select class="form-select bg-secondary bg-opacity-25"  style="max-width:100px;" id="actoffice_s'.$rowSearch['id'].'" aria-label="Default select example">
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
                                        if($rowSearch['activar_so']==1){
                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Activación de sistema operativo</li></span>
                                                
                                                <input type="text" id="observaciones'.$rowSearch['software'].'8" class="form-control ms-3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                
                                                <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="activarso_s'.$rowSearch['id'].'" aria-label="Default select example">
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
                                        if($rowSearch['actualizar_sw']==1){
                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Actualizar software: '.$rowSearch['actualizar_sw2'].'</li></span>
                                                
                                                <input type="text" id="observaciones'.$rowSearch['software'].'9" class="form-control ms-3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                
                                                <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="actualizarsw_s'.$rowSearch['id'].'" aria-label="Default select example">
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
                                        if($rowSearch['formateo_completo']==1){
                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Formateo completo</li></span>
                                                
                                                <input type="text" class="form-control ms-3" id="observaciones'.$rowSearch['software'].'10" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                
                                                <select class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" id="format_s'.$rowSearch['id'].'" aria-label="Default select example">
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
                                        if($rowSearch['limpieza_virus']==1){
                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Limpieza de virus</li></span>
                                                
                                                <input type="text" class="form-control ms-3" id="observaciones'.$rowSearch['software'].'11" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                
                                                <select class="form-select bg-secondary bg-opacity-25" id="virus_s'.$rowSearch['id'].'" style="max-width:100px;" aria-label="Default select example">
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
                                        if($rowSearch['instalar_sw']==1){
                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Instalar software</li></span>
                                                
                                                <input type="text" id="observaciones'.$rowSearch['software'].'12" class="form-control ms-3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                
                                                <select id="installarsw_s'.$rowSearch['id'].'" class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" aria-label="Default select example">
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
                                        if($rowSearch['otra_sw']==1){
                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Otro: '.$rowSearch['otra_sw_desc'].'</li></span>
                                                
                                                <input type="text" id="observaciones'.$rowSearch['software'].'13" class="form-control ms-3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                
                                                <select id="otrasw_s'.$rowSearch['id'].'" class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" aria-label="Default select example">
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
                                                    <samp class="input-group-text mt-2"># paginas: '.$rowSearch['numpagdoc'].'</samp>
                                                    <samp class="input-group-text mb-3"># impresiones: '.$rowSearch['noimpresiones'].'</samp>
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
                                                    <samp class="input-group-text mt-2 mb-3"># copias: '.$rowSearch['nocopias'].'</samp>
                                                </div>
                                                <div class="col-sm-1 mt-2">
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
                                                </div>
                                                <div class="col-sm-1 mt-2">
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
    </script>
    ';
}


?>
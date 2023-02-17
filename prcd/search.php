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
                
                if($rowSearch['solucionado'] == 0){
                    echo'
                    <td id="cambioStatus1"><a>
                            <span class="badge text-bg-danger">
                                <i class="bi bi-x-circle-fill"></i> No Solucionado
                            </span>
                        </a> 
                    </td>
                    ';
                    
                    }
                    elseif (($rowSearch['solucionado'] == 1)){
                        echo'
                        <td><a><span class="badge text-bg-success"><i class="bi bi-check-circle-fill"></i> Solucionado</span></a>
                        </td>
                        ';
                    }

                    else {
                        echo'
                        <td id="cambioStatus3"><a>
                            <span class="badge text-bg-warning text-light">
                                <i class="bi bi-x-circle-fill"></i> En proceso
                            </span>
                        </a>
                    </td>
                    ';
                    }

                    echo'    
                    <td class="text-center"> <a href="#"><i class="bi bi-filetype-pdf h2"></i></a></td>    
                    ';


                echo'
                </tr>
                <tr>
                <td colspan="8">';
                if ($rowSearch['hardware'] == 1){
                    echo'
                    <div class="accordion accordion-flush" id="hardware1'.$rowSearch['id'].'">
                        <div class="accordion-item">
                            <h2 class="accordion-header border-bottom" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hardware'.$rowSearch['id'].'" aria-expanded="true" aria-controls="flush-collapseOne">
                                <i class="bi bi-pc-display-horizontal me-2" style="font-size: larger;"> </i> Hardware
                            </button>
                            </h2>
                                <div id="hardware'.$rowSearch['id'].'" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#hardware1'.$rowSearch['id'].'">
                                    <div class="accordion-body">
                                        <ol type="1">';
                                        if($rowSearch['internet']==1){
                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li class="ps-3">Internet</li></span>
                                                
                                                <input type="text" class="form-control" id="observaciones'.$rowSearch['hardware'].'1" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                
                                                <select id="internet_s'.$rowSearch['id'].'" class="form-select bg-secondary bg-opacity-25" style="max-width:100px;" aria-label="Default select example">
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
                                        if($rowSearch['inst_periferico']==1){
                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Periférico</li></span>
                                                
                                                <input type="text" class="form-control ms-3" id="observaciones'.$rowSearch['hardware'].'2" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                
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
                                                
                                                <input type="text" id="observaciones'.$rowSearch['hardware'].'4" class="form-control ms-3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">                            
                                                
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
                                                
                                                <input type="text" id="observaciones'.$rowSearch['hardware'].'5" class="form-control ms-3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                
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
                                                
                                                <input type="text" id="observaciones'.$rowSearch['hardware'].'6" class="form-control ms-3" placeholder="Observaciones DTI" aria-label="Username" aria-describedby="basic-addon1">
                                                
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
                                <i class="bi bi-windows me-2" style="font-size: larger;"> </i> Software
                            </button>
                            </h2>
                                <div id="software'.$rowSearch['id'].'" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#software1'.$rowSearch['id'].'">
                                    <div class="accordion-body">
                                    <ol type="1">';
                                        if($rowSearch['act_office']==1){
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
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Otro: <strong>'.$rowSearch['otra_sw_desc'].'</strong></li></span>
                                                
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
                                <i class="bi bi-file-earmark-break me-2" style="font-size: larger;"> </i> Otros
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
                                            </div><li>Publicar información en el sitio web oficial</li>
                                            ';
                                        }
                                        
                                        if($rowSearch['otra2']==1){
                                            echo'
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-white border-white" id="basic-addon1"><li>Otro: <strong>'.$rowSearch['otra2_desc'].'</strong></li></span>
                                                
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
<?php

include('qc.php');

$fecha1 = ($_POST['dateSearch1']);
$fecha2 = ($_POST['dateSearch2']);

// $search = "SELECT * FROM bitacora WHERE fecha = '$fecha'";
$search = "SELECT * FROM bitacora WHERE fecha BETWEEN '$fecha1' AND '$fecha2' ORDER BY fecha ASC, hora ASC, solucionado DESC";
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
                    <td id="cambioStatus1">
                        <a>
                            <span class="badge text-bg-danger">
                                <i class="bi bi-x-circle-fill"></i> No Solucionado
                            </span>
                        </a>
                        
                    </td>
                    ';
                    
                    }
                    else if ($rowSearch['solucionado'] == 1){
                    echo'
                    <td><a><span class="badge text-bg-success"><i class="bi bi-check-circle-fill"></i> Solucionado</span></a></td>
                    ';
                    }

                    else {
                        echo'
                        <td><a><span class="badge text-bg-warning text-light"><i class="bi bi-check-circle-fill "></i> En proceso</span></a></td>
                        ';
                    }

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
                                            <li>Internet</li>
                                            ';
                                        }
                                        if($rowSearch['inst_periferico']==1){
                                            echo'
                                            <li>Perif??rico</li>
                                            ';
                                        }
                                        if($rowSearch['limp_equipo']==1){
                                            echo'
                                            <li>Limpieza de equipo</li>
                                            ';
                                        }
                                        if($rowSearch['tec_mouse']==1){
                                            echo'
                                            <li>Mouse</li>
                                            ';
                                        }
                                        if($rowSearch['falla_monitor']==1){
                                            echo'
                                            <li>Falla en el monitor</li>
                                            ';
                                        }
                                        if($rowSearch['otra1']==1){
                                            echo'
                                            <li>Otro:</li>
                                            <ol type="a">
                                                <li>'.$rowSearch['otra1_desc'].'</li>
                                            </ol>
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
                                            <li>Activaci??n de office</li>
                                            ';
                                        }
                                        if($rowSearch['activar_so']==1){
                                            echo'
                                            <li>Activaci??n de sistema operativo</li>
                                            ';
                                        }
                                        if($rowSearch['actualizar_sw']==1){
                                            echo'
                                            <li>Actualizar software</li>
                                            <ol type="a">
                                                <li>'.$rowSearch['actualizar_sw2'].'</li>
                                            </ol>
                                            ';
                                        }
                                        if($rowSearch['formateo_completo']==1){
                                            echo'
                                            <li>Formateo completo</li>
                                            ';
                                        }
                                        if($rowSearch['limpieza_virus']==1){
                                            echo'
                                            <li>Limpieza de virus</li>
                                            ';
                                        }
                                        if($rowSearch['instalar_sw']==1){
                                            echo'
                                            <li>Instalar software</li>
                                            ';
                                        }
                                        if($rowSearch['otra_sw']==1){
                                            echo'
                                            <li>Otro:</li>
                                            <ol type="a">
                                                <li>'.$rowSearch['otra_sw_desc'].'</li>
                                            </ol>
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
                                            <li>Escanear</li>
                                            ';
                                        }
                                        if($rowSearch['printcolor']==1){
                                            echo'
                                            <li>Impresi??n a color</li>
                                            ';
                                        }
                                        if($rowSearch['rw_cd']==1){
                                            echo'
                                            <li>Grabar informaci??n en CDs o DVDs</li>
                                            ';
                                        }
                                        if($rowSearch['web']==1){
                                            echo'
                                            <li>Publicar informaci??n en el sitio web oficial</li>
                                            ';
                                        }
                                        
                                        if($rowSearch['otra2']==1){
                                            echo'
                                            <li>Otro:</li>
                                            <ol type="a">
                                                <li>'.$rowSearch['otra2_desc'].'</li>
                                            </ol>
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
            <td colspan="8" class="table-secondary"><strong class="me-2">Observaciones: </strong>
            ';
                if (empty($rowSearch['observaciones_dti'])){
                    echo ' Sin datos
                    ';
                } else {
                    echo $rowSearch['observaciones_dti'];
                    
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
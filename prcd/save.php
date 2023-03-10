<?php

include('qc.php');

    date_default_timezone_set('America/Mexico_City');
    setlocale(LC_TIME, 'es_MX.UTF-8');
    // $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
    $fecha_sistema = strftime("%Y-%m-%d");
    $fecha_hora = strftime("%H:%M:%S");

    // $consultaDate = "SELECT * FROM bitacora WHERE fecha = '$fecha_sistema' DESC LIMIT 1";
    $consultaDate = "SELECT * FROM bitacora WHERE fecha = '$fecha_sistema' ORDER BY id DESC LIMIT 1";
    $resutaldoDate = $conn->query($consultaDate);
    $filasDate = $resutaldoDate->num_rows;
    $rowDate = $resutaldoDate->fetch_assoc();

    if($filasDate == 0){
        $consecutivo = 0;
        $num_asignado = $consecutivo + 1;
    }
    else if($filasDate > 0){
        
        $consecutivo = $rowDate['consecutivo_dia'];
        $num_asignado = $consecutivo + 1;
    }
    
    

    function generarCodigo($longitud) {
    $key = '';
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
    $max = strlen($pattern)-1;
    for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
    return $key;
    }
    //genera un código de 9 caracteres de longitud.
$codigo = generarCodigo(9);
$folio = $codigo;
$datos_usr = $_POST['datos_usr'];
$datos_pc = $_POST['datos_pc'];

$internet = $_POST['internet'];
$inst_periferico = $_POST['inst_periferico'];
$limp_equipo = $_POST['limp_equipo'];
$tec_mouse = $_POST['tec_mouse'];
$falla_monitor = $_POST['falla_monitor'];
$otra1 = $_POST['checkOtra'];
$otra1_desc = $_POST['otra']; /* termina Hardware */
$act_office = $_POST['act_office'];
$activar_so = $_POST['activar_so'];
$actualizar_sw = $_POST['checkOtra4'];
$actualizar_sw2 = $_POST['otra4'];
$formateo_completo = $_POST['formateo_completo'];
$limpieza_virus = $_POST['limpieza_virus'];
$instalar_sw = $_POST['instalar_sw'];
$otra_sw = $_POST['checkOtra2'];
$otra_sw_desc = $_POST['otra2'];/* Termina Software */
$escanear = $_POST['escanear'];
$printColor = $_POST['printColor'];
$numpagdoc = $_POST['numpagdoc'];
$noimpresiones = $_POST['noimpresiones'];
$archivoimprimir = $_POST['archivoimprimir'];
$rw_cd = $_POST['rw_cd'];
$nocopias = $_POST['nocopias'];
$archivocd = $_POST['archivocd'];
$web = $_POST['web'];
$archivoweb = $_POST['archivoweb'];
$otra2 = $_POST['checkOtra3'];
$otra2_desc = $_POST['otra3'];/* termina Otros */
$observaciones = $_POST['observaciones'];
$solucionado = 0;
$realizo_mantenimiento = 'I.C. Ana Elisa Barba Pinedo';

$hardware = $_POST['hardware'];
$software = $_POST['software'];
$otrosap = $_POST['otrosap'];

$queryBitacora = "INSERT INTO bitacora(
    folio,
    fecha,
    hora,
    datos_pc,
    datos_usr,
    internet,
    inst_periferico,
    limp_equipo,
    tec_mouse,
    falla_monitor,
    otra1,
    otra1_desc,
    act_office,
    activar_so,
    actualizar_sw,
    actualizar_sw2,
    formateo_completo,
    limpieza_virus,
    instalar_sw,
    otra_sw,
    otra_sw_desc,
    escanear,
    printcolor,
    numpagdoc,
    noimpresiones,
    archivoimprimir,
    rw_cd,
    nocopias,
    archivocd,
    web,
    archivoweb,
    otra2,
    otra2_desc,
    observaciones_usr,
    realizo_mantenimiento,
    solucionado,
    hardware,
    software,
    otros,
    consecutivo_dia)
    VALUES(
        '$folio',
        '$fecha_sistema',
        '$fecha_hora',
        '$datos_pc',
        '$datos_usr',
        '$internet',
        '$inst_periferico',
        '$limp_equipo',
        '$tec_mouse',
        '$falla_monitor',
        '$otra1',
        '$otra1_desc',
        '$act_office',
        '$activar_so',
        '$actualizar_sw',
        '$actualizar_sw2',
        '$formateo_completo',
        '$limpieza_virus',
        '$instalar_sw',
        '$otra_sw',
        '$otra_sw_desc',
        '$escanear',
        '$printColor',
        '$numpagdoc',
        '$noimpresiones',
        '$archivoimprimir',
        '$rw_cd',
        '$nocopias',
        '$archivocd',
        '$web',
        '$archivoweb',
        '$otra2',
        '$otra2_desc',
        '$observaciones',
        '$realizo_mantenimiento',
        '$solucionado',
        '$hardware',
        '$software',
        '$otrosap',
        '$num_asignado'
        )
        ";

$resultadoBitacora = $conn->query($queryBitacora);

if($resultadoBitacora){

    // for ($i = 1; $i <= 2; $i++) {
    //     $data[] = 
    // }
    echo json_encode(array('success' => 1,'variable' => $num_asignado, 'folio' => $folio, 'printColor' => $printColor, 'rw_cd' => $rw_cd, 'web' => $web));
    
    // echo json_encode($num_asignado);
    // echo json_encode(array('variable'=> $num_asignado));
    // echo 'Registrado';
}
else{
    $error = $conn->error;
    echo json_encode(array('success' => 0,'error'=> $error));

    // echo 'No Registrado';
    // echo 'No se registró ningún cambio';
    
}
// }
// else{
//     echo json_encode(array('success' => 0));
// }

?>
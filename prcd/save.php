<?php

include('qc.php');

    date_default_timezone_set('America/Mexico_City');
    setlocale(LC_TIME, 'es_MX.UTF-8');
    $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");

    function generarCodigo($longitud) {
    $key = '';
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
    $max = strlen($pattern)-1;
    for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
    return $key;
    }
    //genera un código de 9 caracteres de longitud.
$folio = generarCodigo(9);

$datos_usr = $_POST['datos_usr'];
$datos_pc = $_POST['datos_pc'];

$internet = $_POST['internet'];
$inst_periferico = $_POST['inst_periferico'];
$limp_equipo = $_POST['limp_equipo'];
$tec_mouse = $_POST['tec_mouse'];
$falla_monitor = $_POST['falla_monitor'];
$otra1 = $_POST['otra1'];
$otra1_desc = $_POST['otra1_desc'];
$act_office = $_POST['act_office'];
$activar_so = $_POST['activar_so'];
$actualizar_sw = $_POST['checkOtra4'];
$actualizar_sw2 = $_POST['otra4'];
$formateo_completo = $_POST['formateo_completo'];
$limpieza_virus = $_POST['limpieza_virus'];
$instalar_sw = $_POST['instalar_sw'];
$otra_sw = $_POST['checkOtra2'];
$otra_sw_desc = $_POST['otra2'];
$escanear = $_POST['escanear'];
$printColor = $_POST['printColor'];
$rw_cd = $_POST['rw_cd'];
$web = $_POST['web'];
$otra2 = $_POST['checkOtra3'];
$otra2_desc = $_POST['otra3'];
$observaciones = $_POST['observaciones'];
$solucionado = 0;

$queryBitacora = "INSERT INTO bitacora(
    folio,
    datos_usr,
    datos_pc,
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
    printColor,
    rw_cd,
    web,
    otra2,
    otra2_desc,
    observaciones,
    solucionado)
    VALUES(
        '$folio',
        '$datos_usr',
        '$datos_pc',
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
        '$rw_cd',
        '$web',
        '$otra2',
        '$otra2_desc',
        '$observaciones',
        '$solucionado'
        ";
$resultadoBitacora = $conn->query($queryBitacora);

if($resultadoBitacora){
    echo json_encode(array('success' => 1));

//     echo "<script>
//     Swal.fire({
//         icon: 'success',
//         imageUrl: '../img/InclusionLogo.png',
//         imageHeight: 200,
//         imageAlt: 'INCLUSIÓN',
//         title: 'Solicitud agendada',
//         text: 'Se dará servicio técnico a la brevedad',
//         confirmButtonColor: '#3085d6',
//         footer: 'INCLUSIÓN'
//     }).then(function(){window.location='../index.html';});</script>";
}
else{
    echo json_encode(array('success' => 0));
    // echo 'No se registró ningún cambio';
    // printf("Errormessage: %s\n", $conn->error);
}


?>
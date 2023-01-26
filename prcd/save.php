<html>
<meta charset="utf-8">
    <header>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </header>
<body>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400&display=swap');
    body{
        font-family: 'Montserrat', sans-serif;
    }
</style>

<?php
// Motrar todos los errores de PHP
error_reporting(-1);

// No mostrar los errores de PHP
error_reporting(0);

// Motrar todos los errores de PHP
error_reporting(E_ALL);

// Motrar todos los errores de PHP
ini_set('error_reporting', E_ALL);

include('qc.php');




    date_default_timezone_set('America/Mexico_City');
    setlocale(LC_TIME, 'es_MX.UTF-8');
    $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");

$folio = $_POST['folio'];
$datos_usr = $_POST['datos_usr'];
$datos_pc = $_POST['datos_pc'];
$sop_comp = $_POST['internet'];
$inst_periferico = $_POST['inst_periferico'];
$limp_equipo = $_POST['limp_equipo'];
$tec_mouse = $_POST['tec_mouse'];
$falla_monitor = $_POST['falla_monitor'];
$limp_pantalla = $_POST['limp_pantalla'];
$otra1 = $_POST['otra1'];
$otra1_desc = $_POST['otra1_desc'];
$act_office = $_POST['act_office'];
$activar_so = $_POST['activar_so'];
$actualizar_sw = $_POST['actualizar_sw'];
$actualizar_sw2 = $_POST['actualizar_sw2'];
$formateo_completo = $_POST['formateo_completo'];
$limpieza_virus = $_POST['limpieza_virus'];
$instalar_sw = $_POST['instalar_sw'];
$otra_sw = $_POST['otra_sw'];
$otra_sw_desc = $_POST['otra_sw_desc'];
$escanear = $_POST['escanear'];
$printColor = $_POST['printColor'];
$rw_cd = $_POST['rw_cd'];
$web = $_POST['web'];
$otra2 = $_POST['otra2'];
$otra2_desc = $_POST['otra2_desc'];
$observaciones = $_POST['observaciones'];
$solucionado = 0;

$queryBitacora = "INSERT INTO bitacora(
    folio,
    datos_usr,
    datos_pc,
    sop_comp,
    inst_periferico,
    limp_equipo,
    tec_mouse,
    falla_monitor,
    limp_pantalla,
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
    solucionado,
    ) VALUES(
        '$datos_usr',
        '$datos_pc',
        '$sop_comp',
        '$inst_periferico',
        '$limp_equipo',
        '$tec_mouse',
        '$falla_monitor',
        '$limp_pantalla',
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
        '$solucionado'";
$resultadoBitacora = $conn->query($queryBitacora);

if($resultadoBitacora){

    echo "<script>
    Swal.fire({
        icon: 'success',
        imageUrl: '../img/InclusionLogo.png',
        imageHeight: 200,
        imageAlt: 'INCLUSIÓN',
        title: 'Solicitud agendada',
        text: 'Se dará servicio técnico a la brevedad',
        confirmButtonColor: '#3085d6',
        footer: 'INCLUSIÓN'
    }).then(function(){window.location='../index.html';});</script>";
}
else{
    echo 'No se registró ningún cambio';
    printf("Errormessage: %s\n", $conn->error);
}


?>

</body>
</html>
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

$ticket = $_POST['ticket'];
$datos_usr = $_POST['datos_usr'];
$datos_pc = $_POST['datos_pc'];
$sop_comp = $_POST['sop_comp'];
$sop_fp = $_POST['sop_fp'];
$limp_gab = $_POST['limp_gab'];
$sop_tec_mouse = $_POST['sop_tec_mouse'];
$limp_tec_mouse = $_POST['limp_tec_mouse'];
$limp_pantalla = $_POST['limp_pantalla'];
$limp_comp_monitor = $_POST['limp_comp_monitor'];
$otra1 = $_POST['otra1'];
$otra2 = $_POST['otra2'];
$act_office = $_POST['act_office'];
$act_so = $_POST['act_so'];
$actualizar_software1 = $_POST['actualizar_software1'];
$actualizar_software2 = $_POST['actualizar_software2'];
$formateo_completo = $_POST['formateo_completo'];
$limpieza_virus = $_POST['limpieza_virus'];
$otra3 = $_POST['otra3'];
$otra4 = $_POST['otra4'];
$observaciones = $_POST['observaciones'];
$realizo_serv_tec = $_POST['realizo_serv_tec'];
$quien_solicita = $_POST['quien_solicita'];
$solucionado = 0;

$queryBitacora = "INSERT INTO bitacora(
    fecha,
    datos_equipo,
    sopletear_pc,
    sopletear_fpoder,
    limpiar_gab,
    sopletear_tec_mouse,
    limpiar_teclado_mouse,
    limpiar_pantalla,
    limpiar_comp_monitor,
    otra,
    otra_descripcion,
    activacion_office,
    activar_so,
    activar_software,
    activar_software2,
    formateo_completo,
    limpieza_virus,
    otra3,
    otra4,
    observaciones,
    realizo_mantenimiento,
    solicita,
    solucionado
    ) VALUES(
        '$fecha_sistema',
        '$datos_pc',
        '$sop_comp',
        '$sop_fp',
        '$limp_gab',
        '$sop_tec_mouse',
        '$limp_tec_mouse',
        '$limp_pantalla',
        '$limp_comp_monitor',
        '$otra1',
        '$otra2',
        '$act_office',
        '$act_so',
        '$actualizar_software1',
        '$actualizar_software2',
        '$formateo_completo',
        '$limpieza_virus',
        '$otra3',
        '$otra4',
        '$observaciones',
        '$realizo_serv_tec',
        '$quien_solicita',
        '$solucionado')";
$resultadoBitacora = $conn->query($queryBitacora);

if($resultadoBitacora){

    echo "<script type=\"text/javascript\">
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
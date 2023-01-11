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
include('qc.php');

    date_default_timezone_set('America/Mexico_City');
    setlocale(LC_TIME, 'es_MX.UTF-8');
    $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");


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
$observaciones = $_POST['observaciones'];
$realizo_serv_tec = $_POST['realizo_serv_tec'];
$quien_solicita = $_POST['quien_solicita'];
$solucionado = 0;

$queryBitacora = "INSERT INTO bitacora(fecha,datos_equipo,sopletear_pc,sopletear_fpoder,limpiar_gab,sopletear_tec_mouse,limpiar_pantalla,limpiar_comp_monitor,activar_so,formateo_completo,limpieza_virus,otra,otra_descripcion,observaciones,realizo_mantenimiento,solicita,solucionado) VALUES('$fecha_sistema','$datos_pc','$sop_comp','$sop_fp','$limp_gab','$sop_tec_mouse','$limp_tec_mouse','$limp_pantalla','$limp_comp_monitor','$otra1','$otra2','$observaciones','$realizo_serv_tec','$quien_solicita','$solucionado')";
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
}

?>

</body>
</html>
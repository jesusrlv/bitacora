<?php
include('qc.php');
date_default_timezone_set('America/Mexico_City');
                setlocale(LC_TIME, 'es_MX.UTF-8');
$fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
/* $id = $_POST['id']; */
$observaciones = $_POST['observaciones'];
$likert = $_POST['likert'];
$folio = $_POST['folio'];
$categoria = $_POST['categoria'];
$subcategoria = $_POST['subcategoria'];

$calificar = "UPDATE observaciones SET likert='$likert' WHERE folio = '$folio' AND sub_cat = '$subcategoria'";
/* $calificar = "INSERT INTO observaciones(
    folio,
    id_cat,
    sub_cat,
    observaciones_dti,
    likert,
    fecha) 
VALUES(
    '$folio',
    '$categoria',
    '$subcategoria',
    '$observaciones',
    '$likert',
    '$fecha_sistema')
"; */
$resultadoCalificar = $conn->query($calificar);

?>
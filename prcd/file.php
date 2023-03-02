<?php    
    
    include('qc.php');

    date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
    
    // $id=$_SESSION['id'];
    $folio = $_POST['folio'];
    $num = $_POST['num'];
    $variableUpdate = $_POST['variableUpdate'];
    // $tipo_doc = 1;
    $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
    $link= 'archivo_'.$folio.'_'.$num;
    // $validacion = 1;

$fileName = $_FILES["file"]["name"]; // The file name
$fileTmpLoc = $_FILES["file"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file"]["type"]; // The type of file it is
$fileSize = $_FILES["file"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file"]["error"]; // 0 for false... and 1 for true
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}


$archivo_ext=$_FILES['file']['name'];
$extension = pathinfo($archivo_ext, PATHINFO_EXTENSION);

    if(move_uploaded_file($_FILES["file"]["tmp_name"],"../docs/". $link .'.'.$extension)){
    echo "$fileName carga completa";
    
    $ruta = $link .'.'.$extension;
    
    // $sqlInsert= "INSERT INTO documentos (documento,id_ext,link,fecha) 
    // VALUES('$doc','$idUsr','$ruta','$fecha_sistema')";
    // $resultado= $conn->query($sqlInsert);

    $query = "UPDATE bitacora SET `$variableUpdate` = '$ruta' WHERE folio = '$folio'";
    $resultado = $conn->query($query);
    
    
} else {
    echo "move_uploaded_file function failed";
}
    
?>
<?php
session_start();
require('qc.php');
if (isset($_POST['usr']) && isset($_POST['pwd'])) {
    
    $user = $_POST['usr'];
    $pwd = $_POST['pwd'];
    $sql = "SELECT * FROM usr WHERE usr = '$user' AND pwd ='$pwd'";
    $resultado_sql = $conn->query($sql);
    $filas = $resultado_sql->num_rows;
    if($filas == 1){
        $row_sql=mysqli_fetch_array($resultado_sql);
            $_SESSION['usr'] = $user;
            echo json_encode(array('success' => 1));
        }

        else{
            session_abort();
            echo json_encode(array('success' => 0));
            
        }

} else {
    session_abort();
    echo json_encode(array('success' => 0));
    
}
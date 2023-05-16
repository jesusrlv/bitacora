<?php
session_start();
require('qc.php');
/* if (isset($_POST['usr']) && isset($_POST['pwd'])) { */
    
    $usr = $_POST['usr'];
    $pwd = $_POST['pwd'];
    $sql = "SELECT * FROM usr WHERE usr = '$usr' AND pwd ='$pwd'";
    $resultado_sql = $conn->query($sql);
    $filas = $resultado_sql->num_rows;
    if($filas == 1){
        $_SESSION['usr'] = $usr;
        $_SESSION['pwd'] = $pwd;
        $row_sql=mysqli_fetch_array($resultado_sql);
        $error = $conn->error;
        echo json_encode(array('success' => 1,'error'=>$error,'usr'=>$usr,'pwd'=>$pwd));
/*             echo json_encode(array('success' => 1)); */
        }

        else{
            session_abort();
            $error = $conn->error;
            echo json_encode(array('success' => 0,'error'=>$error));            
        }

/* } else {
    session_abort();
    $error = $conn->error;
    echo json_encode(array('success' => 0,'error'=>$error));
    
} */
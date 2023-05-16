<?php

    //$servername="10.110.34.105";
    //$database="c7bitacora"; //solo se quitó para conexión remota
    //$username="c7abarbap";
    //$password="bqxqBWsWMK_93";

    $servername="localhost";
    $database="bitacora"; //solo se quitó para conexión remota
    $username="root";
    $password="";

    $conn= new mysqli ($servername,$username,$password,$database); //solo se quitó para conexión remota
    $conn->set_charset("utf8");

    ?>
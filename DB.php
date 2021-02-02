<?php

    
    $servername = "127.0.0.1:3306";
    $username = "root";
    $password = "hi5h*li5ht!0";


    $conn = new mysqli($servername, $username, $password);
    $dbName = "sample";
    mysqli_select_db($conn, $dbName) or die('DB selectionn failed');
    
    if($conn->connect_error){
        die("connection failed: " + $conn->connect_error);
              
    }

?>

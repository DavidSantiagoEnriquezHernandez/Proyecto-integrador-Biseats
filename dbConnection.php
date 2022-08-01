<?php
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbDatabase = "biseats";

    $connectionToDB = new mysqli($dbServer, $dbUser, $dbPassword, $dbDatabase);
        
    if($connectionToDB -> connect_errno){
        die("FAILURE: ".mysqli_connect_errno());
    }
?>
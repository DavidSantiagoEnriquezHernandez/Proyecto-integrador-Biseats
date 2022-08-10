<?php
    $dbServer = "localhost";
    $dbUser = "id19390427_root";
    $dbPassword = "L_dryH5AmKk|uv=E";
    $dbDatabase = "id19390427_biseats";

    $connectionToDB = new mysqli($dbServer, $dbUser, $dbPassword, $dbDatabase);
        
    if($connectionToDB -> connect_errno){
        die("FAILURE: ".mysqli_connect_errno());
    }
?>

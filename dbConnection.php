<?php
    $dbServer = "ec2-44-208-88-195.compute-1.amazonaws.com";
    $dbUser = "rjbjhwldpbvsmo"; 
    $dbPassword = "91e40778ef95a78bd56b55fc94704f429b9612a6da2bd0a6d6e0c604e8cb3f2d";
    $dbDatabase = "d2ugbigss1fa5k";
    $port = "5432";

    $connectionToDB = new mysqli($dbServer, $dbUser, $dbPassword, $dbDatabase, $port);
        
    if($connectionToDB -> connect_errno){
        die("FAILURE: ".mysqli_connect_errno());
    }
?>

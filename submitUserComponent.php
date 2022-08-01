<?php
    include 'dbConnection.php';
    session_start();

    $accountUsername = $_POST['updateUsername'];
    $accountPassword = $_POST['updatePassword'];
    $accountPhone = $_POST['updatePhone'];
    $idUserForUpdate = $_SESSION['identificateUser'];

    $queryForUpdateUser = mysqli_query($connectionToDB, "UPDATE users 
    SET username = '".$accountUsername."',
    password = '".$accountPassword."',
    telephone = '".$accountPhone."'
    WHERE idUser = '".$idUserForUpdate."';
    ");

    if (mysqli_affected_rows($connectionToDB)>=1){
        $successfulUpdateMessage = "Your information has been updated correctly :D.";
        $_SESSION['accountDataUpdated'] = $successfulUpdateMessage;
        header('Location: user.php'); 
    }
?>
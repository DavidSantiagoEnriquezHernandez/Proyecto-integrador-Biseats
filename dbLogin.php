<?php
    include 'dbConnection.php';

    $username = filter_input(INPUT_POST, 'txtFldUsername');
    $password = filter_input(INPUT_POST, 'txtFldPassword');

    $query = mysqli_query($connectionToDB, "SELECT * FROM users WHERE username = '".$username."' and password = '".$password."'");
    $queryTwo = mysqli_query($connectionToDB,"SELECT idUser FROM users WHERE username = '".$username."' and password = '".$password."'");

    $identificator = mysqli_fetch_row($queryTwo);

    if (mysqli_num_rows($query)==1){
        session_start();
        $_SESSION['identificateUser'] = $identificator[0];
        header('Location: main.php');
    }
    else if (mysqli_num_rows($query)==0){
        mysqli_close($connectionToDB);
        session_start();
        $loginErrorMessage = "Please verify your username or password, if they are correct, please contact the administrator.";
        $_SESSION['loginError'] = $loginErrorMessage;
        header('Location: index.php');
    }
?>

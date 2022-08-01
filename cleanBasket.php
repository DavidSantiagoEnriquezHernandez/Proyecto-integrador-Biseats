<?php
    session_start();
    unset($_SESSION['itemData']);
    header('Location: basket.php');
?>
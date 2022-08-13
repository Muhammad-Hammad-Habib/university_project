<?php
    session_start();
    session_unset();
    session_destroy();
    if(!isset($_SESSION['User_id'])){
        header("Location: ../../../login.php");
    }
?>
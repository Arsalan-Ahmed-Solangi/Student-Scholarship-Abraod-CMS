<?php 

    session_start();
    if(!isset($_SESSION['admin'])){
        $_SESSION['error'] = "Your session is expired Login Again!";
        header('location:login.php');
        die;
    }

?>
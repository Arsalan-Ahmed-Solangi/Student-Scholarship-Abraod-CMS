<?php 
    session_start();
    if(!isset($_SESSION['student'])){
        header("index.php");
        die;
    }

?>
<?php 


    session_start();
    session_destroy();
    headers("location:index.php");
    die;

?>
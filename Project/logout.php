<?php 

    session_start();
    session_destroy();
    $_SESSION['success'] = "You are loggedOut Successfully!";
    header("location:index.php");
    die;

?>
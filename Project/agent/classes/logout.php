
    <?php

        session_start();
        unset($_SESSION['admin']);
        $_SESSION['success'] = "You are logged out successfully!";
        header("location:../login.php");
        die;
    
    ?>
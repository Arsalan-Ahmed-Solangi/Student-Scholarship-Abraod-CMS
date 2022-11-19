
    <?php

        session_start();
        unset($_SESSION['agent']);
        $_SESSION['success'] = "You are logged out successfully!";
        header("location:../login.php");
        die;
    
    ?>
<?php 

    require("database/database.php");
    $db = new Database();
    session_start();
    if(isset($_POST['login'])){
        extract($_POST);

        $query  = "SELECT * FROM `students` WHERE `email`='$email' AND `password`='$password'";
        $result = $db->executeQuery($query);
        if($result->num_rows > 0 ){
            $_SESSION['student']  = $result->fetch_array();
            $_SESSION['success'] = "You're Logged In!";
            header("location:index.php");
            die;
        }else{
           
                $_SESSION['error'] = "Something Went  Wrong";
                header("location:login.php");
                die;
            
        }
      
    }

?>
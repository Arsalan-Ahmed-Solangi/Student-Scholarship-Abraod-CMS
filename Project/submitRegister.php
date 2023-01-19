<?php 

    require("database/database.php");
    $db = new Database();
    session_start();
    if(isset($_POST['register'])){
        extract($_POST);

        $query  = "SELECT * FROM `students` WHERE `email`='$email'";
        $result = $db->executeQuery($query);
        if($result->num_rows > 0 ){
            $_SESSION['error'] = "Email Addres Already Exists";
            header("location:register.php");
            die;
        }else{
            $query = "INSERT INTO `students` (`name`,`email`,`password`) VALUES ('".$name."','".$email."','".$password."')";
            $result = $db->executeQuery($query);
            if($result){
                $_SESSION['success'] = "Account has been registered!!";
                header("location:login.php");
                die;
            }else{
                $_SESSION['error'] = "Something Went  Wrong";
                header("location:register.php");
                die;
            }
        }
      
    }

?>
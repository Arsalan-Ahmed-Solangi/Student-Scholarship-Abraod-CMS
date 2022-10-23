<?php 

//***Session*******//
session_start();

//**Start of Database Connectivity*******//
require_once("../../database/database.php");
$db = new Database();
//**End of Database Connectivity******//


if(isset($_REQUEST['addAdmin'])){
    
    extract($_REQUEST);
    $error = "/add_admin";

    if(!empty($name) && !empty($email)){
       
        $query = "SELECT * FROM admins WHERE email='$email'";
        $result = $db->executeQuery($query);
        if($result->num_rows){
            $_SESSION['error']  = "Email is already taken!";  ;
            header("location:../".$error);
            die; 
        }else{
            $query = "INSERT INTO admins (`name`,`email`,`password`) VALUES ('$name','$email','$password')";
            $result = $db->executeQuery($query);
            if($result){
                $_SESSION['success']  = "Site Admin Added Successfully!";  ;
                header("location:../view_admins");
                die; 
            }else{
                $_SESSION['error']  = "Error Try Again!";  ;
                header("location:../".$error);
                die;
            }
        }
       
    }else{
        $_SESSION['error']  = "All fields are required!";  ;
        header("location:../".$error);
        die; 
    }

}else{
    $_SESSION['error']  = "Error Try Again!";  ;
    header("location:../".$error);
    die;

}



?>
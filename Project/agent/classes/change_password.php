<?php 

    //***Session*******//
    session_start();

    //**Start of Database Connectivity*******//
    require_once("../../database/database.php");
    $db = new Database();
    //**End of Database Connectivity******//


    if(isset($_REQUEST['change_password'])){
        
        extract($_REQUEST);
        $password =  $_SESSION['agent']['password'];

        if($old_password == $password ){

            if($new_password == $confirm_password){ 
                $id = $_SESSION['agent']['agent_id'];
                echo $query = "UPDATE agents SET password='$new_password' WHERE agent_id=$id";
                $result = $db->executeQuery($query);
           
                if($result){
                    $_SESSION['agent']['password'] = $new_password;
                    $_SESSION['success']  = "Your account password changed successfully!";  ;
                    header("location:../change_password.php");
                    die; 
                }else{
                    $_SESSION['error']  = "Something went wrong!";  ;
                    header("location:../change_password.php");
                    die;  
                }

            }else{
                $_SESSION['error']  = "Confirm Password Not Matched!";  ;
                header("location:../change_password.php");
                die; 
            }

        }else{
            $_SESSION['error']  = "Old Password not matched!";  ;
            header("location:../change_password.php");
            die; 
        }

    }else{
        $_SESSION['error']  = "Error Try Again!";  ;
        header("location:../change_password.php");
        die;

    }



?>
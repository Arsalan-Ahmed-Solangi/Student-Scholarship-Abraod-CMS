<?php 

    //***Session*******//
    session_start();

    //**Start of Database Connectivity*******//
    require_once("../../database/database.php");
    $db = new Database();
    //**End of Database Connectivity******//


    if(isset($_REQUEST['updateAdmin'])){
        
        extract($_REQUEST);
         $error = "edit_admin?id=".$id;
  

        if(!empty($name) && !empty($email)){
           
            $query = "SELECT * FROM admins WHERE email='$email' AND admin_id <> '$id'";
            $result = $db->executeQuery($query);
            if($result->num_rows){
                $_SESSION['error']  = "Email is already taken!";  ;
                header("location:../".$error);
                die; 
            }else{
                $query = "UPDATE admins SET name='$name',email='$email' WHERE admin_id='$id'";
                $result = $db->executeQuery($query);
                if($result){
                    $_SESSION['success']  = "Admin Detials Updated Successfully!";  ;
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
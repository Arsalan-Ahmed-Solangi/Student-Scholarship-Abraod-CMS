<?php 

    //***Session*******//
    session_start();

    //**Start of Database Connectivity*******//
    require_once("../../database/database.php");
    $db = new Database();
    //**End of Database Connectivity******//


    if(isset($_REQUEST['profile'])){
        
        extract($_REQUEST);

        if(!empty($name) && !empty($email)){
           
            if($email != $_SESSION['admin'][2]){
                
                //****Checking Email Unique*****//
                if(!$db->emailUnique("admins",$email)){

                    $id = $_SESSION['admin'][0];
                    $query = "UPDATE admins SET name='$name', email='$email' WHERE admin_id=$id";
                    $result = $db->executeQuery($query);
                    
                    if($result){
                        $_SESSION['admin'][2] = $email;
                        $_SESSION['admin'][1] = $name;
                        $_SESSION['success']  = "Profile Details updated successfully!";  ;
                        header("location:../profile");
                        die;  
                    }

                }else{
                    $_SESSION['error']  = "Email is already exists!";  ;
                    header("location:../profile");
                    die;
                }


            }else{

                $id = $_SESSION['admin'][0];
                $query = "UPDATE admins SET name='$name', email='$email' WHERE admin_id=$id";
                $result = $db->executeQuery($query);
                
                if($result){
                    $_SESSION['admin'][2] = $email;
                    $_SESSION['admin'][1] = $name;
                    $_SESSION['success']  = "Profile Details updated successfully!";  ;
                    header("location:../profile");
                    die;  
                }
                
            }

        }else{
            $_SESSION['error']  = "All fields are required!";  ;
            header("location:../profile");
            die; 
        }

    }else{
        $_SESSION['error']  = "Error Try Again!";  ;
        header("location:../profile");
        die;

    }



?>
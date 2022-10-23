<?php 

    //***Session*******//
    session_start();

    //**Start of Database Connectivity*******//
    require_once("../../database/database.php");
    $db = new Database();
    //**End of Database Connectivity******//


    //***Start of Login Process*****//
    if(isset($_REQUEST['login'])){
        
        extract($_REQUEST);

        $query = "SELECT * FROM admins WHERE email='$email' AND password='$password'";
        $result = $db->executeQuery($query);
        
        if($result->num_rows > 0){
            
            $_SESSION['admin']  = $result->fetch_array();
            $_SESSION['success']  = "Welcome to CMS Admin Panel";  ;
            header("location:../");
            die;

        }else{
            
            $_SESSION['error']  = "Invalid Email or Password";
            echo $_SESSION['error'];
            header("location:../login.php");
            die;


        }
    }
    //**End of Login Process*****//



?>
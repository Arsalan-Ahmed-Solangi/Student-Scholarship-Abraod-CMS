<?php 

    //***Session*******//
    session_start();

    //**Start of Database Connectivity*******//
    require_once("../../database/database.php");
    $db = new Database();
    //**End of Database Connectivity******//


    if(isset($_GET['id'])){
        
        $id = $_GET['id'];
        $query = "DELETE  FROM admins WHERE admin_id=$id";
        $result = $db->executeQuery($query);
        if($result){
            $_SESSION['success']  = "Admin has been deleted successfully!";  ;
            header("location:../view_admins");
            die;
        }else{
            $_SESSION['error']  = "Admin Record Not Exists";  ;
            header("location:../view_admins");
            die; 
        }

    }else{
        $_SESSION['error']  = "Admin Id Not Found!";  ;
        header("location:../view_admins");
        die;

    }



?>
<?php 

    //***Session*******//
    session_start();

    //**Start of Database Connectivity*******//
    require_once("../../database/database.php");
    $db = new Database();
    //**End of Database Connectivity******//


    if(isset($_GET['id'])){
        
        $id = $_GET['id'];
        $query = "DELETE  FROM enquires WHERE enquiry_id=$id";
        $result = $db->executeQuery($query);
        if($result){
            $_SESSION['success']  = "Enquiry has been deleted successfully!";  ;
            header("location:../view_enquiries");
            die;
        }else{
            $_SESSION['error']  = "Enquiry Record Not Exists";  ;
            header("location:../view_enquiries");
            die; 
        }

    }else{
        $_SESSION['error']  = "Enquiry Id Not Found!";  ;
        header("location:../view_enquiries");
        die;

    }



?>
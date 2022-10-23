<?php 

    //***Session*******//
    session_start();

    //**Start of Database Connectivity*******//
    require_once("../../database/database.php");
    $db = new Database();
    //**End of Database Connectivity******//


    if(isset($_GET['id'])){
        
        $id = $_GET['id'];
        $query = "DELETE FROM agents WHERE agent_id=$id";
        $result = $db->executeQuery($query);
        if($result){
            $_SESSION['success']  = "Agent has been deleted successfully!";  
            header("location:../view_agents");
            die;
        }else{
            $_SESSION['error']  = "Agent Record Not Exists";  
            header("location:../view_agents");
            die; 
        }

    }else{
        $_SESSION['error']  = "Agent Id Not Found!";  
        header("location:../view_agents");
        die;

    }



?>
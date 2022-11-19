<?php 

    //***Session*******//
    session_start();

    //**Start of Database Connectivity*******//
    require_once("../../database/database.php");
    $db = new Database();
    //**End of Database Connectivity******//


    //***Start of edit_profile Process*****//
    if(isset($_REQUEST['edit_profile'])){
        
        extract($_REQUEST);
        
    $query = "UPDATE agents SET `name`='$name',`phone_no`='$phone_no', `gender`='$gender' WHERE `agent_id`='$id'";
        $result = $db->executeQuery($query);
    
        if($result){
            
            $_SESSION['agent']['name'] = $name;
            $_SESSION['agent']['phone_no'] = $phone_no;
            $_SESSION['agent']['gender'] = $gender;
            $_SESSION['success']  = "Your Profile Details Updated Successfully!";
            header("location:../edit_profile.php");
            die;


        }else{
            
            $_SESSION['error']  = "Something Went Wrong";
    
            header("location:../edit_profile.php");
            die;


        }
    }
    //**End of Login Process*****//



?>
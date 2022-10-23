<?php 

    //***Session*******//
    session_start();

    //**Start of Database Connectivity*******//
    require_once("../../database/database.php");
    $db = new Database();
    //**End of Database Connectivity******//


    //***Start of AddDegree*****//
    if(isset($_REQUEST['addDegree'])){
        extract($_REQUEST);

        //*****EMAIL UNIQUE CHECK*******//
        $query = "SELECT * FROM degrees WHERE degree_name='$name'";
        $result = $db->executeQuery($query);
        if($result->num_rows){
            
            $_SESSION['error']  = "Degree title is already exists"; 
            header("location:../".$error);
            die;
        }


        $query  = "INSERT INTO degrees (`degree_name`) VALUES ('$name')";
 
        $result = $db->executeQuery($query);
        if($result){
            $_SESSION['success']  = "Degree Title Has been Added Successfully!";  ;
            header("location:../view_degrees");
            die;
        }else{
            $_SESSION['error']  = "Something Went Wrong!";  ;
            header("location:../view_degrees");
            die;
        }
    }
    //***End of AddDegree*******//

     //***Start of editDegree*****//
     if(isset($_REQUEST['editDegree'])){
        extract($_REQUEST);
        $error = "edit_degree?id=".$id;

        $name = strip_tags($name);
        $name = str_replace("'","",$name);
    
        //*****EMAIL UNIQUE CHECK*******//
        $query = "SELECT * FROM degrees WHERE degree_name='$name' AND degree_id <> '$id'";
        $result = $db->executeQuery($query);
        if($result->num_rows){
            
            $_SESSION['error']  = "Degree title is already exists"; 
            header("location:../".$error);
            die;
        }


       $query  = "UPDATE `degrees` SET `degree_name`='$name' WHERE degree_id = '$id'";

        $result = $db->executeQuery($query);
        if($result){
            $_SESSION['success']  = "Degree Title Has been Updated Successfully!";  ;
            header("location:../view_degrees");
            die;
        }else{
            $_SESSION['error']  = "Something Went Wrong!";  ;
            header("location:../view_degrees");
            die;
        }
    }
    //***End of editDegree*******//


    
    //****DefaultCase******//
    else{
        $_SESSION['error']  = "Something Went Wrong!";  ;
        header("location:../view_degrees");
        die;

    }
?>

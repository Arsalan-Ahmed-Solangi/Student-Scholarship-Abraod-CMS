<?php 

    //***Session*******//
    session_start();

    //**Start of Database Connectivity*******//
    require_once("../../database/database.php");
    $db = new Database();
    //**End of Database Connectivity******//


    //***Start of AddLanguage*****//
    if(isset($_REQUEST['addLanguage'])){
        extract($_REQUEST);

        //*****EMAIL UNIQUE CHECK*******//
        $query = "SELECT * FROM languages WHERE lang_name='$name'";
        $result = $db->executeQuery($query);
        if($result->num_rows){
            
            $_SESSION['error']  = "Language is already exists"; 
            header("location:../".$error);
            die;
        }


        $query  = "INSERT INTO languages (`lang_name`) VALUES ('$name')";
 
        $result = $db->executeQuery($query);
        if($result){
            $_SESSION['success']  = "Language Has been Added Successfully!";  ;
            header("location:../view_languages");
            die;
        }else{
            $_SESSION['error']  = "Something Went Wrong!";  ;
            header("location:../view_languages");
            die;
        }
    }
    //***End of AddLanguage*******//

     //***Start of EditLanguage*****//
     if(isset($_REQUEST['editLanguage'])){
        extract($_REQUEST);
        $error = "edit_language?id=".$id;

        $name = strip_tags($name);
        $name = str_replace("'","",$name);
    
        //*****EMAIL UNIQUE CHECK*******//
        $query = "SELECT * FROM languages WHERE lang_name='$name' AND lang_id <> '$id'";
        $result = $db->executeQuery($query);
        if($result->num_rows){
            
            $_SESSION['error']  = "Language  is already exists"; 
            header("location:../".$error);
            die;
        }


       $query  = "UPDATE `languages` SET `lang_name`='$name' WHERE lang_id = '$id'";

        $result = $db->executeQuery($query);
        if($result){
            $_SESSION['success']  = "Language Name Has been Updated Successfully!";  ;
            header("location:../view_languages");
            die;
        }else{
            $_SESSION['error']  = "Something Went Wrong!";  ;
            header("location:../view_languages");
            die;
        }
    }
    //***End of EditLanguage*******//

    //****DefaultCase******//
    else{
        $_SESSION['error']  = "Something Went Wrong!";  ;
        header("location:../view_languages");
        die;

    }
?>

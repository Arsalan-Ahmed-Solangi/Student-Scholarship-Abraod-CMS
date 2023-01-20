<?php 

    //***Session*******//
    session_start();

    //**Start of Database Connectivity*******//
    require_once("database/database.php");
    $db = new Database();
    //**End of Database Connectivity******//


    //***Start of RESET Process*****//
    if(isset($_REQUEST['Reset'])){
        
        extract($_REQUEST);
        print_r($_REQUEST);

        $query = "UPDATE students SET `password`='$password' WHERE cnic='$cnic'";
        $result = $db->executeQuery($query);
        
        if($result){

                
            $_SESSION['success']  = "Your password has been Reset | Now Login";
            header("location:login.php");
            die;



        }else{
            
            $_SESSION['error']  = "Something Went Wrong | please try again ";
            header("location:login.php");
            die;


        }
    }
    //**End of RESET Process*****//



?>
<?php 

    //***Session*******//
    session_start();

    //**Start of Database Connectivity*******//
    require_once("../../database/database.php");
    $db = new Database();
    //**End of Database Connectivity******//
    if(isset($_POST)){
        extract($_POST);


        //***SENDMESSAGE****//
       
            $admin = $_SESSION['admin'][0];
            $message = $_POST['message'];
            $id = $_POST['id'];

             $query = "INSERT INTO chatting (`message`,`agent_id`,`admin_id`,`message_by`) VALUES('$message','$id','$admin','Admin')";
            $result = $db->executeQuery($query);
            echo $id;
          
        

    }

?>

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
       
            $agent = $_SESSION['agent']['agent_id'];
            $message = $_POST['message'];
            $id = $_POST['id'];

             $query = "INSERT INTO chatting (`message`,`agent_id`,`admin_id`,`message_by`) VALUES('$message','$agent','$id','Agent')";
            $result = $db->executeQuery($query);
            echo $id;
          
        

    }

?>

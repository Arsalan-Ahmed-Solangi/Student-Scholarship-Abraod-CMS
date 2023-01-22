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
       
            $agent = $_SESSION['student']['student_id'];
            $message = $_POST['message'];
            $name = $_SESSION['student']['name'];
            $id = $_POST['id'];

             $query = "INSERT INTO studentChat (`message`,`student_id`,`student`,`message_by`) VALUES('$message','$agent','$id','$name')";
            $result = $db->executeQuery($query);
            echo $id;
          
        

    }

?>

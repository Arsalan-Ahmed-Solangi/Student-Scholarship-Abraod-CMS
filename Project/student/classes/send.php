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
            $id = $_POST['id'];

             $query = "INSERT INTO chattingStudents (`message`,`student_id`,`agent_id`,`message_by`) VALUES('$message','$agent','$id','Student')";
            $result = $db->executeQuery($query);
            echo $id;
          
        

    }

?>

<?php 

    //***Session*******//
    session_start();

    //**Start of Database Connectivity*******//
    require_once("../../database/database.php");
    $db = new Database();
    //**End of Database Connectivity******//

    //***Start of Add Agent****//
    if(isset($_REQUEST['addAgent'])){
    
        extract($_REQUEST);


        //*****EMAIL AND CNIC UNIQUE CHECK*******//
        $query = "SELECT * FROM agents WHERE email='$email' OR cnic='$cnic'";
        $result = $db->executeQuery($query);
        if($result->num_rows){
              
            $_SESSION['error']  = "Email or CNIC already exists | try new one"; 
            header("location:../add_agent");
            die;
        }
        
        //****CNIC CHECK****//
        $cnic_pattern = "/[0-9]{5}[-][0-9]{7}[-][0-9]{1}/";
        if(!preg_match($cnic_pattern,$cnic)){
            
            $_SESSION['error']  = "CNIC Pattern is Wrong,use dashes"; 
            header("location:../add_agent");
            die;
           
        }

         //****PHONE CHECK****//
         if(!preg_match('/^[0-9]{11}+$/',$phone_no)){
             
             $_SESSION['error']  = "Phone No must be in digits"; 
             header("location:../add_agent");
             die;
            
         }

        //***Uploading Image and Checking Validation********//
        $directory = "../../agent/uploads/agent";
        if(!is_dir($directory)){
            mkdir($directory);
        }
        $file = $directory ."/".time().date("Y-m-d").".jpg";
        $fileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));

        //****Image Formate Validation****//
        $formats = array("jpg","JPG","PNG","JPEG","png","jpeg");
        if(!in_array($fileType,$formats)){
            $_SESSION['error'] = "Profile Picture must be an image (JPG,PNG,JPEG)";
            header("location:../add_agent");
            die;
        }


        if(move_uploaded_file($_FILES["profile"]["tmp_name"], $file)){
          
            $query = "INSERT INTO agents (`name`,`email`,`password`,`phone_no`,`cnic`,`gender`,`status`,`profile`) VALUES 
            ('$name','$email','$password','$phone_no','$cnic','$gender','$status','$file')";
            $result = $db->executeQuery($query);
            if($result){
                $_SESSION['success'] = "Agent Account has been created successfully!";
                header("location:../view_agents");
                die;
            }else{
                $_SESSION['error'] = "Data not inserted!";
                header("location:../add_agent");
                die;   
            }
        }else
        {
            $_SESSION['error'] = "Something went wrong - profile picture must be less than 2mb";
            header("location:../add_agent");
            die;
        }


    }
    //***End of Add Agent****//


    //***Start of Edit Agent****//
    if(isset($_REQUEST['editAgent'])){

        extract($_REQUEST);
        $error = "edit_agent?id=".$id;
  
        //*****EMAIL AND CNIC UNIQUE CHECK*******//
        $query = "SELECT * FROM agents WHERE email='$email' OR cnic='$cnic' AND agent_id <> '$id'";
        $result = $db->executeQuery($query);
        if($result->num_rows){
              
            $_SESSION['error']  = "Email or CNIC already exists | try new one"; 
            header("location:../".$error);
            die;
        }
        
        //****CNIC CHECK****//
        $cnic_pattern = "/[0-9]{5}[-][0-9]{7}[-][0-9]{1}/";
        if(!preg_match($cnic_pattern,$cnic)){
            
            $_SESSION['error']  = "CNIC Pattern is Wrong,use dashes"; 
            header("location:../".$error);
            die;
           
        }

         //****PHONE CHECK****//
         if(!preg_match('/^[0-9]{11}+$/',$phone_no)){
             
             $_SESSION['error']  = "Phone No must be in digits"; 
             header("location:../".$error);
             die;
            
         }

         $query = "UPDATE agents SET `name`='$name',`email`='$email',`cnic`='$cnic',`phone_no`='$phone_no'
                  ,`gender`='$gender',`status`='$status' WHERE agent_id ='$id'";
         $result = $db->executeQuery($query);
         if($result){
            $_SESSION['success']  = "Agent Account Details Updated Successfully!";  
            header("location:../view_agents");
            die;  
         }else{
            $_SESSION['error']  = "Something Went Wrong!";  ;
            header("location:../".$error);
            die;
         }
        

    }
    //***End of Edit Agent*****//


    //****Start of Update Profile*****//
    if(isset($_REQUEST['updateProfile'])){
        extract($_REQUEST);
        $error = "edit_agent?id=".$id;
        $directory = "../../agent/uploads/agent";
        if(!is_dir($directory)){
            mkdir($directory);
        }
        $file = $directory ."/".time().date("Y-m-d").".jpg";
        $fileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));

        //****Image Formate Validation****//
        $formats = array("jpg","JPG","PNG","JPEG","png","jpeg");
        if(!in_array($fileType,$formats)){
            $_SESSION['error'] = "Profile Picture must be an image (JPG,PNG,JPEG)";
            header("location:../".$error);
            die;
        }


        if(move_uploaded_file($_FILES["profile"]["tmp_name"], $file)){
          
            $query = "UPDATE agents SET profile='$file' WHERE agent_id='$id'";
            $result = $db->executeQuery($query);
            if($result){
                $_SESSION['success'] = "Agent Account Profile Updated successfully!";
                header("location:../view_agents");
                die;
            }else{
                $_SESSION['error'] = "Not Updated!";
                header("location:../".$error);
                die;   
            }
        }else
        {
            $_SESSION['error'] = "Something went wrong - profile picture must be less than 2mb";
            header("location:../".$error);
            die;
        }

    }
    //***End of Update Profile******//

    //****DefaultCase******//
    else{
        $_SESSION['error']  = "Something Went Wrong!";  ;
        header("location:../view_agents");
        die;

    }

?>
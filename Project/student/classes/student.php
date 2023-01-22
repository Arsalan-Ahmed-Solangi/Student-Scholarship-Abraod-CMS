<?php 

    //***Session*******//
    session_start();

    //**Start of Database Connectivity*******//
    require_once("../../database/database.php");
    $db = new Database();
    //**End of Database Connectivity******//


    //***Start of Add Student*******//
    if(isset($_REQUEST['addStudent'])){

        extract($_REQUEST);

        //*****EMAIL AND CNIC UNIQUE CHECK*******//
        $query = "SELECT * FROM students WHERE email='$email' OR cnic='$cnic'";
        $result = $db->executeQuery($query);
        if($result->num_rows){  
            
            $_SESSION['error']  = "Email Already Exits | try new one"; 
            header("location:../add_student");
            die;
        }
        
        
        //****CNIC CHECK****//
        $cnic_pattern = "/[0-9]{5}[-][0-9]{7}[-][0-9]{1}/";
        if(!preg_match($cnic_pattern,$cnic)){
            
            $_SESSION['error']  = "CNIC Pattern is Wrong,use dashes"; 
            header("location:../add_student");
            die;
        
        }

        //****PHONE CHECK****//
        if(!preg_match('/^[0-9]{11}+$/',$phone_no)){
            
            $_SESSION['error']  = "Phone No must be in digits"; 
            header("location:../add_student");
            die;
            
        }

         //***Uploading Image and Checking Validation********//
         $directory = "../uploads/students";
         if(!is_dir($directory)){
             mkdir($directory);
         }
         $file = $directory ."/".time().date("Y-m-d").".jpg";
         $fileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
 
         //****Image Formate Validation****//
         $formats = array("jpg","JPG","PNG","JPEG","png","jpeg");
         if(!in_array($fileType,$formats)){
             $_SESSION['error'] = "Profile Picture must be an image (JPG,PNG,JPEG)";
             header("location:../add_student");
             die;
         }
 
         
         if(move_uploaded_file($_FILES["profile"]["tmp_name"], $file)){
           
           $query = "INSERT INTO students (`name`,`surname`,`email`,`password`,`phone`,`cnic`,`gender`,`status`,`profile`,`dob`,`address`,`ilets_score`,`cgpa`) VALUES 
             ('$name','$surname','$email','$password','$phone_no','$cnic','$gender','$status','$file','$date','$address','$ilets','$cgpa')";
       
             $result = $db->executeQuery($query);
             if($result){
                 $_SESSION['success'] = "Student Account has been created successfully!";
                 header("location:../view_students");
                 die;
             }else{
                 $_SESSION['error'] = "Data not inserted!";
                 header("location:../add_student");
                 die;   
             }
         }else
         {
             $_SESSION['error'] = "Something went wrong - profile picture must be less than 2mb";
             header("location:../add_student");
             die;
         }

    }   
    //***End of Add Student******//


    //****Start of Edit Student*******//
    if(isset($_REQUEST['editStudent'])){

        
        extract($_REQUEST);
        $error = "edit_student?id=".$id;
  
        //*****EMAIL UNIQUE CHECK*******//
        $query = "SELECT * FROM students WHERE email='$email'  AND student_id <> '$id'";
        $result = $db->executeQuery($query);
        if($result->num_rows){
              
            $_SESSION['error']  = "Email is already exists| try new one"; 
            header("location:../".$error);
            die;
        }

         //*****CNIC UNIQUE CHECK*******//
         $query = "SELECT * FROM students WHERE  cnic='$cnic' AND student_id <> '$id'";
         $result = $db->executeQuery($query);
         if($result->num_rows){
               
             $_SESSION['error']  = "CNIC is  already exists"; 
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

        $query = "UPDATE students SET `name`='$name',`surname`='$surname',`email`='$email',`cnic`='$cnic',`phone`='$phone_no'
                  ,`gender`='$gender',`status`='$status',`ilets_score`='$ilets',`cgpa`='$cgpa',`address`='$address',`dob`='$date' WHERE student_id ='$id'";
         $result = $db->executeQuery($query);

 
         if($result){
            $_SESSION['success']  = "Students Account Details Updated Successfully!";  
            header("location:../view_students");
            die;  
         }else{
            $_SESSION['error']  = "Something Went Wrong!";  ;
            header("location:../".$error);
            die;
         }

    }
    //***End of EditStudent*****//

    
    //***Start of Delete Student*******//
    if(isset($_GET['id']) &&  !empty($_GET['id']) ){

        $id = $_GET['id'];
        $query = "DELETE FROM students WHERE student_id=$id";
        $result = $db->executeQuery($query);
        if($result){
            $_SESSION['success']  = "Student has been deleted successfully!";  
            header("location:../view_students");
            die;
        }else{
            $_SESSION['error']  = "Student Record Not Exists";  
            header("location:../view_students");
            die; 
        }
    }
    //***End of Delete Student*******//

    //****Start of Update Profile*****//
    if(isset($_REQUEST['updateProfile'])){
        extract($_REQUEST);


        $error = "edit_student?id=".$id;
        $directory = "../uploads/students";
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
          
            $query = "UPDATE students SET profile='$file' WHERE student_id='$id'";
            $result = $db->executeQuery($query);
            if($result){
                $_SESSION['success'] = "Student Account Profile Updated successfully!";
                header("location:../index");
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


    //****Start of AddEducation********//
    if(isset($_REQUEST['addEducation'])){
        extract($_REQUEST);

        $query = "INSERT INTO education (`student_id`,`degree_id`,`city`,`institute_name`,`passing_year`,`remarks`) VALUES ('$student_id','$degree_id','$city','$institute_name','$passing_year','$remarks')";
        $result = $db->executeQuery($query);
        if($result){
            $_SESSION['success']  = "Student Education Details has been added!";  ;
            header("location:../add_education");
            die;
        }else{
            $_SESSION['error']  = "Something Went Wrong!";  ;
            header("location:../add_education");
            die;
        }

    }
    //****End of AddEducation*******//

     //***Start of Education Student*******//
     if(isset($_GET['education_id']) &&  !empty($_GET['education_id']) ){

       
        $student_id = $_GET['student_id'];
        $id = $_GET['education_id'];
        $error = "show_student?id=".$student_id;
        $query = "DELETE FROM education WHERE education_id=$id";
        $result = $db->executeQuery($query);
        if($result){
            $_SESSION['success']  = "Education Detail been deleted successfully!";  
            header("location:../".$error);
            die;
        }else{
            $_SESSION['error']  = "Something Went Wrong";  
            header("location:../",$error);
            die; 
        }
    }
    //***End of Education Student*******//

    //****DefaultCase******//
    else{
        $_SESSION['error']  = "Something Went Wrong!";  ;
        header("location:../add_education");
        die;

    }

?>
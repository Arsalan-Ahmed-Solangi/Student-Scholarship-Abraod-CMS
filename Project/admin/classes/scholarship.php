<?php 

    //***Session*******//
    session_start();

    //**Start of Database Connectivity*******//
    require_once("../../database/database.php");
    $db = new Database();
    //**End of Database Connectivity******//


    if(isset($_REQUEST['add_scholarship'])){
        
        extract($_REQUEST);

  

        //*****Start of UploadingLogo********//
         $directory = "../uploads/scholarships";
         if(!is_dir($directory)){
             mkdir($directory);
         }
         $file = $directory ."/".time().date("Y-m-d").".jpg";
         $fileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
       
         //****Image Formate Validation****//   
         $formats = array("jpg","JPG","PNG","JPEG","png","jpeg");
         if(!in_array($fileType,$formats)){ 
             $_SESSION['error'] = "Institute Logo  Must be an image(JPG,PNG,JPEG)";
             header("location:../add_scholarship");
             die;
         }

         if(!move_uploaded_file($_FILES["logo"]["tmp_name"], $file)){
            $_SESSION['error'] = "Institute Logo Cannot be Uploaded Try Again!";
             header("location:../add_scholarship");
             die;
         }
        //***End of UploadingLogo*****//

        

        //*****Start of Uplaoding MultipleImages*******//
        $imageFile = $directory ."/".time().date("d-m-Y").".jpg";
        $fileType = strtolower(pathinfo($imageFile,PATHINFO_EXTENSION));
      
        //****Image Formate Validation****//   
        $formats = array("jpg","JPG","PNG","JPEG","png","jpeg");
        if(!in_array($fileType,$formats)){ 
            $_SESSION['error'] = "Institute Image Must be an image (JPG,PNG,JPEG)";
            header("location:../add_scholarship");
            die;
        }

        if(!move_uploaded_file($_FILES["image"]["tmp_name"], $imageFile)){
           $_SESSION['error'] = "Institute Image Cover Cannot be Uploaded Try Again!";
            header("location:../add_scholarship");
            die;
        }
        //****End of Uploading Multiple Images********//

        //*****Uploading Data Now*******//  
        $query = "INSERT INTO scholarships (`agent_id`,`qualification`,`degree_id`,`institute_name`,`ilets_score`,`country`
            ,`city`,`minimum_cgpa`,`details`,`deadline`,`duration`,`language`,`image`,`logo`) VALUES ('$agent_id','$qualification','$degree_id'
            ,'$institute_name','$ilets_score','$country','$city_name','$cgpa','$details','$deadline','$duration','$language','$imageFile','$file')";
        $result = $db->executeQuery($query);
        
        if($result){
            $_SESSION['success']  = "Scholarship Details has been added successfully!";  
            header("location:../view_scholarship.php");
            die;
        }else{
            $_SESSION['error']  = "Something Went Wrong";  ;
            header("location:../add_scholarship.php");
            die;
        }
    
    }
    
    //****Else*******//
    else{
        $_SESSION['error']  = "You Don't Have Permission";  ;
        header("location:../add_scholarship.php");
        die;

    }



?>
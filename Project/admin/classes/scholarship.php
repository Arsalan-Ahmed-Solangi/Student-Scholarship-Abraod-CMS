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
         $fileType = strtolower(pathinfo($_FILES['logo']['name'],PATHINFO_EXTENSION));
       
         //****Image Formate Validation****//   
         $formats = array("jpg","JPG","PNG","JPEG","png","jpeg");
         if(!in_array($fileType,$formats)){ 
             $_SESSION['error'] = "Profile Picture must be an image (JPG,PNG,JPEG)";
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
        
        //****End of Uploading Multiple Images********//
        
    
    }
    
    //****Else*******//
    else{
        $_SESSION['error']  = "You Don't Have Permission";  ;
        header("location:../change_password.php");
        die;

    }



?>
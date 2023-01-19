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
        $query = "INSERT INTO scholarships (`price`,`link`,`agent_id`,`qualification`,`degree_id`,`institute_name`,`ilets_score`,`country`
            ,`city`,`minimum_cgpa`,`details`,`deadline`,`duration`,`language`,`image`,`logo`) VALUES ('$price','$link','$agent_id','$qualification','$degree_id'
            ,'$institute_name','$ilets_score','$country','$city_name','$cgpa','$details','$deadline','$duration','$language','$imageFile','$file')";
        $result = $db->executeQuery($query);
        
        if($result){
            $_SESSION['success']  = "Scholarship Details has been added successfully!";  
            header("location:../view_scholarships.php");
            die;
        }else{
            $_SESSION['error']  = "Something Went Wrong";  ;
            header("location:../add_scholarship.php");
            die;
        }
    
    }


    //****UpdateScholarship******//
    if(isset($_REQUEST['updateScholarship'])){
        extract($_REQUEST);
        $query = "UPDATE scholarships SET `price`='$price', `link`='$link', agent_id='$agent_id',qualification='$qualification',degree_id='$degree_id',institute_name='$institute_name',
        ilets_score='$ilets_score',country='$country',
        city='$city',minimum_cgpa='$cgpa',details='$details',duration='$duration',`language`='$language' WHERE scholarship_id = $id";

            $result = $db->executeQuery($query);
 
            if($result){
                $_SESSION['success']  = "Scholarship Details has been Updated successfully!";  
                header("location:../view_scholarships.php");
                die;
            }else{
                $_SESSION['error']  = "Something Went Wrong";  
                $error = "edit_scholarship?id=".$id;
                header("location:../".$error);
                die;
            }
    }
    
    //***Start of UpdateImages*******//
    if(isset($_POST['updateImages'])){
      
       extract($_POST);
        $error = "edit_scholarship?id=".$id;
        if ($_FILES['image']['size'] == 0 && $_FILES['logo']['size'] == 0)
        {
          
            $_SESSION['error'] = "No Image is select for update!";
         
            header("location:../".$error);
        }else{

            //****LogoUpload*****//
            $logoFile = null;
            $imageFile  = null;
            if($_FILES['logo']['size'] != 0){

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
                    header("location:../".$error);
                    die;
                }

                if(!move_uploaded_file($_FILES["logo"]["tmp_name"], $file)){
                    $_SESSION['error'] = "Institute Logo Cannot be Uploaded Try Again!";
                    header("location:../".$error);
                    die;
                }
                //***End of UploadingLogo*****//
                $logoImage = "`logo`='$file'";
            }


            if($_FILES['image']['size'] != 0){

                //*****Start of Uplaoding MultipleImages*******//
                $imageFile = $directory ."/".time().date("d-m-Y").".jpg";
                $fileType = strtolower(pathinfo($imageFile,PATHINFO_EXTENSION));
            
                //****Image Formate Validation****//   
                $formats = array("jpg","JPG","PNG","JPEG","png","jpeg");
                if(!in_array($fileType,$formats)){ 
                    $_SESSION['error'] = "Institute Image Must be an image (JPG,PNG,JPEG)";
                      header("location:../".$error);
                    die;
                }

                if(!move_uploaded_file($_FILES["image"]["tmp_name"], $imageFile)){
                $_SESSION['error'] = "Institute Image Cover Cannot be Uploaded Try Again!";
                      header("location:../".$error);
                    die;
                }
                //****End of Uploading Multiple Images********//

                $conditionImage = "`image`='$imageFile'";
            }

            $query = "UPDATE scholarships SET $conditionImage , $logoImage WHERE scholarship_id ='$id'";
            $result= $db->executeQuery($query);
            if($result){
                $_SESSION['success']  = "Scholarship Details has been Updated successfully!";  
                header("location:../view_scholarships.php");
                die;
            }else{
                $_SESSION['error']  = "Something Went Wrong";  
               
                header("location:../".$error);
                die;
            }
        }
    }
    //***End of UpdateImages******//
    //****Else*******//
    else{
        $_SESSION['error']  = "You Don't Have Permission";  ;
        header("location:../view_scholarships.php");
        die;

    }



?>
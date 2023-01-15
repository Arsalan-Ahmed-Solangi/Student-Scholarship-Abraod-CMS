<?php 

//***Session*******//
session_start();

//**Start of Database Connectivity*******//
require_once("../../database/database.php");
$db = new Database();
//**End of Database Connectivity******//

if(isset($_REQUEST['editUniversity'])){
    extract($_REQUEST);
    $error = "/edit_university?id=".$id;

    $query = "UPDATE universities SET `university_name`='$name',`country`='$country',`city`='$city',`university_details`='$details',
    `address`='$address'  WHERE university_id = $id";

        $result = $db->executeQuery($query);

        if($result){
            $_SESSION['success']  = "University Details has been Updated successfully!";  
            header("location:../view_universities.php");
            die;
        }else{
            $_SESSION['error']  = "Something Went Wrong";  
            $error = "/edit_university?id=".$id;
            header("location:../".$error);
            die;
        }

}

if(isset($_REQUEST['addUniversity'])){
    
    extract($_REQUEST);
    $error = "/add_university";

    if ($_FILES['image']['size'] == 0)
    {
        
        $_SESSION['error'] = "No Image is select for update!";
        
        header("location:../".$error);
    }

    if(!empty($name) && !empty($country)){
       
        $query = "SELECT * FROM universities WHERE university_name='name'";
        $result = $db->executeQuery($query);
        if($result->num_rows){
            $_SESSION['error']  = "University Name is already exits!";  ;
            header("location:../".$error);
            die; 
        }else{

            //*****AddingImage*****//

            if($_FILES['image']['size'] != 0){
                $directory = "../uploads/universities";
                if(!is_dir($directory)){
                    mkdir($directory);
                }
                //*****Start of Uplaoding MultipleImages*******//
                $imageFile = $directory ."/".time().date("d-m-Y").".jpg";
                $fileType = strtolower(pathinfo($imageFile,PATHINFO_EXTENSION));
            
                //****Image Formate Validation****//   
                $formats = array("jpg","JPG","PNG","JPEG","png","jpeg");
                if(!in_array($fileType,$formats)){ 
                    $_SESSION['error'] = "University Image Must be an image (JPG,PNG,JPEG)";
                      header("location:../".$error);
                    die;
                }

                if(!move_uploaded_file($_FILES["image"]["tmp_name"], $imageFile)){
                $_SESSION['error'] = "University Image Cover Cannot be Uploaded Try Again!";
                      header("location:../".$error);
                    die;
                }
                //****End of Uploading Multiple Images********//

                // $conditionImage = "`image`='$imageFile'";
            }
            $details = str_replace('"'," ",$details);
            $query = "INSERT INTO universities (`university_name`,`country`,`city`,`address`,`university_details`,`university_image`)
             VALUES ('$name','$country','$city','$address','$details','$imageFile')";
            
            $result = $db->executeQuery($query);
            if($result){
                $_SESSION['success']  = "University Added Successfully!";  ;
                header("location:../view_universities");
                die; 
            }else{
                $_SESSION['error']  = "Error Try Again!";  ;
                header("location:../".$error);
                die;
            }
        }
       
    }else{
        $_SESSION['error']  = "All fields are required!";  ;
        header("location:../".$error);
        die; 
    }

}else{
    $_SESSION['error']  = "Error Try Again!";  ;
    header("location:../".$error);
    die;

}



?>
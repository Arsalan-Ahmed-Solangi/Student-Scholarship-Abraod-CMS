<?php 

    require_once("../database/database.php");
    $db = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpdateStoresAreas</title>
</head>
<body>
    <form action="test.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file"/>
        <button type="submit" name="import">Import</button>
    </form>
    <?php 
    
        if(isset($_POST['import'])){

            $filename=$_FILES["file"]["tmp_name"];   
            
            if($_FILES["file"]["size"] > 0)
            {
               $file = fopen($filename, "r");
                 while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
                  {

                    $sql = "UPDATE stores SET `AreaId`='$getData[1]',`TownName`='$getData[2]'  WHERE `StoreCode`='$getData[0]'";
                   
                    print_r($sql);
                    die;
                          $result = mysqli_query($con, $sql);
               if(!isset($result))
               {
                 echo "<script type=\"text/javascript\">
                     alert(\"Invalid File:Please Upload CSV File.\");
                     window.location = \"test.php\"
                     </script>";    
               }
               else {
                   echo "<script type=\"text/javascript\">
                   alert(\"CSV File has been successfully Imported.\");
                   window.location = \"test.php\"
                 </script>";
               }
                  }
             
                  fclose($file);  
            }

        }
    
    
    ?>
</body>
</html>
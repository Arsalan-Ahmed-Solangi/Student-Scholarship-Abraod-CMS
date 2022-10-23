<?php 

 

    require_once("../database/database.php");
    $db = new Database();
        
    $query = "SELECT REPLACE(REPLACE(SelectedStores,']',''),'[','') AS SelectedStores FROM salesflo_stores";
    $result = $db->executeQuery($query);

    $stores = null;
    while($row = mysqli_fetch_array($result)){
            $stores .= ",";
            $stores .=$row['SelectedStores'];
    
    }

    echo $stores;
  
?>
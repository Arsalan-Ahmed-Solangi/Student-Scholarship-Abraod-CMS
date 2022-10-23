<?php 

 

    require_once("../database/database.php");
    $db = new Database();
 
    $query = "SELECT StoreCode,StoreName,zones.`ZoneName`,regions.`RegionName`,areas.AreaName,TownName,CityCode,IsCityAssigned,CityAssignedOn,UrbanRural,BandId,TotalIndustry_OPW,VolumePercentage,
    StorePercentage,ValuePremium,UrbanRuralStatus,TotalPMPKL_OPW,MORVEN_OPW,MARLBORORED_OPW,MARLBOROGOLD_OPW,REDANDWHITEKSF_OPW,REDANDWHITESPL_OPW,
    PARLIAMENT_OPW,DIPLOMAT_OPW,OTHERS_OPW,TotalPTC_OPW,DUNHILL_OPW,BENSONAndHEDGES_OPW,JOHNPLAYER_OPW,VELOCansperWeek,EMBASSY_OPW,GOLDFLAKE_OPW,CAPSTANBYPALLMALL_OPW,
    GOLDLEAFCLASSIC_OPW,GOLDLEAFSPECIAL_OPW,ROTHMANS_OPW,TotalGND_OPW,GNDValue_OPW,GNDPremium_OPW,MARDAN_OPW,PercOfTotalCigaretteSalesInOuters
    FROM stores 
    INNER JOIN zones ON stores.`ZoneId` = zones.`ZoneId`
    INNER JOIN regions ON stores.`RegionId` = regions.`RegionId`
    INNER JOIN areas ON stores.`AreaId` = stores.`AreaId` 
    INNER JOIN cities ON stores.`CityId` = cities.`CityId`
    WHERE UrbanRuralStatus = 0
    ";
    $result = $db->executeQuery($query);
    print_r($result);
    // $storesArray  = array();
    // while($row = mysqli_fetch_array($result)){
    //   $array = str_replace("[","",$row['SelectedStores']);
    //   $array = str_replace("]","",$array);
     
    //   $newArray = explode(",",$array);
    //   $storesArray = array_merge($storesArray,$newArray);
    
    // }
    // // print_r($storesArray);
    // $storesArray  = implode(",",$storesArray);
   
    // echo "SELECT COUNT(Id) AS VerifiedStores FROM sf_stores  AND sf_stores.`VerificationStatus` <> 3 AND sf_stores.`StoreId` IN (".$storesArray.")";
?>
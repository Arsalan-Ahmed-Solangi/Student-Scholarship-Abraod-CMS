<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
</head>

<body>
    <?php

    require_once("database/database.php");
    $db = new Database;


    //     $query = 'SELECT S.`StoreCode`,S.`StoreName`,S.`StoreCNIC`,S.`StoreContactNumber`,S.`CompanyCode`,S.`StoreFacebookId`,S.`StoreGmailId`,
// (CASE WHEN (S.StoreStatus = 0) THEN "Pending" WHEN (S.StoreStatus = 2) THEN "Rejected" WHEN (S.StoreStatus = 1) THEN "Approved" END) AS StoreStatus 
// ,S.`StoreImage` AS checkImage,GROUP_CONCAT(  CASE WHEN (SF.`ImageOutSide`="") THEN "\n\nIMAGE :: Null"  ELSE CONCAT("\n\nIMAGE :: ",SF.`ImageOutSide`)  END   ,"\n",CONCAT("ADDRESS :: ",SF.`Address`),"\n",CONCAT("LATITUDE::",SF.`Latitude`),"\n",CONCAT("LONGITUDE ::",SF.`Longitude`))
// AS `IMAGE` FROM salesflo_stores AS S
//  INNER JOIN sf_stores AS SF ON S.`StoreId` = SF.`SFStoreId`
// GROUP BY S.`StoreCode`';
    $query = ' SELECT S.StoreAddedOn,S.`StoreCode`,S.`StoreName`,S.`StoreCNIC`,S.City,S.`StoreContactNumber`,S.`CompanyCode`,channels.`ChannelName`,S.`StoreFacebookId`,S.`StoreGmailId`,
    (CASE WHEN (S.StoreStatus = 0) THEN "Pending" WHEN (S.StoreStatus = 2) THEN "Rejected" WHEN (S.StoreStatus = 1) THEN "Approved" END) AS StoreStatus 
    ,S.`StoreImage` AS checkImage,GROUP_CONCAT(  CASE WHEN (SF.`ImageOutSide`="") THEN "\n\nNull|||"  ELSE CONCAT("\n\n",SF.`ImageOutSide`,"|||")  END   ,"\n",CONCAT("Address :: ",SF.`Address`,"|||"),"\n",CONCAT("",SF.`Latitude`,"|||"),"\n",CONCAT("",SF.`Longitude`) SEPARATOR "---" )
    AS `IMAGE`,users.`UserName` AS ADDEDBY FROM salesflo_stores AS S
     LEFT JOIN sf_stores AS SF ON S.`StoreId` = SF.`SFStoreId`
     LEFT JOIN channels ON SF.`ChannelId` =  channels.`ChannelId`
     LEFT JOIN users ON S.`StoreAddedBy` = users.`UserId`
     WHERE City="Lahore" AND StoreStatus <> 2
    GROUP BY S.`StoreCode`';


    $result = $db->executeQuery($query);
    ?>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
            <div class="container">
                <button id="button">Export</button>
                <table class="table w-20 table-bordered table-striped" id="table2excel">
                    <thead>
                        <tr>
                            <th>SR#</th>
                            <th>Store Added Date</th>
                            <th>StoreCode</th>
                            <th>StoreName</th>
                            <th>StoreCNIC</th>
                            <th>City</th>
                            <th>StoreContactNumber</th>
                            <th>CompanyCode</th>
                            <th>Channel Name</th>
                            <th>StoreFacebookId</th>
                            <th>StoreGmailId</th>
                            <th>StoreStatus</th>
                            <th>AddedBy UserName</th>
                            <th>Store Image</th>
                            <th>Store Address</th>
                            <th>Store Latitude</th>
                            <th>Store Longitude</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo ++$i ?>
                            </td>
                            <td>
                                <?php echo $row['StoreAddedOn'] ?>
                            </td>
                            <td>
                                <?php echo $row['StoreCode'] ?>
                            </td>
                            <td>
                                <?php echo $row['StoreName'] ?>
                            </td>
                            <td>
                                <?php echo $row['StoreCNIC'] ?>
                            </td>
                            <td>
                                <?php echo $row['City'] ?>
                            </td>
                            <td>
                                <?php echo $row['StoreContactNumber'] ?>
                            </td>
                            <td>
                                <?php echo $row['CompanyCode'] ?>
                            </td>
                            <td>
                                <?php echo $row['ChannelName'] ?>
                            </td>


                            <td>
                                <?php echo $row['StoreGmailId'] ?>
                            </td>
                            <td>
                                <?php echo $row['StoreFacebookId'] ?>
                            </td>

                            <td>
                                <?php echo $row['StoreStatus'] ?>
                            </td>
                            <td>
                                <?php echo $row['ADDEDBY'] ?>
                            </td>
                            <?php

                            $image = $row['IMAGE'];
                            $check = $row['checkImage'];
                            $imageArray = explode("---", $image);



                            foreach ($imageArray as $key => $value) {

                                if (strpos($value, $check) !== false) {

                                    $breakValues = explode("|||", $value);
                                    foreach ($breakValues as $keys => $values) {
                                        echo "<td>" . $values . "</td>";
                                    }
                                } else {


                                }

                            }

                            ?>

                        </tr>

                        <?php

                        }
                        ?>



                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"
        integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/gh/rainabba/jquery-table2excel@1.1.0/dist/jquery.table2excel.min.js"></script>

    <script>
        $("button").click(function () {
            $("#table2excel").table2excel({
                // exclude CSS class
                // exclude: ".noExl",
                name: "Worksheet Name",
                filename: "SomeFile", //do not include extension
                fileext: ".csv" // file extension
            });
        });
    </script>
</body>

</html>
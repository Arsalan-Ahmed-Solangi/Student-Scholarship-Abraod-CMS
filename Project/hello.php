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

    $query = "SELECT * FROM salesflo_stores WHERE City='Lahore' AND StoreStatus <> 2";
    $result = $db->executeQuery($query);
    $stores  = null;
    while($row = mysqli_fetch_assoc($result)){

        $stores .=str_replace("[","", str_replace("]","",$row['SelectedStores'])).",";

    }

    echo $stores;
    ?>
</body>

</html>
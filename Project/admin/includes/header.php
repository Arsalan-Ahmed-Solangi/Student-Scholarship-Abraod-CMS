<?php 
    require_once("../database/database.php");
    $db  = new Database();
    require_once("session.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CMS - ADMIN</title>

        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css"/>
        <style>
            body{
                font-family: 'Poppins', sans-serif;
            }
            .dt-button-info{
                z-index: 100000;
            }
            label.error {
              
                color: #721c24;
                background-color: #f8d7da;
                border-color: #f5c6cb;
                position: relative;
                padding: .75rem 1.25rem;
                margin-bottom: 1rem;
                width: 100%;
                font-weight: 600;
                margin-top: 5px;
                border: 1px solid transparent;
                border-radius: .25rem;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
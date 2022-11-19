<?php 

    require("database/database.php");
    $db = new Database();

    $query = "SELECT * FROM about";
    $result = $db->executeQuery($query);
    $rowAbout = mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Universtiy Finder | Home</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="floating-wpp.min.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">


    <style>
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
<body>
<div id="WAButton"></div>
<?php  
    require_once("../database/database.php");
    $db  = new Database();

    session_start();
    if(isset($_SESSION['admin'])){
        $_SESSION['success'] = "You are already logged In!";
        header("location:index.php");
        die;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <title>CMS  AGENT LOGIN</title>
    <style>
        body{
            background-color: #212529;
        }
        h6,h1,h2,h3,h4,h5 {
            font-family: "Raleway", sans-serif;
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
<body> 

    <section>
        <div class="container py-5" style="width: 50%;margin:auto;">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card shadow-lg bg-white p-2" style="border-radius: 0.5rem;top:20px">
                        <div class="card-body">
                            
                               
                                        <h4 class="text-center"><b>FORGET PASSWORD</b></h4>
                                        <?php require_once("includes/messages.php") ?>
                                        <hr/>
                                        
                                        <form id="form" action="classes/reset_password.php" method="POST">
                                           
                                            <div class="form-group mb-2 mt-2">
                                                <label>Email <span class="text-danger">*</span></label>
                                                <input id="email" name="email" class="form-control" placeholder="Enter email" required/>
                                                <span class="form-text">please enter your registered email address</span>
                                            </div>
                                            <div class="form-group mb-2 mt-2">
                                                <label>New Password <span class="text-danger">*</span></label>
                                                <input minlength="6" id="password" name="password" type="password" class="form-control" placeholder="Enter new password here..." required/>
                                            </div>

                                            <div class="form-group mb-2 mt-2">
                                                <label>Confirm your password <span class="text-danger">*</span></label>
                                                <input type="password" minlength="6" name="password_confirm" class="form-control" placeholder="Confirm your password" required/>
                                            </div>

                                            <div class="form-group offset-md-10">
                                                <button type="submit" id="resetBtn" name="Reset" class="btn btn-sm btn-dark"><i class="fa fa-sign-in-alt"></i> Reset</button>
                                            </div>
                                            <div class="form-group text-center">
                                                <hr/>
                                                <a href="login.php" class="btn btn-sm btn-danger "><i class="fa fa-arrow-left"></i> Back to Login</a>
                                            </div>
                                        </form>
                                     
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#form").validate({
                rules: {
                    password: {
                        required: true,
                        minlength: 6
                    },
                    password_confirm: {
                        required: true,
                        minlength: 6,
                        equalTo: "#password"
                    }
                },
                messages: {

                    password_confirm: {
    
                        equalTo: "Confirm password not matched!"
                    }
                }
            });
             $('.alert-message').delay(2200).fadeOut(1000);
        });
    </script>

    
    
    


</body>
</html>


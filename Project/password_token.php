<?php
    session_start();
    require_once("database/database.php");
    use PHPMailer\PHPMailer\PHPMailer;
    require("vendor/autoload.php");
    $db  = new Database();

    if(isset($_POST['Reset'])){
       
        extract($_POST);
        if($_POST['role'] == 1) $table = "admins";
        if($_POST['role'] == 2) $table = "agents";
        if($_POST['role'] == 3) $table = "students";
        $query = "SELECT * FROM ".$table." WHERE  `email`='$email'";
        $result = $db->executeQuery($query);
        if($result->num_rows > 0){
            $token = md5($email).rand(10,9999);
            
            $output='<p>Dear user,</p>';
$output.='<p>Please click on the following link to reset your password.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p><a href="https://www.allphptricks.com/forgot-password/reset-password.php?
key='.$token.'&email='.$email.'&action=reset" target="_blank">
https://www.allphptricks.com/forgot-password/reset-password.php
?key='.$token.'&email='.$email.'&action=reset</a></p>';		
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Please be sure to copy the entire link into your browser.
The link will expire after 1 day for security reason.</p>';
$output.='<p>If you did not request this forgotten password email, no action 
is needed, your password will not be reset. However, you may want to log into 
your account and change your security password as someone may have guessed it.</p>';   	
$output.='<p>Thanks,</p>';
$output.='<p>AllPHPTricks Team</p>';
$body = $output; 
$subject = "Password Recovery - AllPHPTricks.com";
          
            $mail = new PHPMailer();
            
$mail->IsSMTP();
$mail->Host = "smtp.gmail.com"; // Enter your host here
$mail->SMTPAuth = true;
$mail->Username = "fyptest814@gmail.com"; // Enter your email here
$mail->Password = "Arfyp12@"; //Enter your password here
$mail->Port = 25;
$mail->IsHTML(true);
$mail->From = "fyptest814@gmail.com";
$mail->FromName = "Scholarship Abroad Opportunities";
$mail->Sender = "fyptest814@gmail.com"; // indicates ReturnPath header
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress("ahmedsolangi347@gmail.com");
if(!$mail->Send()){
echo "Mailer Error: " . $mail->ErrorInfo;
}
        }else{
            $_SESSION['error'] = "No Account Found on this email!";
            header("location:forget_password.php");
            die;
        }
    }else{
        header("location:index.php");
        die;
    }

?>
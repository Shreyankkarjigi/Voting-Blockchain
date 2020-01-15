<html>
<head>
<link rel="stylesheet" href="style.css">   
<section class="main-container">
<div class="main-wrapper">
    
<title>Registration Sucessful</title>

</head>
<body>
<div class="head">
<h1 align="center"><font color="gold"><font size="10">Registration Sucessful</h1></font><br><br>
    <br>
    <br>
    <br>
</div>
<p align="center"><font size="7"><font color="white">Please check your E-Mail for further process.</p></font><br><br><br>
<div class="signup-form button">
<form action="http://localhost/election/">
    <input class="signup-form button" type="submit" value ="Click here to get back to login page">
</form>
</div>
<br>
<br>
<br>
<h2 align="down"><hr color="#f49d41"><font size="5" ><font face="Times New Roman"><font color="#f49d41"> "Powered by BlockChain Technology"
</font></h2>
<?php
if (isset($_POST['submit'])){
    include_once'dbh.inc.php';
    $first = mysqli_real_escape_string($conn,$_POST['first']);
    $last = mysqli_real_escape_string($conn,$_POST['last']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $uid = mysqli_real_escape_string($conn,$_POST['uid']);
    $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
 
 
    //echo $first.'-'.$last.'-'.$email.'-'.$uid.'-'.$pwd;
    //exit;
    
    //error handling
    
    if (empty($first) ||empty($last) ||empty($email) ||empty($uid)||empty($pwd)){
       header("Location: ../signup.php?signup=empty");
       exit();
    }else{
     if(!preg_match("/^[a-zA-Z]*$/",$first)||!preg_match("/^[a-zA-Z]*$/", $last)){
       header("Location: ../signup.php?signup=invalid");
     exit();  
     }else{
      if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
         header("Location: ../signup.php?signup=email");
        exit(); 
        }else{
          $sql ="SELECT * FROM users WHERE user_uid='$uid'";
          $result=mysqli_query($conn,$sql);
          $resultCheck=mysqli_num_rows($result);
          if($resultCheck > 0){
             header("Location: ../signup.php?signup=usertaken");
     exit();  
             
          }else{
             $hashedPwd =password_hash($pwd,PASSWORD_DEFAULT);
             echo $sql= "INSERT INTO users(user_first ,user_last,user_email,user_uid,user_pwd)Values('$first','$last','$email','$uid','$hashedPwd');";
 
             
             mysqli_query($conn,$sql);
             header("Location:../mail.php?signup=success");
     exit();
          }
          
        } 
      
      }  
     }   
 }else{
     header("Location: ../mail.php");
     exit();
 }
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'in-v3.mailjet.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'f5b676b177615190936692b0da0c5923';                     // SMTP username
    $mail->Password   = '0897e1b2cc738e2fdcd4b0a746153fad';                               // SMTP password
    $mail->SMTPSecure ='tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('androgeek123@gmail.com', 'Voting');
    $mail->addAddress('$email', 'User');     // Add a recipient
   

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Signup Sucessful';
    $mail->Body    = 'Dear User, Thank you for signing up ,We have recieved your application and are processing it.
    You will soon recieve a confirmation regarding the same along with your document verification center details.Please keep a copy of the documents you uploaded with you at the time of verification.
    For any further queries contact us in below adress:
    Admin@voting.gov.in
    ThanK you for helping in making this country better
    Admin
    </b>';
    

    $mail->send();
    
   
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}   

?>

</body>
</html>

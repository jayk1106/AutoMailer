<?php

$subject = $_POST['subject'];
$mess = $_POST['mess'];

require 'config.php';

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;



$mail= new PHPMailer(true);
$mail->isSMTP();
$mail->Host="smtp.gmail.com";
$mail->SMTPAuth=true;
$mail->Username="youremail@gmail.com";
$mail->Password="yourPassword";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port=587;



$mail->setFrom("kaneriyajay3@gmail.com");

$sql = "SELECT * FROM userdetails";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){

        $mail->addAddress($row['userEmail'],$row['userName']);
    }
}

$mail->addReplyTo("kaneriyajay3@gmail.com");

//addCC 
//addBCC  not see other user's name


// Content
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $mess;
// $mail->AltBody = "Hello Testing"; // if html not supported


if($mail->send()){
    header("Location: http://automailer.test/parts/success.php");
}else{
    echo "<h1>Failed</h1>";
}

?>



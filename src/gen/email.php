<?php
// PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
// Base files 
require 'inc/PHPMailer/src/Exception.php';
require 'inc/PHPMailer/src/PHPMailer.php';
require 'inc/PHPMailer/src/SMTP.php';

 // create object of PHPMailer class with boolean parameter which sets/unsets exception.
 $mail = new PHPMailer(true);                              
 try {

     //server settings...
     $mail->isSMTP(); // using SMTP protocol     
                                 
     $mail->Host = 'smtp.'; // SMTP host as gmail 
     $mail->SMTPAuth = true;  // enable smtp authentication                             
     $mail->Username = 'email@email.com';  // sender email             
     $mail->Password = '****'; // sender email  password                          
     $mail->SMTPSecure = 'tls';  // for encrypted connection                           
     $mail->Port = 0;   // port for SMTP     
     $mail->SMTPOptions = array(
                 'ssl' => array(
                 'verify_peer' => false,
                 'verify_peer_name' => false,
                 'allow_self_signed' => true
                 )
     );

     //recipients..
     $mail->setFrom("email@email.com", "Farm Konect"); // sender's email and name
     $mail->addAddress($Email, $Name);  // receiver's email and name
     $mail->addReplyTo('info@framkonect.com');
     
     //contents..
     $mail->isHTML(true);
     $mail->Subject = 'Comfirm your account';
     $mail->Body    = "<h5>Hello click the button to activate your account</h5><p><a href='http://localhost/2020/BuildForSDG/team045/konect-Backend/verify/".$vKey."'><button>Verify</button></a></p>";
       
     $mail->send();
     $error_message = "<div class='alert alert-success'>Sucessfully Signup check your email for verification </div>";
 }catch (Exception $e)
 {
 // handle error.
     $error_message = 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
 }


?>
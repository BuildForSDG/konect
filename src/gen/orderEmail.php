<?php
// PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
// Base files 
require 'inc/PHPMailer/src/Exception.php';
require 'inc/PHPMailer/src/PHPMailer.php';
require 'inc/PHPMailer/src/SMTP.php';

$Order = new model();
$data = $Order->Order($Id);


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

     foreach ($data as $key) {
        // fetch data Variables... 
        $UserId         = $key['user_id'];
        $product        = $key['product'];
        $orderCode      = $key['order_code'];
    

     //recipients..
     $mail->setFrom("email@email.com", "Farm Konect"); // sender's email and name
     $mail->addAddress($Email, $Name);  // receiver's email and name.
     $mail->addReplyTo('info@gmail.com');
    
     //contents..
     $mail->isHTML(true);
     $mail->Subject = 'Your Order Has been Accepted';
     $mail->Body    = "<p>Thanks your <b>".$Name."</b> for placing the order, your order details below.</p><br>Order No: <b>".$OrderCode."</b><p>Our Agent ".$Agent.", will get in contact with you soon.</P>";
     }
     $mail->send();
     $error_message = "<div class='alert alert-success'></div>";
 }catch (Exception $e)
 {
 // handle error.
     $error_message = 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
 }


?>
<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer();
$postData = $_POST;
//Server settings
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'mail.rigveduptown-balewadi.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'sales@rigveduptown-balewadi.com';                     //SMTP username
$mail->Password   = 'Swapmarvel@345';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure 
$mail->setFrom('sales@rigveduptown-balewadi.com', 'Rigved Uptown');
$mail->addAddress('jnikhil652@gmail.com', 'Swapnil');     //Add a recipient
$mail->addAddress('swapnil@propsource.in', 'Swapnil');     //Add a recipient
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'Rigved uptown Enquiry' . date("Y-m-d h:i:sa");
$mail->Body    = 'Name :' . $postData['name'] . "<br>" . "Email:" . $postData["email"] . "<br>" . "Phone:" . $postData["phone"];
$mail->AltBody = 'Name :' . $postData['name'] . " //" . "Email:" . $postData["email"] . "//" . "Phone:" . $postData["phone"];
$response = array();
if ($mail->send()) {
    $response = array(
        "status" => true,
        "message" => "mail send"
    );
} else {
    $response = array(
        "status" => false,
        "message" => "mail not send"
    );
}
echo json_encode($response);

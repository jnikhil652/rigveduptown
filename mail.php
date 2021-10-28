<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

use SendGrid\Mail\Mail;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new SendGrid\Mail\Mail();
$postData = $_POST;
$mail->setFrom('sales@rigveduptown-balewadi.com', 'Rigved Uptown');
$mail->setSubject('Rigved Uptown Enquiry');
$mail->addTo('swapnil@propsource.in', 'Swapnil');     //Add a recipient
// $mail->addTo('jnikhil2999@gmail.com', 'Swapnil');     //Add a recipient

$mail->addContent('text/html', 'Name :' . $postData['name'] . "<br>" . "Email:" . $postData["email"] . "<br>" . "Phone:" . $postData["phone"]);
// $mail->AltBody = 'Name :' . $postData['name'] . " //" . "Email:" . $postData["email"] . "//" . "Phone:" . $postData["phone"];
$response = array();
$sendgrid = new SendGrid('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');

if ($sendgrid->send($mail)) {
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

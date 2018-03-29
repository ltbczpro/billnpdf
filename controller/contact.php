<?php
require __DIR__."/../app/loader.php";

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require __DIR__."/../view/contact.php";

if (isset($_POST["send"])) {

    if ($_POST["email"] && $_POST["name"] && $_POST["message"]) {


        //Create a new PHPMailer instance
        $mail = new PHPMailer();
        //Tell PHPMailer to use SMTP - requires a local mail server
        //Faster and safer than using mail()
        $mail->isSMTP();
        $mail->Host = 'www.ygdirane.com';
        $mail->Port = 25;
        //Use a fixed address in your own domain as the from address
        //**DO NOT** use the submitter's address here as it will be forgery
        //and will cause your messages to fail SPF checks
        $mail->setFrom($_POST['email'], 'First Last');
        //Send the message to yourself, or whoever should receive contact for submissions
        $mail->addAddress('lumnesty@gmail.com', 'John Doe');
        //Put the submitter's address in a reply-to header
        //This will fail if the address provided is invalid,
        //in which case we should ignore the whole request
        $mail->Subject = 'PHPMailer contact form';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
Email: {$_POST['email']}
Name: {$_POST['name']}
Message: {$_POST['message']}
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }

    }

}
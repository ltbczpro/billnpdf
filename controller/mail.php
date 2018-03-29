<?php


require __DIR__."/../app/loader.php";

require __DIR__."/../view/mail.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST["send"])){

    if ($_POST["email"] && $_POST["sendEmail"] && $_POST["object"] && $_POST["message"]) {

$mail = new PHPMailer();                              // Passing `true` enables exceptions
try {
    $mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "lucytbcz@gmail.com";
    $mail->Password = "8cs.12dm";
    $mail->SetFrom($_POST['email']);
    $mail->Subject = "Test";
    $mail->Body = "hello";
    $mail->AddAddress($_POST['sendEmail']);

    if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message has been sent";
    }
    //Attachments
    $mail->addAttachment('/var/tmp/'$bill['name']'.tar.gz');         // Add attachments
    //// Optional name

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}



}


}

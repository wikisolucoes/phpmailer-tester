<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//Load Composer's autoloader
require 'vendor/autoload.php';

if ($_REQUEST['smtp_host']) {

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = $_REQUEST['smtp_host']; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = $_REQUEST['smtp_user']; //SMTP username
        $mail->Password = $_REQUEST['smtp_pass']; //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
        $mail->Port = $_REQUEST['smtp_port']; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($_REQUEST['mail_from']);
        $mail->addAddress($_REQUEST['mail_to']);

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = 'PHPMailer E-mail Test';
        $mail->Body = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo '<h2 class="text-success">Message has been sent</h2>';
    } catch (Exception $e) {
        echo "<h2 class='text-danger'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</h2>";
    }
}
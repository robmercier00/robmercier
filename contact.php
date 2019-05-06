<?php
require 'PHPMailer/PHPMailerAutoload.php';

$name = htmlspecialchars_decode($_POST['name']);
$emailaddr = ($_POST['emailaddr']);
$message = htmlspecialchars_decode($_POST['message']);
$useragent = $_POST['useragent'];
$fullname = $_POST['fullname'];
if (!empty($name) && !empty($message)) {
    if ((strpos($name, '<a') !== FALSE) || (strpos($message, '<a') !== FALSE) || (strpos($message, 'http://') !== FALSE) || (strpos($name, 'http://') !== FALSE)) {
        die();
    } else {
        date_default_timezone_set('US/Eastern');
        $created_at = date('Y-m-d h:i:s', time());
        $email = '<table style="border: 1px solid #cfcfcf;"><tbody><th style="border-bottom: 4px solid #cfcfcf;" colspan="2">Contact Form</th>';
        $email .= '<tr><td style="font-weight: bold; border-bottom: 2px solid #cfcfcf;">Name:</td><td style="border-bottom: 2px solid #cfcfcf;">';
        $email .= $name . '</td></tr><tr><td style="font-weight: bold;border-bottom: 2px solid #cfcfcf;">Email Address: </td>';
        $email .= '<td style="border-bottom: 2px solid #cfcfcf;"> ' . $emailaddr . '</td></tr><tr>';
        $email .= '<td style="font-weight: bold;border-bottom: 2px solid #cfcfcf;">Message:</td><td style="border-bottom: 2px solid #cfcfcf;">';
        $email .= $message . '</td></tr><tr><td style="font-weight: bold; border-bottom: 2px solid #cfcfcf;">Sent at:</td>';
        $email .= '<td style="border-bottom: 2px solid #cfcfcf;">';
        $email .= $created_at . '</td></tr><td style="font-weight: bold;">Useragent:</td><td>';
        $email .= $useragent . '</td></tr>';
        $email .= '</tbody></table>';
        //Create a new PHPMailer instance
        $mail = new PHPMailer;

        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;
        $mail->Username = 'rob.mercier00@gmail.com';
        $mail->Password = "pbjtjlelbtkbifnw";

        //Set who the message is to be sent from
        $mail->setFrom($emailaddr, $name);
        //Set an alternative reply-to address
        $mail->addReplyTo($emailaddr, $name);
        //Set who the message is to be sent to
        $mail->addAddress('rob.mercier00@gmail.com', 'Rob Mercier');
        //Set the subject line
        $mail->Subject = 'robmercier.me contact form submission';
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $mail->msgHTML($email);
        //send the message, check for errors
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
        }
    }
} elseif (!empty($fullname) || empty($useragent)) {
    die();
} else {
    die();
}
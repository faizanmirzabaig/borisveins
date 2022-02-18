<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Load Composer's autoloader
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();

$mail->SMTPDebug = 1;
$mail->Host = "mail.borisveins.com";

$mail->Port = 587;
$mail->IsHTML(true);

//Set who the message is to be sent from
$mail->setFrom('mirzaasdasd@gmail.com', 'Faizan');

//Set an alternative reply-to address
// $mail->addReplyTo('replyto@gmail.com', 'Secure Developer');

//Set who the message is to be sent to
$mail->addAddress('mirzafaizan1931@gmail.com', 'faizan');
$mail->addAddress('Sanjaresolutions@gmail.com', 'farzana mam');

//Set the subject line
$mail->Subject = 'PHPMailer SMTP test';
//Read an HTML message body from an external file, convert referenced images to embedded,

//convert HTML into a basic plain-text alternative body
if($_SERVER["REQUEST_METHOD"] == "POST"){
     $name="$_POST[UserName]";
    $experience=" $_POST[UserEmail]";
    $contact=" $_POST[message]";
    $email="$_POST[subject] ";
    // $message="$_POST[message]";
    $html = "  
    <table style='width: 100%;border: 2px solid black;border-collapse: collapse;'>
           <tr style='width: 100%;border: 2px solid black;'>
           <th style='width: 20%;border: 2px solid black;'>Name</th>
           <th style='width: 20%;border: 2px solid black;'>Experience</th>
           <th style='width: 20%;border: 2px solid black;'>Contact Number</th>
           <th style='width: 20%;border: 2px solid black;'>Email</th>

        </tr>
        <tr style='width: 100%;border: 2px solid black;'>
            <th style='width: 20%;border: 2px solid black;'>$UserName</th>
            <th style='width: 20%;border: 2px solid black;'>$UserEmail</th>
            <th style='width: 20%;border: 2px solid black;'>$message</th>
            <th style='width: 20%;border: 2px solid black;'>$subject</th>
   
        </tr>
       </table>";
    $msgHtml = "$name $experience $contact $email $message";
$mail->msgHTML($html);

}

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';


// add attachment
// if ($_POST) {
//     // die($_POST);
//     $path = 'upload/' . $_FILES["resume"]["name"];
//     move_uploaded_file($_FILES["resume"]["tmp_name"], $path);
//     // var_dump($_POST);
//     var_dump($path);
   
    
//     $mail->AddAttachment($path);
//     var_dump($path,$name,$experience,$contact,$email,$message);
//     // die('$name');
// }


//send the message, check for errors
if (!$mail->send()) {
    header("Location:view.php");
} else {
    header("Location:messagesent.html");
}

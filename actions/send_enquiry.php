<?php

ob_start();
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

include_once("php_mailer/PHPMailer.php"); 
include_once("php_mailer/Exception.php"); 
include_once("php_mailer/SMTP.php"); 

function clean_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if (($_SERVER["REQUEST_METHOD"] == "POST")) {

    $name = clean_data($_POST['name']);
    $email = clean_data($_POST['email']);
    $phone = clean_data($_POST['phone']);
    $subject = clean_data($_POST['subject']);
    $message = clean_data($_POST['message']);

    $body = "You have received a new message from Website.<br>".
                        "Here are the details:<br>
                    Name: $name  <br>
                    Email: $email <br>
                    Mobile Number: $phone <br>
                    Message: $subject <br>
                    Message: $message"; 

    // Instantiation and passing `true` enables exceptions

    $mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.mailtrap.io';                     // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '';              // SMTP username
    $mail->Password   = '';              // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 2525;                                   // TCP port to connect to

    //Recipients
    $mail->setFrom('krish75@krish.com', 'Hari Krishna Velpula'); // From Email Address
    $mail->addAddress('krish75@krish.com', 'Hari Krishna Velpula');     // To Email Address
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "You have a got a New Form submission from website";
    $mail->Body    = $body;

    $result = $mail->send();

    if(!$result) {

        $_SESSION['fail'] = "Sorry !! Email sending failed";

        header('Location: ../contact-us.php');

    } else {

        $_SESSION['success'] = "Thank You for Contacting Us! We will get back to you";

        header('Location: ../contact-us.php');

    }


} else {

    $_SESSION['fail'] = "Some Unknown Error Happened !!!";

    header('Location: ../contact-us.php');

}

?>
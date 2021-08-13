<?php
$username = getenv('SMTP_USERNAME');
$password = getenv('SMTP_PASSWORD');
$host = getenv('SMTP_HOST');
$hero_id = "hero";
$hero_title = "Contactez-moi !";
$hero_subtitle = "Que puis-je faire pour vous ?";
$hero_text = "";
$uri = "page_content/contact_content.php";
$errors = [];
$success = false;

use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['email']) && isset($_POST['message'])) {
    try {

        $name = $_POST['name'];
        $email_addr = $_POST['email'];
        $message = $_POST['message'];

        require_once "forms/Email.php";
        require_once "forms/PHPMailer/PHPMailer.php";
        require_once "forms/PHPMailer/SMTP.php";
        require_once "forms/PHPMailer/Exception.php";
        $email = new Email($name, $email_addr, $message);
        if ($email->isValid()) {
            $mail_to_send = new PHPMailer(true);

            $mail_to_send->CharSet = "UTF-8";

            //smtp settings
            // $mail_to_send->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail_to_send->isSMTP();
            $mail_to_send->Host = $host;
            $mail_to_send->SMTPAuth = true;
            $mail_to_send->Username = $username;
            $mail_to_send->Password = $password;
            $mail_to_send->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail_to_send->Port = 465;

            //email settings
            $mail_to_send->isHTML(true);
            $mail_to_send->setFrom($email_addr, $name);
            $mail_to_send->addAddress("contact@yohan-saint-martin.fr");
            $mail_to_send->Subject = "Nouveau message de " . $name . " <" . $email_addr . ">";
            $mail_to_send->Body = $message;

            $mail_to_send->send();
            $success = true;
        } else {
            $errors = $email->getErrors();
        }
    } catch (Exception $e) {
        header("Mailer Error: {$mail_to_send->ErrorInfo}");
    }
}

require_once "base_layout.php";

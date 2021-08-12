<?php
$hero_id = "hero";
$hero_title = "Contactez-moi !";
$hero_subtitle = "Que puis-je faire pour vous ?";
$hero_text = "";
$uri = "page_content/contact_content.php";

use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['email']) && isset($_POST['message'])) {
    try {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        require_once "forms/PHPMailer/PHPMailer.php";
        require_once "forms/PHPMailer/SMTP.php";
        require_once "forms/PHPMailer/Exception.php";

        $mail_to_send = new PHPMailer(true);

        $mail_to_send->CharSet = "UTF-8";

        //smtp settings
        // $mail_to_send->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail_to_send->isSMTP();
        $mail_to_send->Host = "ssl0.ovh.net";
        $mail_to_send->SMTPAuth = true;
        $mail_to_send->Username = "contact@yohan-saint-martin.fr";
        $mail_to_send->Password = "gibson333";
        $mail_to_send->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail_to_send->Port = 465;

        //email settings
        $mail_to_send->isHTML(true);
        $mail_to_send->setFrom($email, $name);
        $mail_to_send->addAddress("contact@yohan-saint-martin.fr");
        $mail_to_send->Subject = "Nouveau message de " . $name . " <" . $email . ">";
        $mail_to_send->Body = $message;

        $mail_to_send->send();
    } catch (Exception $e) {
        header("Mailer Error: {$mail_to_send->ErrorInfo}");
    }
}

require_once "base_layout.php";

<?php
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['nome']) && isset($_POST['email'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //Configurando SMTP
    $mail->isSMTP();
    $mail->Host= 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'wferreiraramosjunior@gmail.com';
    $mail->P

}

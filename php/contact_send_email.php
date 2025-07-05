<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

// reCAPTCHA secret key
$secretKey = '6LezozUrAAAAAJcv0_QTlwqTeIHFypfeDfIHj3Bf'; // Replace with your reCAPTCHA secret key
$recaptcha = $_POST['g-recaptcha-response'] ?? '';

// reCAPTCHA validation
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$recaptcha");
$responseKeys = json_decode($response, true);

if (!$responseKeys["success"]) {
    die("reCAPTCHA verification failed.");
}

// Collect and sanitize form data
$name    = htmlspecialchars($_POST['name'] ?? '');
$email   = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$phone   = htmlspecialchars($_POST['phone'] ?? '');
$message = htmlspecialchars($_POST['message'] ?? '');

if (!$email) {
    die("Invalid email address.");
}

$mail = new PHPMailer(true);

try {
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'info.travelhubofficial@gmail.com'; 
    $mail->Password   = 'oikgypvrmufauafc';  // Gmail App Password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Email settings
    $mail->setFrom('info.travelhubofficial@gmail.com', 'Travel Hub');
    $mail->addReplyTo($email, $name);
    $mail->addAddress('info.travelhubofficial@gmail.com'); // Receiver email

    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Submission';
    $mail->Body    = "
        <h3>New Message Received</h3>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Message:</strong><br>" . nl2br($message) . "</p>
    ";

    $mail->send();
    echo "✅ Message sent successfully.";
} catch (Exception $e) {
    echo "❌ Message failed. Error: {$mail->ErrorInfo}";
}
?>

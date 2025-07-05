<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

// Google reCAPTCHA secret key
$recaptchaSecret = '6LezozUrAAAAAJcv0_QTlwqTeIHFypfeDfIHj3Bf';

// Database connection
$connection = new mysqli('127.0.0.1:3306', 'root', '', 'book_db');

if ($connection->connect_error) {
    die("Database connection failed: " . $connection->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send'])) {
    // Validate reCAPTCHA
    if (empty($_POST['g-recaptcha-response'])) {
        die('Please complete the reCAPTCHA.');
    }

    $response = file_get_contents(
        'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($recaptchaSecret) .
        '&response=' . urlencode($_POST['g-recaptcha-response'])
    );
    $responseKeys = json_decode($response, true);

    if (!$responseKeys["success"]) {
        die('reCAPTCHA verification failed.');
    }

    // Collect and sanitize form data
    $name      = htmlspecialchars($_POST['name'] ?? '');
    $email     = htmlspecialchars($_POST['email'] ?? '');
    $phone     = htmlspecialchars($_POST['phone'] ?? '');
    $address   = htmlspecialchars($_POST['address'] ?? '');
    $location  = htmlspecialchars($_POST['location'] ?? '');
    $guests    = htmlspecialchars($_POST['guests'] ?? '');
    $departure = htmlspecialchars($_POST['departure'] ?? '');
    $returning = htmlspecialchars($_POST['returning'] ?? '');
    $cost      = htmlspecialchars($_POST['cost'] ?? '');

    // Save to database
    $stmt = $connection->prepare(
        "INSERT INTO book_form (name, email, phone, address, location, guests, departure, `returning`, cost) 
         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"
    );

    if (!$stmt) {
        die("Prepare failed: " . $connection->error);
    }

    $stmt->bind_param("sssssssss", $name, $email, $phone, $address, $location, $guests, $departure, $returning, $cost);
    $stmt->execute();

    // Send email
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info.travelhubofficial@gmail.com';
        $mail->Password   = 'oikgypvrmufauafc'; // Replace with app password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('info.travelhubofficial@gmail.com', 'Travel Hub');
        $mail->addAddress($email, $name); // To user
        $mail->addAddress('info.travelhubofficial@gmail.com', 'Admin'); // To admin
        $mail->addReplyTo('info.travelhubofficial@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Trip Booking Confirmation';
        $mail->Body    = "
            <h2>Thank you for booking with us!</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Address:</strong> {$address}</p>
            <p><strong>Destination:</strong> {$location}</p>
            <p><strong>Guests:</strong> {$guests}</p>
            <p><strong>Departure Date:</strong> {$departure}</p>
            <p><strong>Return Date:</strong> {$returning}</p>
            <p><strong>Total Cost:</strong> {$cost}</p>
        ";

        $mail->send();
        echo "✅ Your booking has been sent successfully!";
    } catch (Exception $e) {
        echo "❌ Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    $stmt->close();
    $connection->close();

} else {
    echo "Invalid request.";
}
?>

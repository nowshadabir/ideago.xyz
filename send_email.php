<?php
header('Content-Type: application/json');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Path to PHPMailer, change this to your actual path
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Retrieve and decode the JSON data from the request body
$data = json_decode(file_get_contents('php://input'), true);

if (!$data) {
    echo json_encode(['success' => false, 'message' => 'Invalid data.']);
    exit;
}

$firstName = isset($data['firstName']) ? htmlspecialchars(strip_tags($data['firstName'])) : '';
$lastName = isset($data['lastName']) ? htmlspecialchars(strip_tags($data['lastName'])) : '';
$email = isset($data['email']) ? htmlspecialchars(strip_tags($data['email'])) : '';
$phone = isset($data['phone']) ? htmlspecialchars(strip_tags($data['phone'])) : '';
$service = isset($data['service']) ? htmlspecialchars(strip_tags($data['service'])) : '';
$message = isset($data['message']) ? htmlspecialchars(strip_tags($data['message'])) : '';
// $newsletter = isset($data['newsletter']) ? 'Yes' : 'No';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings for SMTP
    $mail->isSMTP();
    $mail->Host       = 'mail.ideago.xyz';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'hello@ideago.xyz';
    $mail->Password   = 'JossVaiaa@IDEAGO_Tech'; // Use the email account's password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use SMTPS for port 465
    $mail->Port       = 465;

    // Recipients
    $mail->setFrom($email, $firstName . ' ' . $lastName); // Set sender from the form
    $mail->addAddress('hello@ideago.xyz', 'IDEAGO Creative Agency'); // Recipient

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Submission from ' . $firstName . ' ' . $lastName;

    $emailBody = "
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> {$firstName} {$lastName}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Service:</strong> {$service}</p>
        
        <p><strong>Message:</strong><br>{$message}</p>
    ";
    $mail->Body = $emailBody;

    $mail->send();
    echo json_encode(['success' => true, 'message' => 'Message has been sent.']);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
}
?>
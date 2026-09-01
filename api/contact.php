<?php

header('Content-Type: application/json');
require __DIR__ . '/../config/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $message === '') {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please fill in your name, email, and message.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
    exit;
}

try {
    $stmt = $pdo->prepare(
        'INSERT INTO contact_messages (name, email, phone, message) VALUES (:name, :email, :phone, :message)'
    );
    $stmt->execute([
        ':name'    => $name,
        ':email'   => $email,
        ':phone'   => $phone !== '' ? $phone : null,
        ':message' => $message,
    ]);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Could not save your message. Please try again.']);
    exit;
}

$subject = 'Portfolio inquiry from ' . $name;

$emailBody = $message . "\n\nFrom: " . $name . ' (' . $email . ')';
if ($phone !== '') {
    $emailBody .= "\nPhone / WhatsApp: " . $phone;
}

require __DIR__ . '/../vendor/phpmailer/src/Exception.php';
require __DIR__ . '/../vendor/phpmailer/src/PHPMailer.php';
require __DIR__ . '/../vendor/phpmailer/src/SMTP.php';

$mailConfig = require __DIR__ . '/../config/mail-config.php';

$mailer = new PHPMailer\PHPMailer\PHPMailer(true);
$emailSent = true;
$emailError = '';

try {
    $mailer->isSMTP();
    $mailer->Host       = $mailConfig['smtp_host'];
    $mailer->SMTPAuth   = true;
    $mailer->Username   = $mailConfig['smtp_username'];
    $mailer->Password   = $mailConfig['smtp_password'];
    $mailer->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
    $mailer->Port       = $mailConfig['smtp_port'];

    $mailer->setFrom($mailConfig['from_email'], $mailConfig['from_name']);
    $mailer->addAddress($mailConfig['to_email']);
    $mailer->addReplyTo($email, $name);

    $mailer->isHTML(false);
    $mailer->Subject = $subject;
    $mailer->Body    = $emailBody;

    $mailer->send();
} catch (PHPMailer\PHPMailer\Exception $e) {
    $emailSent = false;
    $emailError = $mailer->ErrorInfo;
}

echo json_encode([
    'success' => true,
    'message' => 'Thanks, ' . $name . '! Your message has been sent.',
    'email_sent' => $emailSent,
]);

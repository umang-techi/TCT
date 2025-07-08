<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName  = $_POST['Name'];
    $userEmail = $_POST['Email'];
    $userMobile = $_POST['Mobile'];
    $category = $_POST['Category'];
    $checkIn = $_POST['Check_In'];
    $checkOut = $_POST['Check_Out'];
    $budget = $_POST['Budget'];
    $rooms = $_POST['Rooms'];
    $ipAddress = $_POST['ip_address'] ?? $_SERVER['REMOTE_ADDR'];

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'umanga09876@gmail.com';       // Your Gmail
        $mail->Password   = 'tpmj ppmt tzmr nipq';          // App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Email Setup
        $mail->setFrom('umanga09876@gmail.com', 'Housing Form');
        $mail->addAddress('umanga09876@gmail.com');         // Only to Admin

        $mail->isHTML(true);
        $mail->Subject = 'New Housing Form Submission';
        $mail->Body = "
            <h2>New Housing Form Submission</h2>
            <p><strong>Name:</strong> {$userName}</p>
            <p><strong>Email:</strong> {$userEmail}</p>
            <p><strong>Mobile:</strong> {$userMobile}</p>
            <p><strong>Category:</strong> {$category}</p>
            <p><strong>Check-In:</strong> {$checkIn}</p>
            <p><strong>Check-Out:</strong> {$checkOut}</p>
            <p><strong>Budget:</strong> {$budget}</p>
            <p><strong>Rooms:</strong> {$rooms}</p>
            <p><strong>IP Address:</strong> {$ipAddress}</p>
        ";

        $mail->send();

        // Redirect to thank you page
        header("Location: thanks.php");
        exit;

    } catch (Exception $e) {
        echo "Email sending failed: {$mail->ErrorInfo}";
    }
}
?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST['Full_Name'];
    $userEmail = $_POST['Email'];
    $phone = $_POST['Phone'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];

    $mail = new PHPMailer(true);

    try {
        // SMTP setup
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'umanga09876@gmail.com';         // Your Gmail
        $mail->Password = 'tpmj ppmt tzmr nipq';            // App password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Email to Admin (you)
        $mail->setFrom('umanga09876@gmail.com', 'Contact Form');
        $mail->addAddress('umanga09876@gmail.com');        // Your receiving email

        if (isset($_FILES['Attachment']) && $_FILES['Attachment']['error'] == UPLOAD_ERR_OK) {
            $mail->addAttachment($_FILES['Attachment']['tmp_name'], $_FILES['Attachment']['name']);
        }

        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission";

        $mail->Body = "
        <h2>Contact Form Details</h2>
        <p><strong>Name:</strong> {$userName}</p>
        <p><strong>Email:</strong> {$userEmail}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Subject:</strong> {$subject}</p>
        <p><strong>Message:</strong><br>{$message}</p>
        <p><strong>IP Address:</strong> {$_POST['ip_address']}</p>
        ";

        $mail->send();

        // Send thank-you email to user
        $mail->clearAddresses();
        $mail->addAddress($userEmail);
        $mail->Subject = "Thank you for contacting us!";
        $mail->Body = "
        <h3>Hi {$userName},</h3>
        <p>Thank you for contacting us. We’ve received your message and will respond soon.</p>
        <br>
        <p>Best regards,<br>TCT 2025 Team</p>
        ";
        $mail->send();

      // ✅ Redirect to thank-you page
        header("Location: thanks.php");
    
    } catch (Exception $e) {
        echo "Error: {$mail->ErrorInfo}";
    }
}
?>

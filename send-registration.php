<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);
    $thankYouMail = new PHPMailer(true); // For user

    try {
        // === Get form data ===
        $name = htmlspecialchars($_POST['Name']);
        $email = htmlspecialchars($_POST['Email']);
        $mobile = htmlspecialchars($_POST['Mobile']);
        $occupation = htmlspecialchars($_POST['Occupation']);
        $delegates = htmlspecialchars($_POST['Delegates']);
        $country = htmlspecialchars($_POST['Country']);
        $address = nl2br(htmlspecialchars($_POST['Address']));
        $ip = htmlspecialchars($_POST['ip_address'] ?? $_SERVER['REMOTE_ADDR']);

        // === Send email to admin ===
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'umanga09876@gmail.com';
        $mail->Password = 'tpmj ppmt tzmr nipq'; // App-specific password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('umanga09876@gmail.com', 'Form Notification');
        $mail->addAddress('umanga09876@gmail.com'); // Admin email

        $mail->isHTML(true);
        $mail->Subject = ' Registration Form TCT 2025';
        $mail->Body = "
            <strong>Name:</strong> $name<br>
            <strong>Email:</strong> $email<br>
            <strong>Contact Number:</strong> $mobile<br>
            <strong>Occupation:</strong> $occupation<br>
            <strong>Delegates:</strong> $delegates<br>
            <strong>Country:</strong> $country<br>
            <strong>Address:</strong> $address<br>
            <strong>IP Address:</strong> $ip<br>
        ";

        $mail->send();

        // === Send thank-you email to user ===
        $thankYouMail->isSMTP();
        $thankYouMail->Host = 'smtp.gmail.com';
        $thankYouMail->SMTPAuth = true;
        $thankYouMail->Username = 'umanga09876@gmail.com';
        $thankYouMail->Password = 'tpmj ppmt tzmr nipq';
        $thankYouMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $thankYouMail->Port = 587;

        $thankYouMail->setFrom('umanga09876@gmail.com', 'Your Event Team');
        $thankYouMail->addAddress($email); // User's email

        $thankYouMail->isHTML(true);
        $thankYouMail->Subject = 'Thank You for Your Registration';
        $thankYouMail->Body = "
            Dear $name,<br><br>
            Thank you for registering with us. We have received your details and will contact you soon.<br><br>
            <strong>Best regards,<br>Your Event Team</strong>
        ";

        $thankYouMail->send();

        // Redirect to thank-you page
        header("Location: http://localhost/myproj/thanks.php");
        exit();

    } catch (Exception $e) {
        echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

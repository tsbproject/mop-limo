<?php
session_start();
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Honeypot check
    if (!empty($_POST['website'])) {
        $_SESSION['email_message'] = "Spam detected.";
        $_SESSION['email_message_type'] = 'danger';
        header("Location: index.php");
        exit();
    }

    $recaptchaSecret = '6LfwHx4qAAAAAGdXZnXk85lULMonENovWKCBjlk4';
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    // Verify the reCAPTCHA response
    $recaptchaUrl = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha = file_get_contents($recaptchaUrl . '?secret=' . $recaptchaSecret . '&response=' . $recaptchaResponse);
    $recaptcha = json_decode($recaptcha);

    if (!$recaptcha->success) {
        $_SESSION['email_message'] = "ReCAPTCHA verification failed.";
        $_SESSION['email_message_type'] = 'danger';
        header("Location: index.php");
        exit();
    }

    $full_name = isset($_POST['full_name']) ? htmlspecialchars($_POST['full_name']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    // Database connection
    $mysqli = new mysqli("localhost", "root", "", "acelubricant_db");

    if ($mysqli->connect_error) {
        $_SESSION['email_message'] = "Connection failed: " . $mysqli->connect_error;
        $_SESSION['email_message_type'] = 'danger';
        header("Location: index.php");
        exit();
    }

    // Check if table exists
    $result = $mysqli->query("SHOW TABLES LIKE 'contact_form'");
    if ($result->num_rows == 0) {
        $_SESSION['email_message'] = "Table 'contact_form' does not exist. Please create the table in the database.";
        $_SESSION['email_message_type'] = 'danger';
        header("Location: contact.php");
        exit();
    }

    // Prepare and bind
    $stmt = $mysqli->prepare("INSERT INTO contact_form (full_name, email, phone, message) VALUES (?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("ssss", $full_name, $email, $phone, $message);
        if ($stmt->execute()) {
            $_SESSION['email_message'] = "";
            $_SESSION['email_message_type'] = 'success';
        } else {
            $_SESSION['email_message'] = "Error: " . $stmt->error;
            $_SESSION['email_message_type'] = 'danger';
        }
        $stmt->close();
    } else {
        $_SESSION['email_message'] = "Error: " . $mysqli->error;
        $_SESSION['email_message_type'] = 'danger';
    }

    $mysqli->close();

    // Sending email using PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'mail.acelubricant.com'; // Replace with your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'mail@acelubricant.com'; // Replace with your SMTP username
        $mail->Password = 'Avclm240%_!@$'; // Replace with your SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('mail@acelubricant.com', $first_name); // Using a fixed email address for the 'From' field
        $mail->addAddress('crescentintegproject@gmail.com'); // Replace with the external email address

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Contact Form Submission';
        $mail->Body    = "Name: $full_name<br>Email: $email<br>Phone: $phone<br>Message: $message";

        $mail->send();
        $_SESSION['email_message'] = "Email sent successfully.";
        $_SESSION['email_message_type'] = 'success';
    } catch (Exception $e) {
        $_SESSION['email_message'] = "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
        $_SESSION['email_message_type'] = 'danger';
    }

    header("Location: index.php");
    exit();
}
?>

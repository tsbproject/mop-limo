<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $name = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "marvelcreativemedia@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    $mailBody = "Name: $name\nEmail: $email\n\n$message";

    // You can use the mail() function to send the email
    mail($to, $subject, $mailBody, $headers);

    // Optionally, you can redirect the user to a thank you page
    header("Location: thank-you.html");
    exit();
}
?>

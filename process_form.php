<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $name = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Email recipient
    $to = "marvelcreativemedia@gmail.com"; // Change this to your email address
    
    // Email subject
    $subject = "New Contact Form Submission";
    
    // Email body
    $body = "Name: $name\n";
    $body = "Phone: $phone\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";
    
    // Email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Send email
    if (mail($to, $subject, $body, $headers)) {
        http_response_code(200);
        echo json_encode(array("message" => "Thank you for your message. We will get back to you soon!"));
    } else {
        http_response_code(500);
        echo json_encode(array("error" => "Sorry, there was an error sending your message."));
    }
} else {
    http_response_code(400);
    echo json_encode(array("error" => "Error: Invalid form submission."));
}
?>

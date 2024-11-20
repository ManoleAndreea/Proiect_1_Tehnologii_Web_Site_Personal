<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "your-email@example.com"; // Replace with your email
    $subject = "New Message from Contact Form";
    
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $country = $_POST['country'];
    $message = $_POST['subject'];
    
    $body = "First Name: $firstName\nLast Name: $lastName\nCountry: $country\n\nMessage:\n$message";
    
    $headers = "From: no-reply@example.com"; // Optional header
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Email successfully sent!";
    } else {
        echo "Email sending failed.";
    }
}
?>

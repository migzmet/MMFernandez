<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set email variables
    $to = "fernandezmigueljoshua@gmail.com";  // Replace with your email address
    $subject = "New Contact Form Submission";
    $body = "You have received a new message from $name ($email):\n\n$message";

    // Send the email
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message sending failed.";
    }
}
?>

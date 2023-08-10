<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Set your email address
    $to = "filomenoponce580@gmail.com";
    
    // Subject of the email
    $subject = "New Message from $name";
    
    // Message content
    $email_message = "Name: $name\nEmail: $email\nMessage:\n$message";
    
    // Additional headers
    $headers = "From: $email";
    
    // Send the email
    mail($to, $subject, $email_message, $headers);
    
    // Redirect back to the form or a thank you page
    header("Location: thank_you.html");
    exit();
}
?>
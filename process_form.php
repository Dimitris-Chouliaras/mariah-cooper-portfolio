<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $fullName = htmlspecialchars(trim($_POST['fullName']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Basic validation (ensure required fields are filled)
    if (empty($fullName) || empty($email) || empty($message)) {
        $errorMessage = "Please fill in all required fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = "Invalid email address.";
    } else {
        // Email setup
        $to = "your-email@example.com"; // Replace with your email
        $emailSubject = "New Message from Contact Form: $subject";
        $emailBody = "Name: $fullName\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
        $headers = "From: $email";

        // Attempt to send the email
        if (mail($to, $emailSubject, $emailBody, $headers)) {
            $successMessage = "Thank you! Your message has been sent.";
        } else {
            $errorMessage = "Sorry, something went wrong. Please try again later.";
        }
    }
}
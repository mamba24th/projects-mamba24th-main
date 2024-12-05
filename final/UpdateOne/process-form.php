<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the form is submitted via POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $hobby = htmlspecialchars(trim($_POST['hobby']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate the email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Store or process the form data (e.g., send email)
    $to = "your_email@example.com"; // Replace with your email
    $subject = "New Contact Form Submission";
    $body = "You have received a new message from your website contact form.\n\n".
            "Name: $name\n".
            "Email: $email\n".
            "Favorite Hobby: $hobby\n\n".
            "Message:\n$message";

    $headers = "From: webmaster@example.com"; // Replace with your email

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        // Thank you message after successful submission
        echo "<h2>Thank you for your message, $name. We will get back to you soon.</h2>";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $hobby = htmlspecialchars(trim($_POST['hobby']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format. Please go back and try again.");
    }

    // Display a simple thank-you message
    echo "<h1>Thank you for your message, $name!</h1>";
    echo "<p>We have received your message:</p>";
    echo "<p><strong>Favorite Hobby:</strong> $hobby</p>";
    echo "<p><strong>Message:</strong> $message</p>";
    echo "<p>We will reply to <strong>$email</strong> soon!</p>";
}
?>

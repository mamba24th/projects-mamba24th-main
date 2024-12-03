<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $hobby = $_POST['hobby'];
    $message = $_POST['message'];

    // Validate input (basic)
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Process the data (e.g., save to database or send an email)
        // For simplicity, we'll just display it here
        echo "<h1>Thank you for your message!</h1>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Hobby: $hobby</p>";
        echo "<p>Message: $message</p>";
    } else {
        echo "<p>Please fill in all fields.</p>";
    }
}
?>

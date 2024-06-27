<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['conName']);
    $lastName = htmlspecialchars($_POST['conLName']);
    $email = htmlspecialchars($_POST['conEmail']);
    $phone = htmlspecialchars($_POST['conPhone']);
    $service = htmlspecialchars($_POST['conService']);
    $message = htmlspecialchars($_POST['conMessage']);

    $to = "dhruvrohit171@gmail.com";
    $subject = "Contact Form Submission";
    $body = "First Name: $firstName\nLast Name: $lastName\nEmail: $email\nPhone: $phone\nService: $service\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "Invalid request method.";
}
?>

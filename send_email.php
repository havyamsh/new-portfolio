<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST["phone"]);
    $message = strip_tags(trim($_POST["message"]));

    $to = "havyamshp@gmail.com"; // Your email
    $subject = "New Portfolio Contact: $name";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: thank-you.html"); // Success page
    } else {
        echo "Error sending message.";
    }
}
?>
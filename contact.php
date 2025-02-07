<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Prepare email
    $to = "whoareyou20062021@gmail.com"; // Replace with your Gmail
    $subject = "User Feedback from $name";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(["status" => "success", "message" => "Message successfully sent!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Message delivery failed."]);
    }
}
?>

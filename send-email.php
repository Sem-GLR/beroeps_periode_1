<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("Method not allowed.");
}

// Get the submitted form data
$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$topic = trim($_POST["topic"] ?? "");
$message = trim($_POST["message"] ?? "");

// Only accept topics offered by the form.
$allowedTopics = ["Recipe question", "Account help", "Feedback", "Chat with us", "Need some help?"];
if (!in_array($topic, $allowedTopics, true)) {
    $topic = "General contact";
}

// Validate the input
if ($name === "" || !filter_var($email, FILTER_VALIDATE_EMAIL) || $message === "") {
    exit("Please enter a valid name, email, and message.");
}

// Prevent excessively large submissions
if (strlen($name) > 200 || strlen($email) > 254 || strlen($message) > 10000) {
    exit("Your submission is too long.");
}

// Use a real mailbox on the site's domain. Configure this address in your hosting mail settings.
$to = "#";
$from = "#";

// Email subject
$subject = "Contact form: " . $topic;

// Email contents
$body = "Name: " . $name . "\n";
$body .= "Email: " . $email . "\n";
$body .= "Topic: " . $topic . "\n\n";
$body .= "Message:\n" . $message;

$headers = "From: FoodFreaks website <" . $from . ">\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send the email
if (mail($to, $subject, $body, $headers)) {
    header("Location: contact-form.php?sent=1", true, 303);
    exit;
}

http_response_code(500);
echo "Sorry, your message could not be sent.";

?>

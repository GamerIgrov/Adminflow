<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = "support@admin-flow.com";
    $subject = "Write message...";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $message = $_POST['message'];

    $content = "name: " . $name . "\n";
    $content .= "Email: " . $email . "\n";
    $content .= "Phone Number: " . $phone_number . "\n";
    $content .= "Message: " . $message;

    $headers = "From: " . $email . "\r\n" .
        "Reply-To: " . $email . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $content, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>

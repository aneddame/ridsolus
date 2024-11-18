<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Example: Save to a file or send an email
    file_put_contents('messages.txt', "Name: $name\nEmail: $email\nMessage: $message\n\n", FILE_APPEND);

    echo "Thank you, $name! Your message has been sent.";
}
?>

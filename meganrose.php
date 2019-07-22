<?php
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    $from = 'admin@meganr.design';
    $subject = 'Message from Megan Rose Design!';
    $body = 'You have received the following message from the user ' . $name . ' at ' . $email . ': ' . $message;
    $to = 'meg.teacher@gmail.com';
    $headers = 'From: ' . $from . '\r\n' . 'Reply-To: ' . $email . '\r\n';

    mail($to, $subject, $body, $headers);
    echo 'Submitted';
?>

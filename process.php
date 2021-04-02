<?php

if (isset($_POST['btn-send'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['msg'];

    if (empty($username) || empty($email) || empty($subject) || empty($message)) {
        header('location:index.php?error');
    } else {
        $to = 'info@playhousemedia.net';

        if (mail($to, $subject, $message, $email)) {
            header("location:index.php?success");
        }
    }
} else {
    header("location:index.php");
}

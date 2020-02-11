<?php

    include "./controller.php";

    $email = $_POST['email'];
    $message = $_POST['message'];
    $feedback = new Controller;

    $feedback->send_feedback($email, $message);
?>
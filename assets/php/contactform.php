<?php

if (isset($<POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "noelabigail2020@gmail.com";
    $headers = "From: ".$mailFrom

    mail($mailTo, $message, $headers);
}
?>
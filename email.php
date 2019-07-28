<?php

if($_POST["submit"]) {
    $recipient="aval8876@gmail.com";
    $subject="Form to email message";
    $name=$_POST["name"];
    $email=$_POST["email"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];

    $mailBody="Name: $name\nEmail: $email\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $name <$email>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>

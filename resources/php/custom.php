<?php
if($_POST["submit"]) {
    $recipient="aval8876@gmail.com";
    $subject="custom request";
    $name=$_POST["name"];
    $email=$_POST["email"];
    $amount=$_POST["amount"];
    $design=$_POST["design"];
    $timeline=$_POST["timeline"];
    $hear=$_POST["hear"];
    $source=$_POST["source"];
    $myFile=$_POST["myFile"];
    $agree=$_POST["agree"];

    $mailBody="Name: $name\nEmail: $email\n\nAmount: $amount\n\nDesign: $design\n\nTimeline: $timeline\n\Heard from: $hear\n\nSource: $source\n\nFile: $myFile\n\nAgree: $agree";

    mail($recipient, $subject, $mailBody, "From: $name <$email>");

    $thankYou="<p>Thank you! Your custom request has been sent.</p>";
}
 ?>

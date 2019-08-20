<?php
/*
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

    $mailBody=;

    mail($recipient, $subject, $mailBody, "From: $name <$email>");

    $thankYou="<p>Thank you! Your custom request has been sent.</p>";
}
 */
Allow: GET, POST, HEAD;

 $webmaster_email = "aval8876@gmail.com";

 /*
 This bit sets the URLs of the supporting pages.
 If you change the names of any of the pages, you will need to change the values here.
 */
 $website = "www.aval18.github.io/#custom.com";

 $name = $_POST["name"];
 $email=$_POST["email"];
 $amount=$_POST["amount"];
 $design=$_POST["design"];
 $timeline=$_POST["timeline"];
 $hear=$_POST["hear"];
 $source=$_POST["source"];
 $myFile=$_POST["myFile"];
 $agree=$_POST["agree"];
 $msg =
 "Name: " . $name . "\r\n" .
 "Email: " . $email . "\r\n" .
 "Amount: " . $amount . "\r\n" .
 "Design: " . $design . "\r\n" .
 "Timeline: " . $timeline . "\r\n" .
 "Heard from: " . $hear . "\r\n" .
 "Source: " . $source . "\r\n" .
 "File: " . $myFile . "\r\n" .
 "Agree: " . $agree;


 // If we passed all previous tests, send the email then redirect to the thank you page.

 	mail( "$webmaster_email", "Custom inquiry", $msg );

 	header( "Location: $website" );
 ?>

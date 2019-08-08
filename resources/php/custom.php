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


 $webmaster_email = "aval8876@gmail.com";

 /*
 This bit sets the URLs of the supporting pages.
 If you change the names of any of the pages, you will need to change the values here.
 */
 $website = "../../index.html";

 $name = $_REQUEST["name"];
 $email=$_REQUEST["email"];
 $amount=$_REQUEST["amount"];
 $design=$_REQUEST["design"];
 $timeline=$_REQUEST["timeline"];
 $hear=$_REQUEST["hear"];
 $source=$_REQUEST["source"];
 $myFile=$_REQUEST["myFile"];
 $agree=$_REQUEST["agree"];
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

 /*
 The following function checks for email injection.
 Specifically, it checks for carriage returns - typically used by spammers to inject a CC list.
 */
 function isInjected($str) {
 	$injections = array('(\n+)',
 	'(\r+)',
 	'(\t+)',
 	'(%0A+)',
 	'(%0D+)',
 	'(%08+)',
 	'(%09+)'
 	);
 	$inject = join('|', $injections);
 	$inject = "/$inject/i";
 	if(preg_match($inject,$str)) {
 		return true;
 	}
 	else {
 		return false;
 	}
 }
 /*
 If email injection is detected, redirect to the error page.
 If you add a form field, you should add it here.
 */
 elseif ( isInjected($email_address) || isInjected($first_name)  || isInjected($comments) ) {
 header( "Location: $error_page" );
 }

 // If we passed all previous tests, send the email then redirect to the thank you page.
 else {

 	mail( "$webmaster_email", "Feedback Form Results", $msg );

 	header( "Location: $website" );
 }
 ?>

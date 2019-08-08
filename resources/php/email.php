<?php
Allow: GET, POST, HEAD;
function IsInjected($str) {
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
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($visitor_email))

{

    echo "Bad email value!";

    exit;
}

if($_POST["submit"]) {

    $name=$_POST["name"];
    $email=$_POST["email"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];

    $email_subject = "New contact format submission";
    $email_body = "Here is the message:\n $message".

    $to = "aval8876@gmail.com";

    mail($to,$email_subject,$email_body);


    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>

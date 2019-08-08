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

    $name=$_POST["name"];
    $email=$_POST["email"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];

    $email_from = "pinkberryloverz@gmail.com";
    $email_subject = "New contact format submission";
    $email_body = "Name: $name.\n".
                  "Message: $message \n".;

    $to = "aval8876@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: ../../index.html")


?>

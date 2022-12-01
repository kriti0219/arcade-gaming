<?php

$to_email = "aj007ij@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "http://localhost/tuts/login.php";
$headers = "From: adarshmohantydelhi@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
?>
<?php
$toEmail = "abc@gmail.com";
$subject = "Confirmation Email using php";
$body = "Sent using php";
$headers = "From : donald@gmail.com";

if (mail($toEmail, $subject, $body, $headers)) {
    echo "Email sent successfully to $to_email <br>";
} else {
    echo "Email sending failed <br>";
}
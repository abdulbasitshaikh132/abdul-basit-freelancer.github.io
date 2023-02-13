<?php
$name = $_POST['name'];
$email = $_POST['email'];
$project = $_POST['project'];
$message = $_POST['message'];
$to = "abdulbasitshaikh128@gmail.com";
$subject = "mail fom abdul_basit_Freelancer";
$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n project =" . $project .  "\r\n message =" . $message;
// $headers = "Form : noreply@abdulbasit-freelancer.github.io" . "\r\n" . "CC: Somebodyelse@example.com";
$headers = "Form : abdulbasit-freelancer.github.io" . "\r\n" . "CC: Somebodyelse@example.com";
if($email !=NULL) {
        mail($to,$subject,$txt,$headers);
}

header("Location:contact.html")
?>
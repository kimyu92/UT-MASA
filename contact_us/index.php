<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type');

$myemail = 'kimyu_92@hotmail.com';
if (isset($_POST['name'])) {
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$subject = strip_tags($_POST['subject']);
$message = strip_tags($_POST['message']);
echo "<span class=\"alert alert-success\" >Your message has been received. Thanks! Here is what you submitted:</span><br><br>";
echo "<stong>Name: </strong> ".$name."<br>";	
echo "<stong>Email: </strong> ".$email."<br>";
echo "<stong>Subject: </strong> ".$subject."<br><br>";	
echo "<stong>Message: </strong> ".$message."<br>";

$to = $myemail;
$email_subject = "MASA UT - $subject by $name";
$email_body = "You have just received a new message posted by a visitor of UT MASA official Site. \n\n".
"Here are the details:\n".
"Name: $name \n ".
"Email: $email\n".
"Message: \n $message \n\n".
"==================================================================\n".
"END\n".
"==================================================================\n".
"Error? Please contact kimyu_92@hotmail.com for further support. Thank you.";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email";
mail($to,$email_subject,$email_body,$headers);
}?>
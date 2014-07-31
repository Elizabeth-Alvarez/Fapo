<?php


$link = mysql_connect(
  ':/Applications/MAMP/tmp/mysql/mysql.sock',
  'root',
  'root'
);

$to = "elizabeth.alvarez6@gmail.com"; //EMAIL NEEDS TO BE CHANGED...TESTING PURPOSES
$email_subject = "New Form submission";

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];



$email_body = <<<EMAIL
 Hola FAPOE. You have received a new message from $name.

    
	Here is the message:
	
	$message
	
	
$name
$email
$phone
	
EMAIL;
    
$headers = "From: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header('Location: ../website/thanks.html'); //Redirects to a thank you page.


// Function to validate against any email injection attempts
function IsInjected($str)
{
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
   
?> 
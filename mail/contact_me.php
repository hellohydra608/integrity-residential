<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['street'])      ||
   empty($_POST['city'])      ||
   empty($_POST['startDate'])      ||
   empty($_POST['position'])      ||
   empty($_POST['dob'])      ||
   empty($_POST['ssn'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
 
$resume = strip_tags(htmlspecialchars($_POST['resume']));   
$name = strip_tags(htmlspecialchars($_POST['name']));
$street = strip_tags(htmlspecialchars($_POST['street']));
$city = strip_tags(htmlspecialchars($_POST['city']));
$state = strip_tags(htmlspecialchars($_POST['state']));
$startDate = strip_tags(htmlspecialchars($_POST['startDate']));
$position = strip_tags(htmlspecialchars($_POST['position']));
$dob = strip_tags(htmlspecialchars($_POST['dob']));
$ssn = strip_tags(htmlspecialchars($_POST['ssn']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'contact@hellohydra.com'; // Add your email address in between the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nResume: $resume\n\nName: $name\n\nStart Date: $startDate\n\nPosition: $position\n\nDOB: $dob\n\nSSN: $ssn\n\nStreet: $street\n\nCity: $city\n\nState: $state\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@hellohydra.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;

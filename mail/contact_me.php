<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	   echo "No arguments Provided!";
	   return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Create the email and send the message
$to = 'emmanuelle.mulliez@gmail.com';
$email_subject = "Demande de contact trampoline : $name";
$email_body = "Vous avez reçu un nouveau message du site Trampoline.\n\n"."Voici les détails:\n\nNom : $name\n\nEmail : $email_address\n\nTéléphone : $phone\n\nMessage :\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
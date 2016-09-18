<?php
// Check for empty fields
if(empty($_POST['nome'])  		||
   empty($_POST['email']) 		||
   empty($_POST['fone']) 		||   empty($_POST['mensagem'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = strip_tags(htmlspecialchars($_POST['nome']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['fone']));
$message = strip_tags(htmlspecialchars($_POST['mensagem']));
	
// Create the email and send the message
$to = 'ecfrs@bol.com.br'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website pessoal:  $nome";
$email_body = "Você recebeu uma mensagem através de seu website.\n\n"."Veja os dados aqui :\n\nName: $nome\n\nEmail: $email_address\n\nPhone: $fone\n\nMessage:\n$mensagem";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>

<?php 
	$title = "Main page";
	require("header.php");
	require("vendor/autoload.php");

	$mail = new PHPMailer\PHPMailer\PHPMailer();
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	//$mail->SMTPDebug = 2;
	$mail->isHTML(true);
	$mail->SMTPOptions = array(
	    'ssl' => array(
	        'verify_peer' => false,
	        'verify_peer_name' => false,
	        'allow_self_signed' => true
	    )
	);
	$mail->From = "just.for.the.project26@gmail.com";

	$mail->Host = 'smtp.gmail.com';
	$mail->Username = 'just.for.the.project26@gmail.com';
	$mail->Password = 'for_the_project100';
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;

	$mail->addReplyTo("just.for.the.project26@gmail.com",'MG');
	//$mail->addAddress('atanas.vasilev.dobrev@gmail.com','Atanas Dobrev');
	//$mail->addAddress('yoni2000@abv.bg','Yoan Salambashev');
	$mail->addAddress('dani.levski00@gmail.com','Alex Zamyarski');

	$mail->Subject = 'My first email sent via PHPMailer :)';
	$mail->Body = "<h1 style='color: red;'>Здравейте, деца!</h1><br> Насладете се на имейла си :)";
	$mail->AltBody = 'This is the other body of an email';

	if($mail->send())
		echo 'Message sent.<br>';
	else
		echo 'Message not sent.<br>';

?>

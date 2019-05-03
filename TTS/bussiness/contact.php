<?php
$name   	= $_POST['Name'];	
$subject	= $_POST['Subject'];
$mail		= $_POST['Email'];
$message	= $mail." Este correo envía un correo solicitando: ".$_POST['Message'];




mail('sergdios09@gmail.com', $subject, $message);

header('Location: ../contact.html');
?>

<?php

$name = $_POST['name'];
$name = htmlspecialchars($name);
$name = urldecode($name);
$name = trim($name);

$email = $_POST['email'];
$email = htmlspecialchars($email);
$email = urldecode($email);
$email = trim($email);

$phone = $_POST['phone'];
$phone = htmlspecialchars($phone);
$phone = urldecode($phone);
$phone = trim($phone);

$message = $_POST['message'];
$message = htmlspecialchars($message);
$message = urldecode($message);
$message = trim($message);


if (mail("hello@gagarin.dp.ua", "Gagarin frontend Бесплатная консультация", "Имя: ".$name. "\nE-mail: ".$email. "\nТелефон " .$phone. "\nСообщение: " .$message , "From: hello@gagarin.dp.ua \r\n"))
	{	echo "Сообщение отправлено, все хорошо!";  
		header("Location: ./index.html");
	} else { 
		echo "при отправке сообщения возникли ошибки";
	}


?>

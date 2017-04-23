<?php

$name = $_POST['name'];
$name = htmlspecialchars($name);
$name = urldecode($name);
$name = trim($name);

$email = $_POST['email'];
$email = htmlspecialchars($email);
$email = urldecode($email);
$email = trim($email);

if (mail("hello@gagarin.dp.ua", "Gagarin frontend Забрать подарок", "Имя: ".$name. "\nE-mail: ".$email , "From: hello@gagarin.dp.ua \r\n"))
	{	echo "Сообщение отправлено, все хорошо!";  
		header("Location: ./index.html");
	} else { 
		echo "при отправке сообщения возникли ошибки";
	}


?>

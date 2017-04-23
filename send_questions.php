<?php

$contacts_name = $_POST['contacts_name'];
$contacts_name = htmlspecialchars($contacts_name);
$contacts_name = urldecode($contacts_name);
$contacts_name = trim($contacts_name);

$contacts_email = $_POST['contacts_email'];
$contacts_email = htmlspecialchars($contacts_email);
$contacts_email = urldecode($contacts_email);
$contacts_email = trim($contacts_email);

$contacts_message = $_POST['contacts_message'];
$contacts_message = htmlspecialchars($contacts_message);
$contacts_message = urldecode($contacts_message);
$contacts_message = trim($contacts_message);

$contacts_phone = $_POST['contacts_phone'];
$contacts_phone = htmlspecialchars($contacts_phone);
$contacts_phone = urldecode($contacts_phone);
$contacts_phone = trim($contacts_phone);


if (mail("hello@gagarin.dp.ua", "Gagarin frontend Вопросы на сайте", "Имя: ".$contacts_name. "\nE-mail: ".$contacts_email. "\nСообщение: " .$contacts_message. "\nТелефон " .$contacts_phone , "From: hello@gagarin.dp.ua \r\n"))
	{	echo "Сообщение отправлено, все хорошо!";  
		header("Location: ./contacts.html");
	} else { 
		echo "при отправке сообщения возникли ошибки";
	}


?>

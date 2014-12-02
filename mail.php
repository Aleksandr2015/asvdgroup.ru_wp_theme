<?php
$name = $_POST['name'];
$mail_or_phone = $_POST['mail_or_phone'];
$comments = $_POST['comments'];
$message = '<html><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><body>';
$message .= '<h3>Имя:</h3>'.$name.'<h3>Телефон:</h3>'.$mail_or_phone.'<h3>Комментарий:</h3>'.$comments;
$message .= '</body></html>';
$headers = "MIME-Version: 1.0"."\r\n";
$headers .= "Content-Type: text/html; charset=utf-8"."\r\n"; // можно отправлять письмо в html
$headers .= "From: asvdgroup.ru";
mail('charleksvik@gmail.com, info@asvdgroup.ru, asvdgroup@mail.ru', 'Письмо с нашего сайта asvdgroup.ru', $message, $headers);
header("location: ".$_SERVER['HTTP_REFERER']);
//header("Location: after-send.html");
exit;
?>
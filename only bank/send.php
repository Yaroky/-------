<?php

$emaill = $_POST['emaill'];

$emaill = htmlspecialchars($emaill);
$emaill = urldecode($emaill);
$emaill = trim($emaill);
// echo $emaill;


if(mail("alekno.yaroslav@gmail.com", "E-mail: ".$emaill ,"From: alekno.arina@gmail.com \r\n"))
{
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}


// header('location: ' . $_SERVER['HTTP_REFERER']); // либо явно указать путь к форме
// exit();

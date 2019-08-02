<?php
//Принимаем постовые данные
$name=$_POST['name'];
$phone=$_POST['phone'];
$what=$_POST['what'];
//Тут указываем на какой ящик посылать письмо
$to = "lamer1396@yandex.ru";
//Далее идёт тема и само сообщение
$subject = "Заявка с сайта ЖАЛЮЗИ";
$message = "
Письмо отправленно из моей формы.<br />
Пользователь хочет: ".htmlspecialchars($what)."<br />
Имя: ".htmlspecialchars($name)."<br />
Телефон: ".htmlspecialchars($phone);
$headers = "From: onionbuld.site88.net <site-email@onionbuld.site88.net>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
header('Location: thanks.html');
exit();
?>
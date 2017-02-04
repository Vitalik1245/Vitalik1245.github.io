<?php
//принемаем простые данные 
$name=$_POST['name'];
$phone=$_POST['phone'];
$what=$_POST['what'];
// Тут указываем на какой ящик посылать письмо
$to= "vitalik-poker@tut.by";
// Далие идет тема и само сообщение
$subject= "Заявка с сайта ";
$message= "
Письмо отправлено из моей формы.<br/>
Пользователь хочет: ".htmlspecialchars($what)."<br />
Имя: ".htmlspecialchars($name)."<br />
Телефон: ".htmlspecialchars($phone);
$headres ="From: mysite.ru <site-email@mysite.ru>\r\nContent-type: text/html; charset=utf-8 \r\n";
mail ($to, $subject, $message, $headres);
header('Location: thanks.html');
exit();
?>

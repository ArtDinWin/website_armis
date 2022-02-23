<?php
// Задача Задача № 68 изучить работу composer для win
// 2. запустить powershell ( лучше чем cmd) и проверить введя composer require phpmailer/phpmailer должна загрузится библиотека PHPMailer
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

$mail->Host = 'smtp.yandex.ru';
$mail->SMTPAuth = true;
$mail->Username = 'armis-dveri@yandex.ru'; // логин от вашей почты
$mail->Password = '87#af^sd87&7df'; // пароль от почтового ящика
$mail->SMTPSecure = 'ssl';
$mail->Port = '465';

$mail->CharSet = 'UTF-8';
$mail->From = ''; // адрес почты, с которой идет отправка
$mail->FromName = ''; // имя отправителя
$mail->addAddress('dinafpva@mail.ru', '');
$mail->addAddress('the-ghetto@yandex.com', '');
//$mail->addCC('email3@email.com');

$mail->isHTML(true);

$mail->Subject = 'Тема письма';
$mail->Body = 'Привет, мир! <p>Это строка <b>HTML кода</b></p>';
$mail->AltBody = 'Привет, мир! Это альтернативное письмо';
//$mail->addAttachment('img/Lighthouse.jpg', 'Картинка Маяк.jpg');
// $mail->SMTPDebug = 1;

if( $mail->send() ){
    echo 'Письмо отправлено';
}else{
    echo 'Письмо не может быть отправлено. ';
    echo 'Ошибка: ' . $mail->ErrorInfo;
}

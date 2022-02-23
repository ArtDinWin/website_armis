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

$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'dinafpva@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'e5Un{ZF9'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->CharSet = 'UTF-8';
$mail->setFrom('dinafpva@mail.ru'); // от кого будет уходить письмо?
$mail->FromName = 'Фирма'; // имя отправителя
$mail->addAddress('dinafpva@mail.ru', '');
$mail->addAddress('armis-dveri@yandex.ru', '');
//$mail->addCC('email3@email.com');


$mail->isHTML(true);

$mail->Subject = 'Тема письма';
$text='<h1>Привет, мир!</h1> <img src="data:image/png;base64,/9j/4AAQSkZJRgABAQEAeAB4AAD/2wBDAAIBAQIBAQICAgICAgICAwUDAwMDAwYEBAMFBwYHBwcGBwcICQsJCAgKCAcHCg0KCgsMDAwMBwkODw0MDgsMDAz/2wBDAQICAgMDAwYDAwYMCAcIDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAz/wAARCAAZABcDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD5rooor8DP9oAooooAKKKKACiiigD/2Q==" /><p>Это строка <b>HTML кода</b></p>';
$mail->Body = 'Привет, мир! <p>Это строка <b>Mail</b></p> ' . $text;
$mail->AltBody = 'Привет, мир! Это альтернативное письмо';
//$mail->addAttachment('img/Lighthouse.jpg', 'Картинка Маяк.jpg');
// $mail->SMTPDebug = 1;

if( $mail->send() ){
    echo 'Письмо отправлено';
}else{
    echo 'Письмо не может быть отправлено. ';
    echo 'Ошибка: ' . $mail->ErrorInfo;
}

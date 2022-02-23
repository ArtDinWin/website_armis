<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
//if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
//if (isset($_POST['cd-name'])) {$name = $_POST['cd-name'];}
//if (isset($_POST['cd-email'])) {$email = $_POST['cd-email'];}
//if (isset($_POST['cd-textarea'])) {$comment = $_POST['cd-textarea'];}
$http_reff='http://armisplus.ru/tmp/';
date_default_timezone_set('Etc/UTC');
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);

$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;
$mail->Username = 'dinafpva@mail.ru'; // логин от вашей почты
$mail->Password = 'e5Un{ZF9'; // пароль от почтового ящика
$mail->SMTPSecure = 'ssl';
$mail->Port = '465';

$mail->CharSet = 'UTF-8';
$mail->From = ''; // адрес почты, с которой идет отправка
$mail->FromName = ''; // имя отправителя
$mail->addAddress('dinafpva@mail.ru', 'Имя');
$mail->addAddress('the-ghetto@yandex.com', 'Имя 2');
//$mail->addCC('email3@email.com');

$mail->isHTML(true);

$mail->Subject = 'Тема письма';





//$mail->setFrom('emailpost@myblogcom.fun');
//$mail->addAddress('blabla@email.com');// не шли на биги gmail hotmail yahoo сделай yandex или mail.ru ящик для тестов
$mail->XMailer = 'Gammadyne Mailer Version 24.4';// генератор Xmailer рандомно, грузить список из файла версия генерится цифрами в рандом
$mail->Subject = 'New message from  '.$http_reff;


$mail->Body    = '<h1>Привет, мир!</h1> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAABmJLR0QA/wD/AP+gvaeTAAAAB3RJTUUH1ggDCwMADQ4NnwAAAFVJREFUGJWNkMEJADEIBEcbSDkXUnfSgnBVeZ8LSAjiwjyEQXSFEIcHGP9oAi+H0Bymgx9MhxbFdZE2a0s9kTZdw01ZhhYkABSwgmf1Z6r1SNyfFf4BZ+ZUExcNUQUAAAAASUVORK5CYII="/><p>Это строка <b>HTML кода</b></p>User send message from site FORM '. ' Имя : '.$name.'  email : '.$email .' link :'. $http_reff . ' на номер : '.$phone.'комментарий : ' . $comment;

if (!$mail->send()) {
 echo "Error: " . $mail->ErrorInfo . ' ';
} else {
 echo "Your message is sent! user reply you soon!.";
}
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="refresh" content="3; url=<?php echo $http_reff;?>">
    <title>Thank you to sent email!</title>
    <meta name="generator">
    <style type="text/css">
        body
        {

            background: #22BFF7 ;

        }
        </style >

        <script type="text/javascript">
        setTimeout('location.replace("<?php echo $http_reff;?>")', 3000);
        </script>
          </head>
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgA
AAAoAAAAKCAYAAACNMs+9AAAABmJLR0QA/wD/AP+gvaeTAAAAB3RJ
TUUH1ggDCwMADQ4NnwAAAFVJREFUGJWNkMEJADEIBEcbSDkXUnfSg
nBVeZ8LSAjiwjyEQXSFEIcHGP9oAi+H0Bymgx9MhxbFdZE2a0s9kT
Zdw01ZhhYkABSwgmf1Z6r1SNyfFf4BZ+ZUExcNUQUAAAAASUVORK5
CYII="/>


            </body>
              </html>
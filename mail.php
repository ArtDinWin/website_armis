<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$rand_my=rand(0, 1).rand(1, 9).rand(1, 9).rand(1, 9);
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
$mytext = 'Вы не ввели:';
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$txt = $_POST['message'];


if( (!empty($_POST['user_name']))  && (!empty($_POST['user_email'])) && (!empty($_POST['user_phone']))  ) {
   
} else {
	
	
	if (!empty($_POST['user_name']))
	{
		$mytext = $mytext.'<br>&#10004; <del>Ваше имя</del>';
	} else {
		
		$mytext = $mytext.'<br>&#10008; Ваше имя';
	}
	
	
	
	if (!empty($_POST['user_email']))
	{
		$mytext = $mytext.'<br>&#10004; <del>email</del>';
	} else {
		
		$mytext = $mytext.'<br>&#10008; email';
	}
	
	
	if (!empty($_POST['user_phone']))
	{
		$mytext = $mytext.'<br>&#10004; <del>phone</del>';
	} else {
		
		$mytext = $mytext.'<br>&#10008; phone';
	}
	
	
    echo $mytext ;
    die();
	
}

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.yandex.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'armis-dveri@yandex.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = '87#af^sd87&7df'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('armis-dveri@yandex.ru', 'Краски Armisplus'); // от кого будет уходить письмо?
$mail->addAddress('89278832585@mail.ru');     // Кому будет уходить письмо 
$mail->addAddress('armis-dveri@yandex.ru');               // Name is optional
//$mail->addReplyTo('mya_solntse@mail.ru', 'Information');
//$mail->addCC('mya_solntse@mail.ru');
$mail->addBCC('dinafpva@mail.ru');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка # ' .$rand_my. ' с сайта Armisplus.ru';
$mail->Body    = 'Пользователь: <u><big>' .$name . '</big></u> оставил заявку # ' .$rand_my. '<br>Почта этого пользователя: ' .$email. '<br>Телефон этого пользователя: ' .$phone. ' <br>Он написал: ' .$txt;
$mail->AltBody = '';


if(!$mail->send()) {
	 header("location: contacts.html#modal_error");
   
} else {
    header("location: contacts.html#modal_thanks");
}

?>
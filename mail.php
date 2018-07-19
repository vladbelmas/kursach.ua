<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['work_email'];
$work_type = $_POST['work_type'];
$work_theme = $_POST['work-subject'];
$subject = $_POST['subject'];
$date = $_POST['deadline'];
$unic = $_POST['unicum'];
$pages = $_POST['pages'];

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'uashared15.twinservers.net';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'admin@kursach.net.ua'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = '123Qwe2qWe3qwE'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('admin@kursach.net.ua'); // от кого будет уходить письмо?
$mail->addAddress('gorinenko1998@gmail.com');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment($_FILES['upload']['tmp_name'], $_FILES['upload']['name']);    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Новая заявка с сайта';
$mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$phone. '<br>Почта этого пользователя: ' 
    .$email. '<br>Тип работы: ' .$work_type. '<br>Тема работы: ' .$work_theme.
    '<br>Предмет: ' .$subject. '<br>Дата выполнения: ' .$date. 
    '<br>Процент уникальности: ' .$unic. 
    '<br>Количество страниц: ' .$pages.
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: index.html');
}
?>
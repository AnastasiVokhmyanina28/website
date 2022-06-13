<?php
include_once 'db.php';
require 'phpmailer\PHPMailer.php';
require 'phpmailer\SMTP.php';
require 'phpmailer\Exception.php';

if (isset($_POST['done'])) {
    $fio = $_POST['fio'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $date = $_POST['date'];
    $time = $_POST['time'];



    mail($email, "Запись на услугу","Доброго времени суток ".$fio.". Вы записсались на услугу: ".$service." Дата: ".$date.". Время: ".$time, "From: blagotvoritelnyifobelyibim@yandex.ru \r\n");

}

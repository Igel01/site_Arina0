<?php
$to = "ezhina0@gmail.com";
$subject = "Новый посетитель";

$message = "Заход на сайт\nIP: " . $_SERVER['REMOTE_ADDR'] . "\nВремя: " . date("Y-m-d H:i:s");

$headers = "From: your@email.com\r\n";
$headers .= "Reply-To: your@email.com\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";

mail($to, $subject, $message, $headers);
?>
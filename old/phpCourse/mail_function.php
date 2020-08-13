<?php
ini_set("SMTP","192.168.1.1");
ini_set('sendmail_from', 'mahmoud.dahab99@gmail.com');
$to      = 'm_ragab333@yahoo.com';
$subject = 'A new message';
$message = 'Hello Mohamed';

mail($to, $subject, $message);
/*

 OUTPUT ==>

    Warning: mail(): Failed to connect to mailserver at "192.168.1.1" port 25,
 verify your "SMTP" and "smtp_port" setting in php.ini or use ini_set() in C:\xampp\htdocs\phpCourse\mail_function.php on line 8

*/
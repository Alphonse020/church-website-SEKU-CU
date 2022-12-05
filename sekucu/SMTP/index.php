<?php
require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 465 ,'TLS'))
  ->setUsername('6ae7034651f43d')
  ->setPassword('26b6b7403a63d7')
;
// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('WELCOME TO SEKUCU'))
  ->setFrom(['noreply@sekucu.org' => 'SEKU CU'])
  ->setTo(['davies.langatt@gmail.com', 'davies.langatt@gmail.com' => 'A name'])
  ->setBody('')
  ;

// Send the message
$result = $mailer->send($message);
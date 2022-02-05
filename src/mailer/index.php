<?php

// {"from": "akim.savchenko@gmail.com", "pass": "MemoranduM169", "port": "465", "login": "akim.savchenko@gmail.com", "address": "smtp.gmail.com", "encryption": "ssl"}

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 2525, 'tls'))
    ->setUsername('6f691e63ed843d')
    ->setPassword('0adcd5c8c00ff7')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
    ->setFrom(['john@doe.com' => 'John Doe'])
    ->setTo(['akim_savchenko@yahoo.com' => 'Akym'])
    ->setBody('Here is the message itself')
;

$attachment_1 = Swift_Attachment::fromPath(__DIR__ . '/../../attachments/attach_1.txt');
$attachment_2 = Swift_Attachment::fromPath(__DIR__ . '/../../attachments/attach_2.txt');

//$attachment->setFile();

// The two statements above could be written in one line instead
$message->attach($attachment_1);
$message->attach($attachment_2);

// Send the message
$result = $mailer->send($message);
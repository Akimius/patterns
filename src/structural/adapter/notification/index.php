<?php

require __DIR__ . '/../../../../vendor/autoload.php';

use Adapter\notification\EmailNotification;
use Adapter\notification\NotificationInterface;
use Adapter\notification\SlackApi;
use Adapter\notification\SlackNotification;

class Notificator
{
    private NotificationInterface $notification;

    public function __construct(NotificationInterface $notification)
    {
        $this->notification = $notification;
    }

    public function notify(): void
    {
        $this->notification->send('Alarm', 'Out site is down');
    }
}

$email = new EmailNotification('email@example.com');
$notifier = new Notificator($email);
$notifier->notify();


$slackApi = new SlackApi('akimius', 'XXXXXXXXXXXX');

$slack = new SlackNotification($slackApi, '123456');
$notifier = new Notificator($slack);
$notifier->notify();
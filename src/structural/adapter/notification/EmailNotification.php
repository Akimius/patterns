<?php

namespace Adapter\notification;

class EmailNotification implements NotificationInterface
{
    private string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function send(string $title, string $message): void
    {
        echo "Sent email with title '$title' to '$this->email' that says '$message'.\n";
    }
}
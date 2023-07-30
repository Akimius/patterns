<?php

declare(strict_types=1);

namespace Adapter\notification;

interface NotificationInterface
{
    public function send(string $title, string $message);
}
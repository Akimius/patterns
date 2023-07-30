<?php

namespace Adapter\notification;

class SlackNotification implements NotificationInterface
{
    private SlackApi $slackApi;
    private string $chatId;

    public function __construct(SlackApi $slackApi, string $chatId)
    {
        $this->slackApi = $slackApi;
        $this->chatId   = $chatId;
    }

    public function send(string $title, string $message): void
    {
        $this->slackApi->logIn();
        $this->slackApi->sendMessage($this->chatId, "#" . $title . "# " . strip_tags($message));
    }
}
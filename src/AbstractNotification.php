<?php

namespace Vantyz\Notification;

abstract class AbstractNotification implements Notification
{
    public string $status = "Не отправлено";
    public string $timestamp;

    abstract public function send(string $message): void;

    abstract public function getType(): string;

    public function getStatus(): string
    {
        return $this->status;
    }
}

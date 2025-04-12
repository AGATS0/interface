<?php

namespace Vantyz\Notification;


class SMSNotification extends AbstractNotification
{
    public function send(string $message): void
    {
        echo "SMS отправлен с таким содержимым: $message" . PHP_EOL;
        $this->status = 'Сообщение отправлено';
    }

    public function getType(): string
    {
        return 'SMS';
    }
}
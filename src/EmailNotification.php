<?php

namespace Vantyz\Notification;

class EmailNotification extends AbstractNotification
{
    public function send(string $message): void
    {
        echo "Email отправлен с таким содержимым: $message" . PHP_EOL;
        $this->status = 'Сообщение отправлено';
    }

    public function getType(): string
    {
        return 'Email';
    }
}
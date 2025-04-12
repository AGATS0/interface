<?php

namespace Vantyz\Notification;

interface Notification
{
    public function send(string $message): void;
    public function getStatus(): string;
    public function getType(): string;
}
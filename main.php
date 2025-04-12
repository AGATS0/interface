<?php

require 'vendor/autoload.php';

use Vantyz\Notification\SMSNotification;

$a = new SMSNotification();
$a->send('hello');
echo $a->getType();

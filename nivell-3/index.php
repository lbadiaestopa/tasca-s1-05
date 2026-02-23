<?php

require_once 'Email.php';
require_once 'SMS.php';
require_once 'RegularMail.php';

$notifications = [
    new Email("Hola per email"),
    new SMS("Hola per SMS"),
    new RegularMail("Hola per carta")
];

foreach ($notifications as $notification) {
    $notification->send();
}
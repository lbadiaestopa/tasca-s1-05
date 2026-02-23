<?php

    require_once 'Notifications.php';

    class Email extends Notifications {
        public function send(): void {
            echo "Sending email: " . $this->message . "\n";
        }
    }

?>
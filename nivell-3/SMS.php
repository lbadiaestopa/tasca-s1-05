<?php

    require_once 'Notifications.php';

    class SMS extends Notifications {
        public function send(): void {
            echo "Sending SMS: " . $this->message . "\n";
        }
    }

?>
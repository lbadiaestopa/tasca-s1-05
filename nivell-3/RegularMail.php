<?php

    require_once 'Notifications.php';

    class RegularMail extends Notifications {
        public function send(): void {
            echo "Sending regular mail: " . $this->message . "\n";
        }
    }

?>
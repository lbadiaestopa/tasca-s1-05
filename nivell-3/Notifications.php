<?php

    abstract class Notifications {
        protected string $message;

        public function __construct($message) {
            $this->message = $message;
        }

        abstract public function send(): void;
    }

?>
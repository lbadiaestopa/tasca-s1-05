<?php

require_once 'Shape.php';

class Rectangle extends Shape {
    public function area(): float {
        return ($this->base * $this->height);
    }
}

?>
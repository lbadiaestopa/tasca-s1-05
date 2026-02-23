<?php

require_once 'Shape.php';

class Circle extends Shape {

    private float $radius;
    
    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function area(): float {
        return pi() * $this->radius * $this->radius;
    }
}

?>
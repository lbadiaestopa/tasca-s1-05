<?php

require_once __DIR__ . '/Shape.php';

class Triangle extends Shape
{
    public function __construct(float $base, float $height)
    {
        parent::__construct($base, $height);
    }
    
    public function calculateArea(): float
    {
        return ($this->base * $this->height) / 2;
    }
}

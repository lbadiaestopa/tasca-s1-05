<?php

require_once 'AreaCalculator.php';

class Circle implements AreaCalculator
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea(): float
    {
        return pi() * $this->radius * $this->radius;
    }
}

<?php

require_once 'AreaCalculator.php';

class Triangle implements AreaCalculator
{
    private float $base;
    private float $height;

    public function __construct(float $base, float $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea(): float
    {
        return ($this->base * $this->height) / 2;
    }
}
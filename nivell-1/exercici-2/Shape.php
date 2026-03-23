<?php

abstract class Shape implements AreaCalculator
{
    protected float $base;
    protected float $height;

    public function __construct($base, $height) 
    {
        $this->base = $base;
        $this->height = $height;
    }
}

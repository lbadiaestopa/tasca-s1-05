<?php

abstract class Shape {

    protected $base;
    protected $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    abstract public function area(): float;
}
    
?>
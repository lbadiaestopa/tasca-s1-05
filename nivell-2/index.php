<?php

require_once __DIR__ . '/Circle.php';
require_once __DIR__ . '/Rectangle.php';
require_once __DIR__ . '/Triangle.php';

$circle = new Circle(12);
echo $circle->calculateArea() . PHP_EOL;

$rectangle = new Rectangle(12, 8);
echo $rectangle->calculateArea() . PHP_EOL;

$triangle = new Triangle(12, 8);
echo $triangle->calculateArea();
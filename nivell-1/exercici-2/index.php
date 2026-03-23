<?php

require_once __DIR__ . '/AreaCalculator.php';
require_once __DIR__ . '/Shape.php';
require_once __DIR__ . '/Rectangle.php';
require_once __DIR__ . '/Triangle.php';

$rectangle = new Rectangle(12, 14);
$triangle = new Triangle(12,14);

echo $rectangle->calculateArea() . PHP_EOL;
echo $triangle->calculateArea();
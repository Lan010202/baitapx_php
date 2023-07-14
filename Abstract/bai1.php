<?php

abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape {
    protected $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape {
    protected $length;
    protected $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }
}

// Create a Circle object
$circle = new Circle(5);
$circleArea = $circle->calculateArea();
print "Circle Area: " . $circleArea . "\n";

// Create a Rectangle object
$rectangle = new Rectangle(2, 4);
$rectangleArea = $rectangle->calculateArea();
print "Rectangle Area: " . $rectangleArea . "\n";

?>

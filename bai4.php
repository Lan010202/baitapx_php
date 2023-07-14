<?php
abstract class Vehicle {
    protected $name;
    public function __construct($name) {
        $this->name = $name;
    }
    abstract public function start();
}

class Car extends Vehicle {
    public function start() {
        print("Start the car");
    }
}

class Motorcycle extends Vehicle {
    public function start() {
        print("Start the motorcycle");
    }
}

$car = new Car("My car");
$car->start(); // Start the car

$motorcycle = new Motorcycle("My motorcycle");
$motorcycle->start(); // Start the motorcycle
?>

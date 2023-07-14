<?php

abstract class Animal {/*Tạo một abstract class "Animal" (Động vật) với một phương thức trừu tượng là "makeSound". 
    Tạo các lớp con "Dog" (Chó) và  "Cat" (Mèo) kế thừa từ lớp Animal và triển khai phương thức makeSound theo
     cách riêng của từng loại động vật.*/
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

// Create a Dog object
$dog = new Dog();
$dogSound = $dog->makeSound();
print "Dog says: " . $dogSound . "\n";

// Create a Cat object
$cat = new Cat();
$catSound = $cat->makeSound();
print "Cat says: " . $catSound . "\n";

?>

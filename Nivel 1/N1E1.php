<?php
abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function makeSound() {
        return "Woof, Woof";
    }
}

class Cat extends Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function makeSound() {
        return "Miau, Miau";
    }
}

$dog1 = new Dog("Shadow");
echo $dog1->name . " does " . $dog1->makeSound() . "\n";

$cat1 = new Cat("Panteri");
echo $cat1->name . " does " . $cat1->makeSound() . "\n";

$cat2 = new Cat("Frodo");
echo $cat2->name . " does " . $cat2->makeSound() . "\n";
?>
<?php
class Dog extends Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function makeSound() {
        return "Woof, Woof";
    }
}
?>
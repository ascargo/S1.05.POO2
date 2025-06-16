<?php
require_once 'animal.php';
require_once 'cat.php';
require_once 'dog.php';

$dog1 = new Dog("Shadow");
echo $dog1->name . " does " . $dog1->makeSound() . "\n";

$cat1 = new Cat("Panteri");
echo $cat1->name . " does " . $cat1->makeSound() . "\n";

$cat2 = new Cat("Frodo");
echo $cat2->name . " does " . $cat2->makeSound() . "\n";
?>
<?php
require_once 'animal.php';
require_once 'cat.php';
require_once 'dog.php';

$dog1 = new Dog("Shadow");
$cat1 = new Cat("Panteri");
$cat2 = new Cat("Frodo");

echo $dog1->name . " does " . $dog1->makeSound() . "\n";
echo $cat1->name . " does " . $cat1->makeSound() . "\n";
echo $cat2->name . " does " . $cat2->makeSound() . "\n";
?>
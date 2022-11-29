<?php

/*
Output:
Buno: Woof, Woof, Woof...
Michan: Meow, Meow, Meow...
*/

require_once('./zoo/Cat.php');
require_once('./zoo/Dog.php');

$dog = new Dog("Buno");
$dog->sound();

$cat = new Cat("Michan");
$cat->sound();
?>
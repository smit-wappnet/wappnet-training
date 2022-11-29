<?php
require_once('Animal.php');

class Dog extends Animal
{
    public function sound()
    {
        echo "$this->name: Woof, Woof, Woof...<br>";
    }
}
?>
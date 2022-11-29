<?php

require_once('Animal.php');


class Cat extends Animal
{
    public function sound()
    {
        echo "$this->name: Meow, Meow, Meow...<br>";
    }
}
?>
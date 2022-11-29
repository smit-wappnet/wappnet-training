<?php

require_once('Animal.php');

class Cat implements Animal
{
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function sound()
    {
        echo "$this->name: Meow, Meow, Meow...<br>";
    }
}

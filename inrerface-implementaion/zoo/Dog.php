<?php
require_once('Animal.php');

class Dog implements Animal
{
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function sound()
    {
        echo "$this->name: Woof, Woof, Woof...<br>";
    }
}

<?php

require_once('Animal.php');

class Dog
{
    use Animal;
    public function __construct($name)
    {
        $this->name = $name;
        $this->word = "Woof";
    }
}
